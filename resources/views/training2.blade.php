@extends('adminlte::page')
@section('content')
<div class="container" style="background:white; padding:10px;">
    <div class="row">
        <div class="col-md-12">
            <div class="row" style="margin:10px;">
                <h3 style="margin-left:10px;">Trainee Name : {{$profile[0]->name}}</h3>
                <h5 style="margin-left:10px;">Below here is the list of Training taken and slots assigned against :{{$profile[0]->name}}</h5>
                @foreach($details as $item)
                <p><b>Traind Day {{$i++}}</b></p>
                <p>Training Date:{{$item->slotdate}}</p>
                <p>Training Time:{{$item->slottime}}</p>
                <p>Vehicle Number:{{$item->registration}}</p>
                <p>Vehicle Model:{{$item->model}}</p>
                <p>Pickup Location:{{$profile[0]->pickupaddr}}</p>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
    <a href="{{url('/training')}}" class="btn btn-success">Return to Training Page</a>
</div>
@endsection