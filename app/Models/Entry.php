<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entree';
    protected $fillable = ['order_number', 'customer_name', 'product_name', 'quantity', 'total_price','date'];
}
