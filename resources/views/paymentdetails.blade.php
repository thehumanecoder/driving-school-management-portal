@extends('adminlte::page')
@section('content')
<section class="content">
  
    <div class="row">
    <div class="col-md-12">
        <div class="box box-widget">
          <div class="box-header with-border">
            <div class="user-block">
              <span class="username">Payment Details of {{ucwords($data[0]->name)}}</span>
            </div>
          </div>
                      @foreach($details as $data)
                        <div class="box-body">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                      <p style="font-size:18px;"><span class="text-green">Payment Type</span> : <span class="text-uppercase">{{$data->payment_type}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Amount</span> : <span class="text-uppercase">{{$data->amount}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Total Contacted Fess</span> : <span class="text-uppercase">{{$data->total}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Date of Payment</span> : <span class="text-uppercase">{{$data->date}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Mode of Payment</span> : <span class="text-uppercase">{{$data->payment_mode}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Recieved By</span> : <span class="text-uppercase">{{$data->recieved_by}}</span></p>
                                      
                </div>
              </div>
            </div>
                        @endforeach

                      <a href="{{url('/payments')}}" class="btn btn-success center-align">Go Back</a>
             
          </div>
         
</section>
@stop