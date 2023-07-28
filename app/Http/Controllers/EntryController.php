<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
