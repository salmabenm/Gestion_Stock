<?php
// App\Models\Poste.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    protected $table = 'poste';
    protected $fillable = ['poste', 'location' /* Add other fields you want to allow for mass assignment */];

    // Your other model logic, relationships, and methods go here...
}