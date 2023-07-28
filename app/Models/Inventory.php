<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $fillable = ['name', 'description', 'price', 'quantity','categories','status'];

    // Since you mentioned disabling timestamps, we do that in the model itself.
    public $timestamps = false;

    // Rest of your model code...
}
