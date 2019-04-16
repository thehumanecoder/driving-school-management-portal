<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller
{
    public function getUserDetails(){
        $details=DB::table('customers')->get();

        return view('payments',compact('details'));
    }
    public function getUserForPayment($id){
        $details=DB::table('customers')->where('id',$id)->get();

        return view('addpayment',compact('details'));
    }
}
