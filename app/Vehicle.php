<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable=[
        'model','registration','rcno','poc','fitness','color','chesis','isf','image'
    ]
}
