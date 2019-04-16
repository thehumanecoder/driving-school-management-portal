<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class LicenseController extends Controller
{
    public function getuser(){

        $details = DB::table('customers')
        ->get();

        return view('license',compact('details'));
    }
    public function adcat($id){
        $details =DB::table('customers')->where('id',$id)->get();

        return view('addlicense',compact('details'));
    }
    public function savecat(Request $request,$id){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $data = DB::table('licenses')->insert([
            'cid'=>$id,
            'catagory'=>$request->catagory,
            'created_at' => $time,
            'updated_at' => $time
        ]);

        return redirect()->back()->with('success','License Catagory Added Successfully,Proceed to Add Data.');
        
    }
    public function licdet($id){
        $details =DB::table('customers')
        ->leftjoin('licenses','customers.id','=','licenses.cid')
        ->where('cid',$id)
        ->get();
      
        return view('addlicensedetails',compact('details'));
    }
   public function getlic($id){
       $details=DB::table('customers')
       ->leftjoin('licenses','customers.id','=','licenses.cid')
       ->where('cid',$id)->get();
    
       return view('updatelicensecat',compact('details'));
   }
    
   public function savecat1(Request $request,$id){
    $time = \Carbon\Carbon::now()->toDateString();
       $data=DB::table('licenses')->where('id',$id)->update([
            'dob'=>$request->dob,
            'llno'=>$request->llno,
            'mobile'=>$request->mobile,
            'application'=>$request->application,
            'slotdate'=>$request->slotdate,
            'created_at'=>$time,
            'updated_at'=>$time
       ]);
       return redirect()->back()->with('success','License details updated successfully for ');
   }
   public function savecat2(Request $request,$id){
         $time = \Carbon\Carbon::now()->toDateString();
         $timea=\Carbon\Carbon::now()->addDays(30);
         $timeb=\Carbon\Carbon::now()->addDays(135);
         $data=DB::table('licenses')->where('id',$id)->update([
            'father'=>$request->father,
            'validity'=>$request->validity,
            'dob'=>$request->dob,
            'llno'=>$request->llno,
            'mobile'=>$request->mobile,
            'application'=>$request->application,
            'slotdate'=>$request->slotdate,
            'firstnot'=>$timea,
            'secondnot'=>$timeb,
            'created_at'=>$time,
            'updated_at'=>$time        
        ]);

        return redirect()->back()->with('success','License details updated successfully for ');
   }
   public function updatecat(Request $request,$id){
    $time = \Carbon\Carbon::now()->toDateTimeString();
    $data = DB::table('licenses')->update([
        'catagory'=>$request->catagory,
        'updated_at' => $time
    ]);

    return redirect()->back()->with('success','License Catagory Updated Successfully,Proceed to Update Data.');
   }
   public function getlicensedetails($id){
    $details = DB::table('licenses')->where('id',$id)
    ->get();

       return view('updatelicense',compact('details'));
   }
   public function updatecat1(Request $request,$id){
    $time = \Carbon\Carbon::now()->toDateString();
    $data=DB::table('licenses')->where('id',$id)->update([
         'dob'=>$request->dob,
         'llno'=>$request->llno,
         'mobile'=>$request->mobile,
         'application'=>$request->application,
         'slotdate'=>$request->slotdate,
         'created_at'=>$time,
         'updated_at'=>$time
    ]);
    return redirect()->back()->with('success','License details updated successfully for ');
   }
   public function updatecat2(Request $request,$id){
    $time = \Carbon\Carbon::now()->toDateString();
    $timea=\Carbon\Carbon::now()->addDays(30);
    $timeb=\Carbon\Carbon::now()->addDays(135);
    $data=DB::table('licenses')->where('id',$id)->update([
       'father'=>$request->father,
       'validity'=>$request->validity,
       'dob'=>$request->dob,
       'llno'=>$request->llno,
       'mobile'=>$request->mobile,
       'application'=>$request->application,
       'slotdate'=>$request->slotdate,
       'firstnot'=>$timea,
       'secondnot'=>$timeb,
       'created_at'=>$time,
       'updated_at'=>$time        
   ]);

   return redirect()->back()->with('success','License details updated successfully for ');
   }
  
   public function getalldetails($id){
       $details = DB::table('licenses')
       ->leftjoin('customers','licenses.cid','=','customers.id')
       ->where('cid',$id)->get();

       return view('viewlicense',compact('details'));
   }
}
