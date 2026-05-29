<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use App\Http\Requests\StoreMerchandiseRequest;
use App\Http\Requests\UpdateMerchandiseRequest;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Merchandise::query();

        return $query->paginate($request->input('per_page', 15));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMerchandiseRequest $request)
    {
        $merchandise = Merchandise::create($request->validated());
        return response()->json($merchandise, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Merchandise $merchandise)
    {
        return response()->json($merchandise);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerchandiseRequest $request, Merchandise $merchandise)
    {
        $merchandise->update($request->validated());
        return response()->json($merchandise);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merchandise $merchandise)
    {
        $merchandise->delete();
        return response()->noContent();
    }
}
