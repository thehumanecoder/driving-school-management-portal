@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">{{_('Add a Driver')}}</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="btn btn-default" href="{{ url('driver')}}">{{_('Go Back')}} <span class="sr-only">(current)</span></a>
                                
                            </div>
                      </nav>
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                        <div class="panel-body">
                                <div class="col-sm-12 col-md-12">
                                     @if ( session()->has('success') )
                                     <p class="alert alert-success">
                                                  {{ session()->get('success') }}
                                               </p>
                                            @endif
                    <form action="{{url('/updatedriver')}}/{{$details[0]->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label for="usr"> Full Name:</label>
                            <input type="text" class="form-control" id="usr" name="name" value="{{$details[0]->name}}" required>
                          </div>
                          
                        <div class="form-group">
                            <label for="phone"> Phone Number:</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$details[0]->phone}}" required>
                          </div>
                          
                        <div class="form-group">
                            <label for="mtr"> Address:</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$details[0]->address}}" required>
                          </div>
                          
                        <div class="form-group">
                            <label for="cnr"> License Number:</label>
                            <input type="text" class="form-control" id="license" name="license" value="{{$details[0]->license}}" required>
                          </div>
                          
                        <div class="form-group">
                            <label for="dob"> Date of Birth:</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{$details[0]->dob}}" required>
                          </div>
                          
                        <div class="form-group">
                            <label for="bgr"> Blood Group:</label>
                            <select class="form-control" id="bgr" name="bgr">
                                <option value="{{$details[0]->blood}}">{{$details[0]->blood}}</option>
                                <option value="A +ve">A +ve</option>
                                <option value="A -ve">A -ve</option>
                                <option value="B +ve">B +ve</option>
                                <option value="B -ve">B -ve</option>
                                <option value="O +ve">O +ve</option>
                                <option value="O -ve">O -ve</option>
                                <option value="AB +ve">AB +ve</option>
                                <option value="AB -ve">AB -ve</option>
                              </select>
                          </div>
                              <div class="form-group">
                                    <label for="doj"> Date of Joining:</label>
                                    <input type="date" class="form-control" id="doj" name="doj" value="{{$details[0]->doj}}" required>
                                  </div>

                            <button class="btn btn-success adveh center-block btny"> {{_('Save Details')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection