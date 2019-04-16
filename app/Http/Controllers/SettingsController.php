<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class SettingsController extends Controller
{
    public function addTcf(Request $request){
        $time = \Carbon\Carbon::now()->toDateString();
        $data = DB::table('settings')->insert([
            'tcf'->$request->tcf,
            'created_at'=>$time,
            'updated_at'=>$time    
        ]);
        return redirect()->back()->with('success','Total Contacted Fees Updated Successfully');
    }
    public function getusers(){
        $details = DB::table('users')->get();

        return view('settings',compact('details'));
    }
}
