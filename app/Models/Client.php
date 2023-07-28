<?php

// app/Models/Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $table = 'client'; // Replace 'your_custom_table_name' with the actual table name in your database.
    protected $fillable = ['name', 'email', 'phone', 'address' /* Add other fields you want to allow for mass assignment */];
    // Rest of your model code...
}
