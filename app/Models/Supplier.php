<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{   public $timestamps = false;
    protected $table = 'suppliers'; // Replace 'your_custom_table_name' with the actual table name in your database.
    protected $fillable = ['name', 'phone','email','adresse' /* Add other fields you want to allow for mass assignment */];
    // Rest of your model code...
}
