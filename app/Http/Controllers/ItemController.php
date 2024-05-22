<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Get all items
    public function index()
    {
        return Item::all();
    }

    // Create a new item
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'item_type' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $item = Item::create($validatedData);
        return response()->json($item, 201);
    }

    // Get a single item
    public function show($id)
    {
        $item = Item::findOrFail($id);
        return response()->json($item);
    }

    // Update an item
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'product_name' => 'sometimes|required|string|max:255',
            'category' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'item_type' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric',
        ]);

        $item = Item::findOrFail($id);
        $item->update($validatedData);
        return response()->json($item);
    }

    // Delete an item
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return response()->json(null, 204);
    }
}