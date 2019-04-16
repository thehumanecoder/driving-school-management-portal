<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;

class NotificationController extends Controller
{
    public function getAll(){
        $time = \Carbon\Carbon::now()->toDateTimeString();
    }
}
