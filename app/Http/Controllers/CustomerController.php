<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class CustomerController extends Controller
{
    public function addnew(Request $request){
        $rand = rand(100000,999999);
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $pic=$request->file('image');
        $new_name = rand().'.'.$pic->getClientOriginalExtension();
        $pic->move(public_path("images"),$new_name);
        $data =DB::table('customers')->insert([
            'name' => $request->name,
            'status'=>'active',
            'father' =>$request->fname,
            'mother' =>$request->mname,
            'mobile' =>$request->cno,
            'address' =>$request->adr,
            'dob' =>$request->dob,
            'blood'=>$request->bgr,
            'email'=>$request->email,
            'doj'=>$request->doj,
            'time'=>$request->doj,
            'regno'=>$rand,
            'picture'=>$new_name,
            'created_at' => $time,
            'updated_at' => $time
 
        ]);

        return redirect()->back()->with('success','Costumer Added Successfully');
    }
    public function getcustomer(){
        $details = DB::table('customers')->get();

        return view('trainee',compact('details'));
    }
    public function details($id){
        $details = DB::table('customers')->where('id',$id)->get();

        return view('traineedet',compact('details'));
    }
    public function editget($id){
        
        $details = DB::table('customers')->where('id',$id)->get();

        return view('edittrainee',compact('details'));
    }
    public function update(Request $request,$id){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $update = DB::table('customers')->where('id',$id)->update([
            'name' => $request->name,
            'father' =>$request->father,
            'mother' =>$request->mother,
            'mobile' =>$request->mobile,
            'address' =>$request->address,
            'dob' =>$request->dob,
            'blood'=>$request->blood,
            'email'=>$request->email,
            'doj'=>$request->doj,
            'time'=>$request->time,
            'updated_at' => $time
        ]);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
