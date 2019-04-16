<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Vehicle;

class VehicleController extends Controller
{
    public function addnew(Request $request){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $pic=$request->file('image');
        $new_name = rand().'.'.$pic->getClientOriginalExtension();
        $pic->move(public_path("vehicles"),$new_name);
        $data = DB::table('vehicles')->insert([
            'model'=>$request->model,
            'registration'=>$request->registration,
            'rcno'=>$request->rc,
            'poc'=>$request->pollution,
            'fitness'=>$request->fitness,
            'color'=>$request->color,
            'chesis'=>$request->chesis,
            'isf'=>$request->dosb,
            'image'=>$new_name,
            'created_at' => $time,
            'updated_at' => $time
        ]);
        return redirect()->back()->with('success','Vehicle Added Successfully');
    }
    public function getall(){
        $details = DB::table('vehicles')->get();

        return view('vehicle',compact('details'));
    }
    public function getdetails($id){
        $details = DB::table('vehicles')->where('id',$id)->get();

        return view('vehicledetail',compact('details'));
    }
    public function edit($id){
        
        $details = DB::table('vehicles')->where('id',$id)->get();

        return view('editvehicle',compact('details'));
    }
    public function update(Request $request,$id){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $update = DB::table('vehicles')->where('id',$id)->update([
            'model' => $request->model,
            'registration' =>$request->registration,
            'rcno' =>$request->rcno,
            'poc' =>$request->poc,
            'fitness' =>$request->fitness,
            'color' =>$request->color,
            'chesis'=>$request->chesis,
            'isf'=>$request->isf,
            'updated_at' => $time
        ]);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
