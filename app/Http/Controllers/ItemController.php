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
    public function update(Request $request, string $id)
    {
        $ItemskUpdate = Item::find($id);
        if ($ItemskUpdate) {
            $validatedData = $request->validate([
                'product_name' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'description' => 'nullable|string',
                'item_type' => 'required|string|max:255',
                'price' => 'required|numeric',
            ]);

            $ItemskUpdate->product_name = $validatedData['product_name'];
            $ItemskUpdate->category = $validatedData['category'];
            $ItemskUpdate->description = $validatedData['description'];
            $ItemskUpdate->item_type = $validatedData['item_type'];
            $ItemskUpdate->price = $validatedData['price'];

            if ($ItemskUpdate->save()) {
                return response()->json([
                    'Message' => 'Stock updated with success.',
                    'Stock' => $ItemskUpdate
                ], 200);
            } else {
                return response()->json([
                    'Message' => 'We could not update the stock.',
                ], 500);
            }
        } else {
            return response()->json([
                'Message' => 'We could not find the stock.',
            ], 500);
        }
    }


    public function deleteitem(string $id){
        $itemdelete = Item::find($id);
        if ($itemdelete) {
            $itemdelete->delete();
            return response()->json([
                'Message: ' => 'item delete with success.',
                'item: ' => $itemdelete
            ], 200);
        } else {
            return response([
                'Message: ' => 'We could not delete the item.',
            ], 500);
        }
    }
}