@extends('adminlte::page')
@section('content')
    <h1>Driver Name:{{$driver[0]->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
        <form action="{{url('addvehicleallot')}}" method="POST" enctype="multipart/form-data" id="vehicleid">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <select name="vehicleid" form="vehicleid" class="form-control">
                    <h2>Choose a Vehicle</h2>
                    @foreach ($vehicles as $item)
                        <option value="{{$item->id}}">{{$item->registration}} </option>
                    @endforeach
                  </select>
                <br><input type="date" name="date" value="">
                <input type="hidden" name="driverid" value="{{$driver[0]->id}}">
                <input type="hidden" name="drivername" value="{{$driver[0]->name}}">
                
                <br>

                    <button class="btn btn-success adveh center-block btny"> Allot Vehicle</button>
            </form>
        </div>
    </div>


@endsection