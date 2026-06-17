<?php

namespace App\Http\CartController;


class LocationController extends CartController
{
public function add(Request $request)
{
    $request->validate([
        'merchandise_id' => 'required|exists:merchandise,id',
        'quantity' => 'required|integer|min:1',
    ]);

    $cart = session()->get('cart', []);
    $id = $request->merchandise_id;

    if (isset($cart[$id])) {
        $cart[$id]['quantity'] += $request->quantity;
    } else {
        $item = Merchandise::findOrFail($id);
        $cart[$id] = [
            'name'     => $item->name,
            'price'    => $item->price,
            'image'    => $item->image,
            'quantity' => $request->quantity,
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', "{$cart[$id]['name']} added to cart!");
}

public function index()
{
    $cart = session()->get('cart', []);
    $total = collect($cart)->sum(fn($i) => $i['price'] * $i['quantity']);
    return view('cart.index', compact('cart', 'total'));
}

public function remove($id)
{
    $cart = session()->get('cart', []);
    unset($cart[$id]);
    session()->put('cart', $cart);
    return redirect()->route('cart.index')->with('success', 'Item removed.');
}
}