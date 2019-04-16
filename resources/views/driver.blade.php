@extends('adminlte::page')
@section('content')

<h2 class="page-header">Vehicles List & Details</h2>
<section class="content">
        <div class="callout callout-info">
                <h4>Instruction !!</h4>
                Choose a vehicle below to begin the operation.
              </div>
<div class="container">
   <a href="{{ url('addtrainee')}}" class="btn btn-warning">Add Driver</a> 
    <div class="box box-solid box-success">
       <div class="box-header with-border">
           <div class="row">
               <div class="col-md-3 col-sm-3">
                   <h4 class="text-center">Driver Picture</h4>
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
                        <h4 class="align-center"><img src="{{url('../')}}/drivers/{{$item->pic}}"  class="vehicle-image"></h4>
                    </div>
                    <div class="col-md-7 col-sm-7 offset-md-2 offset-sm-2 text-center">
                                 <h3 class="text-muted">{{$item->name}}</h3>
                                 <p style="font-size:18px;">{{$item->address}}</p>
                                 <p style="font-size:18px;"><span class="text-green">Date of Joining</span> : <span class="text-uppercase">{{$item->doj}}</span></p>
                                 <a href="{{url('traineedet')}}/{{$item->id}}" class="btn btn-danger">{{_('Get Full Details')}}</a>
                                   <a href="{{url('edittrainee')}}/{{$item->id}}" class="btn btn-success">{{_('Modify Data')}}</a>
                    </div>
                </div>
       </div>
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