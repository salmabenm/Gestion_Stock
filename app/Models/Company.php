<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $fillable = ['company', 'addcompany', 'emcompany','phcompany' /* Add other fields you want to allow for mass assignment */];
}
