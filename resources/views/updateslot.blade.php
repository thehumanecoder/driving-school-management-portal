@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h2 class="det2"><span>{{_('Vehicle Registration Number')}}</span>{{_(':')}}<span>{{$details[0]->registration}}</span></h2><br>
                    <h2 class="det2"><span>{{_('Trainee Name')}}</span>{{_(':')}}<span>{{$trainees[0]->name}}</span></h2><br>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="btn btn-default" href="{{ url('editslot')}}/{{$details[0]->id}}">{{_('Go Back')}} <span class="sr-only">(current)</span></a>
                        </div>
                      </nav>
                      @if ( session()->has('success') )
                      <p class="alert alert-success">
                                   {{ session()->get('success') }}
                                </p>
                             @endif
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                    <form action="{{url('updateslot')}}/{{$slotdet[0]->id}}" method="POST" enctype="multipart/form-data" id="traineeid">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="time" name="ti" value="" class="form-control">
                        <input type="date" class="form-control adveh" placeholder="Date of services begin" name="date" vale=""><br>
                        
                        
                        <br>

                            <button class="btn btn-success adveh center-block btny"> Update Slot</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection