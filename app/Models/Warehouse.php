<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouse';
    protected $fillable = ['warehouse', 'warehouseadresse', 'capacity' /* Add other fields you want to allow for mass assignment */];
}
