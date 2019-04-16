@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h2 class="det2"><span>{{_('Vehicle Registration Number')}}</span>{{_(':')}}<span>{{$details[0]->registration}}</span></h2><br>
                      
                              <a class="btn btn-danger" href="{{ url('slots')}}">{{_('Go Back')}} <span class="sr-only">(current)</span></a>
                      </nav>
                      @if ( session()->has('success') )
                      <p class="alert alert-success">
                                   {{ session()->get('success') }}
                                </p>
                             @endif
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                    <form action="{{url('addslot')}}/{{$details[0]->id}}" method="POST" enctype="multipart/form-data" id="traineeid">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <span>Add The Time Slot</span>
                        <input type="time" name="ti" value="" class="form-control">
                        <span>Add The Date Slot</span>
                        <input type="date" class="form-control adveh" placeholder="Date of services begin" name="date" vale=""><br>
                        <span>Choose Trainee Name</span>
                        <select name="traineeid" form="traineeid" class="form-control">
                            @foreach ($trainees as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                          </select>
                        
                        
                        <br>

                            <button class="btn btn-success adveh center-block btny"> Save Slot</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection