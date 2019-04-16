<?php
use Carbon\Carbon;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
class TrainingController extends Controller
{
    
    public function getCustomers(){

        $details = DB::table('customers')->get();

        return view('training',compact('details'));
    }
    public function allotvehicle($id){
        $vehicles = DB::table('vehicles')->get();
        $driver = DB::table('drivers')->where('id',$id)->get();
        return view('training1',compact('vehicles','driver'));
    }
    public function dvi(Request $request){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $vehicleid=$request->vehicleid;
        $vehicle = DB::table('vehicles')->where('id',$vehicleid)->get();
        $data = DB::table('vehicleallot')->insert([
            'vehicleid'=>$vehicleid,
            'vehiclereg'=>$vehicle[0]->registration,
            'driverid'=>$request->driverid,
            'drivername'=>$request->drivername,
            'date'=>$request->date,
            'created_at' => $time,
            'updated_at' => $time
        ]);
        return redirect()->back()->with('success','Vehicle Alloted Successfully');
    }
    public function trainingdet($id){
    
        $profile = DB::table('customers')->where('id',$id)->get();
        $details = DB::table('slots')->where('trainee_id',$id)->leftJoin('vehicles','slots.vehicle_id','=','vehicles.id')->get();
        $i=1;
        return view('training2',compact('details','profile','i'));
    
    }
}
  
