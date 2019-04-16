@extends('adminlte::page')
@section('content')
<h2>Trainee Name:{{$customer[0]->name}}</h2>
<p>Pickup Address:{{$customer[0]->pickupaddr}}</p>
    @for ($i = 0; $i <$test; $i++)
            <p>Slot No:{{$i+1}}</p>
            <p>Slot Date:{{$slots[$i]->slotdate}}</p>
            <p>Slot Time:{{$slots[$i]->slottime}}</p>
        
            <p>Drive And Vehicle Details:{{$dva[$i]}}

    @endfor
@endsection

<div class="box box-solid box-success">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <h4 class="text-center">Trainee Picture</h4>
                </div>
                <div class="col-md-9 col-sm-9">
                             <h4 class="text-center">Trainee Details</h4>
                </div>
            </div>
        </div>
        @foreach($details as $item)
        <div class="box-body with-border">
             <div class="row">
                     <div class="col-md-3 col-sm-3">
                         <h4 class="align-center"><img src="{{url('../')}}/images/{{$item->picture}}"  class="vehicle-image"></h4>
                     </div>
                     <div class="col-md-7 col-sm-7 offset-md-2 offset-sm-2 text-center">
                                  <h3 class="text-muted">{{$item->name}}</h3>
                                  <p style="font-size:18px;">{{$item->address}}</p>
                                  <p style="font-size:18px;"><span class="text-green">Registration Number</span> : <span class="text-uppercase">{{$item->regno}}</span></p>
                                  <a href="{{url('trainingdetails')}}/{{$item->id}}" class="btn btn-danger">{{_('Get Full Details')}}</a>
                             
                     </div>
                 </div>
        </div>
        <hr>
        @endforeach
     </div>