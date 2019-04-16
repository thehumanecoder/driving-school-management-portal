<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class DriverController extends Controller
{
    public function add(Request $request){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $pic=$request->file('image');
        $new_name = rand().'.'.$pic->getClientOriginalExtension();
        $pic->move(public_path("drivers"),$new_name);
        $data =DB::table('drivers')->insert([
            'name' => $request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'license'=>$request->license,
            'dob'=>$request->dob,
            'blood'=>$request->bgr,
            'doj'=>$request->doj,
            'pic'=>$new_name,
            'created_at' => $time,
            'updated_at' => $time
 
        ]);
        return redirect()->back()->with('success','Driver Added Successfully');
    }
    public function getall(){
        $details=DB::table('drivers')->get();
        return view('driver',compact('details'));
    }
    public function getdetails($id){
        $details = DB::table('drivers')->where('id',$id)->get();
        return view('driverdet',compact('details'));
    }
    public function getsome($id){
        $details = DB::table('drivers')->where('id',$id)->get();
        return view('moddriver',compact('details'));
    }
    public function update(Request $request,$id){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $data =DB::table('drivers')->where('id',$id)->update([
            'name' => $request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'license'=>$request->license,
            'dob'=>$request->dob,
            'blood'=>$request->bgr,
            'doj'=>$request->doj,
            'updated_at' => $time
 
        ]);
        return redirect()->back()->with('success','Driver Data Updated Successfully');
    }
}
