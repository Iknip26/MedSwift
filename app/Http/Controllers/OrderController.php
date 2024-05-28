<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function show($id)
    {
        $item = Order::findOrFail($id);
        if (!$item) {
            return response()->json([
                'message' => 'Order not found.'
            ], 404);
        }
        return response()->json($item);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_id' => 'required|exists:users,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'order_date' => 'required|date',
            'payment_method' => 'required|in:cash,cashless',
            'isPaymentSuccess' => 'required|boolean',
            'shipment_date' => 'required|date',
            'shipment_address' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $order = Order::create($validator->validated());

        return response()->json($order, 201);
    }
}