@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">{{_('Edit Details Of')}} {{ucwords($details[0]->name)}}</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="btn btn-default" href="{{ url('trainee')}}">{{_('Go Back')}} <span class="sr-only">(current)</span></a>
                            </div>
                          </nav>
                          @if ( session()->has('success') )
                                         <p class="alert alert-success">
                                                      {{ session()->get('success') }}
                                                   </p>
                                                @endif
                <div class="row justify-content-center">
                    <div class="col-md-10 col-sm-12">
                        <form action="{{url('updatetrn')}}/{{$details[0]->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label for="usr"> Full Name:</label>
                                <input type="text" class="form-control" id="usr" name="name" value="{{$details[0]->name}}">
                              </div>
                              
                            <div class="form-group">
                                <label for="ftr"> Father Name:</label>
                                <input type="text" class="form-control" id="ftr" name="father" value="{{$details[0]->father}}">
                              </div>
                              
                            <div class="form-group">
                                <label for="mtr"> Mother Name:</label>
                                <input type="text" class="form-control" id="mtr" name="mother" value="{{$details[0]->mother}}">
                              </div>
                              
                            <div class="form-group">
                                <label for="cnr"> Contact Number:</label>
                                <input type="text" class="form-control" id="cnr" name="mobile" value="{{$details[0]->mobile}}">
                              </div>
                              
                            <div class="form-group">
                                <label for="adr"> Address:</label>
                                <input type="text" class="form-control" id="adr" name="address" value="{{$details[0]->address}}">
                              </div>
                              
                            <div class="form-group">
                                <label for="dob"> Date of Birth:</label>
                                <input type="date" class="form-control" id="dob" name="dob" value="{{$details[0]->dob}}">
                              </div>
                              
                            <div class="form-group">
                                <label for="bgr"> Blood Group:</label>
                                <select class="form-control" id="bgr" name="blood">
                                    <option value="{{$details[0]->blood}}">{{$details[0]->blood}}</option>
                                    <option value="A +ve">A +ve</option>
                                    <option value="A -ve">A -ve</option>
                                    <option value="B +ve">B +ve</option>
                                    <option value="B -ve">B -ve</option>
                                    <option value="O +ve">O +ve</option>
                                    <option value="O -ve">O -ve</option>
                                    <option value="AB +ve">AB +ve</option>
                                    <option value="Ab -ve">AB -ve</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                    <label for="email"> Email:</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{$details[0]->email}}">
                                  </div>
                                  <div class="form-group">
                                        <label for="doj"> Date of Joining:</label>
                                        <input type="date" class="form-control" id="doj" name="doj" value="{{$details[0]->doj}}">
                                      </div>
                                      <div class="form-group">
                                            <label for="time"> Preferable Time:</label>
                                            <input type="time" class="form-control" id="time" name="time" value="{{$details[0]->time}}">
                                          </div>
    
                                <button class="btn btn-success adveh center-block btny" name="submit" value="submit"> {{_('Save Details')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection