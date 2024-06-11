<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
     // Get all items
     public function index()
     {
         return Hospital::all();
     }

     // Create a new item
     public function store(Request $request)
     {
        dd($request);
        $this->validate($request, [
             'name' => 'required|string|max:255',
             'logo' => 'required|string|max:255',
             'adress' => 'required|string|max:255',
             'desc' => 'required|string|max:255',
             'open_time' => 'required',
             'close_time' => 'required'
        ]);


         $hospitalpost = Hospital::create($request->all());
         if ($hospitalpost) {
             return response()->json([
                 'Message' => 'Success!',
                 'hospital created' => $hospitalpost
             ], 200);
         } else {
             return response()->json([
                 'Message' => 'We could not create a new hospital.',
             ], 500);
         }
     }

     // Get a single item
     public function show($id)
     {
         $item = Hospital::findOrFail($id);
         return response()->json($item);
     }

     // Update an item
     public function update(Request $request, string $id)
     {
         $ItemskUpdate = Hospital::find($id);
         if ($ItemskUpdate) {
             $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'logo' => 'required|string|max:255',
                'adress' => 'required|string|max:255',
                'desc' => 'required|string|max:255',
                'open_time' => 'required',
                'close_time' => 'required'
             ]);

             $ItemskUpdate->product_name = $validatedData['product_name'];
             $ItemskUpdate->category = $validatedData['category'];
             $ItemskUpdate->description = $validatedData['description'];
             $ItemskUpdate->item_type = $validatedData['item_type'];
             $ItemskUpdate->price = $validatedData['price'];

             if ($ItemskUpdate->save()) {
                 return response()->json([
                     'Message' => 'Hospital data updated with success.',
                     'Stock' => $ItemskUpdate
                 ], 200);
             } else {
                 return response()->json([
                     'Message' => 'We could not update the Hospital data.',
                 ], 500);
             }
         } else {
             return response()->json([
                 'Message' => 'We could not find the Hospital data.',
             ], 500);
         }
     }


     public function deleteitem(string $id){
         $itemdelete = Hospital::find($id);
         if ($itemdelete) {
             $itemdelete->delete();
             return response()->json([
                 'Message: ' => 'Hospital data delete with success.',
                 'item: ' => $itemdelete
             ], 200);
         } else {
             return response([
                 'Message: ' => 'We could not delete the Hospital data.',
             ], 500);
         }
     }
}
