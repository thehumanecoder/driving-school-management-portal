<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name','regno','father','mother','mobile','address','dob','blood','email','doj','time','picture',
    ];
}
