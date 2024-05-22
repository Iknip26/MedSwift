<?php

namespace App\Http\Controllers;

use App\Models\Stocks;
use Illuminate\Http\Request;

class stocksController extends Controller
{
    public function indexstocks (){
        $stock = Stocks::all();
        return Stocks::collection(($stock));
    }

    public function postStock(Request $request)
    {
        $this->validate($request, [
            'hospital_id' => 'required|exists:hospitals,id',
            'item_id' => 'required|exists:items,id',
            'stock' => 'required|string',
        ]);

        $stockPost = Stocks::create($request->all());
        if ($stockPost) {
            return response()->json([
                'Message' => 'Success!',
                'Stock created' => $stockPost
            ], 200);
        } else {
            return response()->json([
                'Message' => 'We could not create a new stock.',
            ], 500);
        }
    }

    public function updateStock(Request $request, string $id)
    {
        $stockUpdate = Stocks::find($id);
        if ($stockUpdate) {
            $validatedData = $request->validate([
                'hospital_id' => 'required|exists:hospitals,id',
                'item_id' => 'required|exists:items,id',
                'stock' => 'required|string',
            ]);

            $stockUpdate->hospital_id = $validatedData['hospital_id'];
            $stockUpdate->item_id = $validatedData['item_id'];
            $stockUpdate->stock = $validatedData['stock'];

            if ($stockUpdate->save()) {
                return response()->json([
                    'Message' => 'Stock updated with success.',
                    'Stock' => $stockUpdate
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

    public function deleteStock(string $id)
    {
        $stockDelete = Stocks::find($id);
        if ($stockDelete) {
            $stockDelete->delete();
            return response()->json([
                'Message' => 'Stock deleted with success.',
                'Stock' => $stockDelete
            ], 200);
        } else {
            return response()->json([
                'Message' => 'We could not delete the stock.',
            ], 500);
        }
    }
}
