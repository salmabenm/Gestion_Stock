<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'producty';
    protected $fillable = ['name', 'description', 'price', 'quantity','categories'];

    // Since you mentioned disabling timestamps, we do that in the model itself.
    public $timestamps = false;

    // Rest of your model code...
}
