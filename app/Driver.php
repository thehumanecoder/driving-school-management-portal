<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable=[
        'name','phone','address','license','dob','blood','doj','pic'
    ];
}
