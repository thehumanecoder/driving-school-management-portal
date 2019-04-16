<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;

class PaymentController extends Controller
{
    public function add(Request $request,$id){
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $price='3500';
        $data = DB::table('payments')->insert([
                'date'=>$time,
                'amount'=>$request->amount,
                'total'=>$price,
                'customer_id'=>$id,
                'payment_type'=>$request->catagory,
                'payment_mode'=>$request->mode,
                'updated_at'=>$time,
                'created_at'=>$time,
        ]);
        return redirect()->back()->with('success','Costumer Payment Added Successfully');
    }
    public function getUserPayments($id){
        $data=DB::table('customers')->where('id',$id)->get();
       $details = DB::table('payments')->where('customer_id',$id)
       ->get();
        return view('paymentdetails',compact('details','data'));
    }
    public function setStatus(Request $request,$id){
        $active='Active';
        $inactive='Inactive';
        $status=DB::table('customers')->where('id',$id)->select('status');
        if($status == 'Active'){
            $change = DB::table('user')->where('id',$id)->update([
                'status'=>$inactive
            ]);

        return redirect()->back()->with('success',' Account has been successfully De-Activated');  
        }else{
            $change = DB::table('user')->where('id',$id)->update([
                'status'=>$active
            ]);

        return redirect()->back()->with('success',' Account has been successfully De-Activated');  
        }
    }
}
