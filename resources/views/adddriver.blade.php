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
                    <form action="{{url('/submitdriver')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label for="usr"> Full Name:</label>
                            <input type="text" class="form-control" id="usr" name="name" value="" required>
                          </div>
                          
                        <div class="form-group">
                            <label for="phone"> Phone Number:</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="" required>
                          </div>
                          
                        <div class="form-group">
                            <label for="mtr"> Address:</label>
                            <input type="text" class="form-control" id="address" name="address" value="" required>
                          </div>
                          
                        <div class="form-group">
                            <label for="cnr"> License Number:</label>
                            <input type="text" class="form-control" id="license" name="license" value="" required>
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
                                    <label for="doj"> Date of Joining:</label>
                                    <input type="date" class="form-control" id="doj" name="doj" value="" required>
                                  </div>
                        <div class="input-group image-preview adveh">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                <span class="input-group-btn">
                                    <!-- image-preview-clear button -->
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <!-- image-preview-input -->
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image" value="image"/> <!-- rename it -->
                                    </div>
                                </span>
                            </div>

                            <button class="btn btn-success adveh center-block btny"> {{_('Save Details')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection