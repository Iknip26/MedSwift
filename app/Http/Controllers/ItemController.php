<?php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Get all items
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
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
        $item = Item::find($id);
        if (!$item) {
            return response()->json(['error' => 'Item not found.'], 404);
        }
        return response()->json($item);
    }

    // Update an item
    public function update(Request $request, string $id)
    {
        $item = Item::find($id);
        if (!$item) {
            return response()->json(['error' => 'Item not found.'], 404);
        }

        $validatedData = $request->validate([
            'product_name' => 'sometimes|required|string|max:255',
            'category' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'item_type' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric',
        ]);

        $item->fill($validatedData);

        if ($item->save()) {
            return response()->json(['message' => 'Item updated successfully.', 'item' => $item], 200);
        } else {
            return response()->json(['error' => 'Failed to update item.'], 500);
        }
    }

    // Delete an item
    public function destroy($id)
    {
        $item = Item::find($id);
        if (!$item) {
            return response()->json(['error' => 'Item not found.'], 404);
        }

        if ($item->delete()) {
            return response()->json(['message' => 'Item deleted successfully.'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete item.'], 500);
        }
    }
}