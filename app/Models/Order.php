<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['First_Name','Last_Name','email','address','city','country','government','Postal_code','Phone_number'];

}

  ?>



