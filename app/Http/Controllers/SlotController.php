<?php
use Carbon\Carbon;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
class SlotController extends Controller
{   
    public function addslot(Request $request,$id){
        $time = \Carbon\Carbon::now()->toDateString();
        $data = DB::table('slots')->insert([
            'trainee_id'=>$request->traineeid,
            'vehicle_id'=>$id,
            'slottime'=>$request->ti,
            'slotdate'=>$request->date,
            'created_at' => $time,
            'updated_at' => $time
        ]);
        return redirect()->back()->with('success','Slot Added Successfully');
    }

        public function getall(){

            $details = DB::table('vehicles')->get();
    
            return view('slots',compact('details'));
        }
        public function getdetails($id){
            $details = DB::table('slots')
            ->leftJoin('customers','trainee_id','=','customers.id')
            ->leftjoin('vehicles','vehicle_id','=','vehicles.id')
            ->where('vehicle_id',$id)
            ->get();
            return view('slotden',compact('details'));
        }
        
        public function getdetforslot($id){
            $details = DB::table('vehicles')->where('id',$id)->get();
            $trainees=DB::table('customers')->get();
            return view('formslot',compact('details','trainees'));
        }
        public function editslot($id){
        
            $details = DB::table('slots')
            ->leftJoin('customers','trainee_id','=','customers.id')
            ->leftjoin('vehicles','vehicle_id','=','vehicles.id')
            ->where('vehicle_id',$id)
            ->get();
    
            return view('editslot',compact('details'));
        }
        public function getsvt($id1,$id2){
            $details = DB::table('vehicles')->where('id',$id1)->get();
            $trainees=DB::table('customers')->where('id',$id2)->get();
            $slotdet=DB::table('slots')->where('vehicle_id',$id1)->where('trainee_id',$id2)->get();
            return view('updateslot',compact('details','trainees','slotdet'));
        }
        public function update(Request $request,$id){
            $time = \Carbon\Carbon::now()->toDateString();
            $update = DB::table('slots')->where('id',$id)->update([
                    'slottime'=>$request->ti,
                    'slotdate'=>$request->date,
                    'updated_at' => $time
                ]);
            return redirect()->back()->with('success','Data Updated Successfully');
        }
        public function delslot($id1,$id2){
            $details = DB::table('vehicles')->where('id',$id1)->get();
            $trainees=DB::table('customers')->where('id',$id2)->get();
            $slotdet=DB::table('slots')->where('vehicle_id',$id1)->where('trainee_id',$id2);
            $slotdet->delete();
            return redirect()->back()->with('success','Data Deleted Successfully');
        }
}
