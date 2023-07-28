<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['order_number', 'customer_name', 'product_name', 'quantity', 'total_price','date'];

    // Since you mentioned disabling timestamps, we do that in the model itself.
    public $timestamps = false;

    // Rest of your model code...
}
