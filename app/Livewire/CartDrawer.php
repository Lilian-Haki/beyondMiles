<?php

namespace App\Livewire;

use App\Models\Merchandise;
use Livewire\Component;

class CartDrawer extends Component
{
    public bool $open = false;
    public array $cart = [];

    // Listen for add-to-cart events fired from other components
    protected $listeners = ['addToCart' => 'add'];

    public function add(int $merchandiseId, int $quantity = 1): void
    {
        $item = Merchandise::findOrFail($merchandiseId);

        if ($item->stock_quantity < 1) {
            return;
        }

        if (isset($this->cart[$merchandiseId])) {
            $this->cart[$merchandiseId]['quantity'] += $quantity;
        } else {
            $this->cart[$merchandiseId] = [
                'id'       => $item->id,
                'name'     => $item->name,
                'price'    => $item->price,
                'image'    => $item->image,
                'quantity' => $quantity,
            ];
        }

        $this->open = true; // slide drawer open on add
    }

    public function increment(int $id): void
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id]['quantity']++;
        }
    }

    public function decrement(int $id): void
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id]['quantity']--;
            if ($this->cart[$id]['quantity'] < 1) {
                unset($this->cart[$id]);
            }
        }
    }

    public function remove(int $id): void
    {
        unset($this->cart[$id]);
    }

    public function getTotal(): float
    {
        return collect($this->cart)->sum(fn($i) => $i['price'] * $i['quantity']);
    }

    public function getCount(): int
    {
        return collect($this->cart)->sum('quantity');
    }

    public function render()
    {
        return view('livewire.cart-drawer', [
            'total' => $this->getTotal(),
            'count' => $this->getCount(),
        ]);
    }
}