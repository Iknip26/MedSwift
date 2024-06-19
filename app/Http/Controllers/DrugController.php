<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index()
    {
        $drug = Drug::all();
        return response()->json($drug);
    }

    public function show($id)
    {
        $drug = Drug::find($id);

        if ($drug) {
            return response()->json($drug);
        } else {
            return response()->json(['message' => 'Drug not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'item_id' => 'required',
            'komposisi' => 'required',
            'side_effect' => 'required',
            'dosage' => 'required',
            'using_guide' => 'required',
        ]);

        $postDrug = Drug::create([
            'item_id' => $request->input('item_id'),
            'komposisi' => $request->input('komposisi'),
            'side_effect' => $request->input('side_effect'),
            'dosage' => $request->input('dosage'),
            'using_guide' => $request->input('using_guide'),
        ]);

        if ($postDrug) {
            return response()->json([
                'Message: ' => 'Succes!',
                'Drug created: ' => $postDrug
            ], 200);
        } else {
            return response([
                'Message: ' => 'We could not create a new Drug.',
            ], 500);
        }
    }



    public function update(Request $request, string $id)
    {
        $updateDrug = Drug::find($id);
        if ($updateDrug) {
            $validatedata = $request->validate([
                'item_id' => 'required',
                'komposisi' => 'required',
                'side_effect' => 'required',
                'dosage' => 'required',
                'using_guide' => 'required',
            ]);
            $updateDrug->item_id = $validatedata['item_id'];
            $updateDrug->komposisi = $validatedata['komposisi'];
            $updateDrug->side_effect = $validatedata['side_effect'];
            $updateDrug->dosage = $validatedata['dosage'];
            $updateDrug->using_guide = $validatedata['using_guide'];
            if ($updateDrug->save()) {
                return response()->json([
                    'Message: ' => 'Drug updated with success.',
                    'Drug: ' => $updateDrug
                ], 200);
            } else {
                return response([
                    'Message: ' => 'We could not update the Drug.',
                ], 500);
            }
        } else {
            return response([
                'Message: ' => 'We could not find the Drug.',
            ], 500);
        }
    }
    public function destroy(string $id)
    {
        $deleteDrug = Drug::find($id);
        if ($deleteDrug) {
            $deleteDrug->delete();
            return response()->json([
                'Message: ' => 'Drug delete with success.',
                'Drug: ' => $deleteDrug
            ], 200);
        } else {
            return response([
                'Message: ' => 'We could not delete the Drug.',
            ], 500);
        }
    }
}