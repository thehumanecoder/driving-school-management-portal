@extends('adminlte::page')
@section('content')

<h2 class="page-header">Vehicles List & Details</h2>
<section class="content">
        <div class="callout callout-info">
                <h4>Instruction !!</h4>
                Choose a vehicle below to begin the operation.
              </div>
<div class="container">
        <a href="{{ url('advehc')}}" class="btn btn-warning">Add Vehicles</a> 
    <div class="box box-solid box-success">
       <div class="box-header with-border">
           <div class="row">
               <div class="col-md-3 col-sm-3">
                   <h4 class="text-center">Vehicle Picture</h4>
               </div>
               <div class="col-md-9 col-sm-9">
                            <h4 class="text-center">Vehicle Details</h4>
               </div>
           </div>
       </div>
       @foreach($details as $item)
       <div class="box-body with-border">
            <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <h4 class="align-center"><img src="{{url('../')}}/vehicles/{{$item->image}}"  class="vehicle-image"></h4>
                    </div>
                    <div class="col-md-7 col-sm-7 offset-md-2 offset-sm-2 text-center">
                                 <h3 class="text-muted">{{$item->model}}</h3>
                                 <p style="font-size:18px;"><span class="text-green">Registration Number</span> : <span class="text-uppercase">od-28-a-1410</span></p>
                                 <p style="font-size:18px;"><span class="text-green">Vehicle Colour</span> : <span class="text-uppercase">Brown</span></p>
                                 <p style="font-size:18px;"><span class="text-green">Date of service commensing</span> : <span class="text-uppercase">16/11/2018</span></p>
                                 <a href="{{url('vehicledetail')}}/{{$item->id}}" class="btn btn-danger">{{_('Get Full Details')}}</a>
                                 <a href="{{url('editvehicle')}}/{{$item->id}}" class="btn btn-success">{{_('Modify Vehicle Data')}}</a>
                    </div>
                </div>
       </div>
       <hr>
       @endforeach
    </div>
    
</div>
</section>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

@section('js')
   
@stop