<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical_store_channel extends Model
{
    //
    protected $fillable = [
        'customer_name',
        'address',
        'phone',
        'product_id',
        'product_name',
        'unit_price',
        'quantity',
        'total_price',
        'date_sold',
        'payment_type',
        'status'
    ];
}
