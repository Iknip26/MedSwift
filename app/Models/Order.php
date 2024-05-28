<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'hospital_id',
        'order_date',
        'payment_method',
        'isPaymentSuccess',
        'shipment_date',
        'shipment_address',
    ];
}