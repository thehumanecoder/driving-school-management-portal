@extends('adminlte::page')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">{{_('Add a Trainee')}}</a>
                            <a class="btn btn-danger" href="{{ url('trainee')}}">{{_('Go Back')}} <span class="sr-only">(current)</span></a>
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
                        <form action="{{url('/addTrainee')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label for="usr"> Full Name:</label>
                                <input type="text" class="form-control" id="usr" name="name" value="" required>
                              </div>
                              
                            <div class="form-group">
                                <label for="ftr"> Father Name:</label>
                                <input type="text" class="form-control" id="ftr" name="fname" value="" required>
                              </div>
                              
                            <div class="form-group">
                                <label for="mtr"> Mother Name:</label>
                                <input type="text" class="form-control" id="mtr" name="mname" value="" required>
                              </div>
                              
                            <div class="form-group">
                                <label for="cnr"> Contact Number:</label>
                                <input type="text" class="form-control" id="cnr" name="cno" value="" required>
                              </div>
                              
                            <div class="form-group">
                                <label for="adr"> Address:</label>
                                <input type="text" class="form-control" id="adr" name="adr" value="" required>
                              </div>
                              
                            <div class="form-group">
                                <label for="dob"> Date of Birth:</label>
                                <input type="date" class="form-control" id="dob" name="dob" value="" required>
                              </div>
                              
                            <div class="form-group">
                                <label for="bgr"> Blood Group:</label>
                                <select class="form-control" id="bgr" name="bgr">
                                    <option type="disabled">Select Below</option>
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
                                    <label for="email"> Email:</label>
                                    <input type="text" class="form-control" id="email" name="email" value="" required>
                                  </div>
                                  <div class="form-group">
                                        <label for="doj"> Date of Joining:</label>
                                        <input type="date" class="form-control" id="doj" name="doj" value="" required>
                                      </div>
                                      <div class="form-group">
                                            <label for="time"> Preferable Time:</label>
                                            <input type="time" class="form-control" id="time" name="time" value="">
                                          </div>
                            <div class="form-group">
                                  
                                            <input type="file" accept="image/png, image/jpeg, image/gif" name="image" value="image"/>
                                </div>
    
                                <button class="btn btn-success adveh center-block btny"> {{_('Save Details')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection