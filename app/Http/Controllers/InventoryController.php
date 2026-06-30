<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Models\Inventory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $totalPrice = Inventory::all()->sum('price');
        $totalCount = Inventory::all()->sum('count');
        $lowNote = Inventory::where('note', '<', 3)->count();
        $countToday = Inventory::whereDate('created_at', today())->count();
        $inventories = Inventory::all();
        return view('components.inventory.index', compact('inventories', 'countToday', 'lowNote', 'totalCount', 'totalPrice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('components.inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryRequest $request): RedirectResponse
    {
        Inventory::create($request->validated());
        return to_route('components.inventory.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory): View
    {
        return view('components.inventory.edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory): RedirectResponse
    {



//        НЕ ШЛЕТ КОНКРЕТНЫЙ ИНВЕНТАРЬ, НЕЛЬЗЯ ОТРЕДАКТИРОВАТЬ КОЛЛ-ВО, НЕЛЬЗЯ ИЗМЕНИТЬ НАЗВАНИЕ. СКОРЕЕ ВСЕГО ПРОБЛЕМА ВЫШЕЛ, С ЭДИТА НЕ ЛЕТИТ КОНКРЕТНОГО ИНВЕНТАРЯ
//
//
//
//
//
        $validated = $request->validated();
        $inventory->update($validated);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
