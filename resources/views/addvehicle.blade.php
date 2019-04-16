@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">{{_('Add Vehicles')}}</a>
                        
                              <a class="btn btn-success" href="{{ url('vehicle')}}">{{_('Go Back')}} <span class="sr-only">(current)</span></a>
                        
                      </nav>
                      @if ( session()->has('success') )
                      <p class="alert alert-success">
                                   {{ session()->get('success') }}
                                </p>
                             @endif
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                    <form action="{{url('/addvehicle')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="text" class="form-control adveh" placeholder="Vehicle Model" name="model" value="">
                        <input type="text" class="form-control adveh" placeholder="Vehicle Registration Number" name="registration" value="">
                        <input type="text" class="form-control adveh" placeholder="RC Number" name="rc" value="">
                        <input type="text" class="form-control adveh" placeholder="Polution Certificate Number" name="pollution" value="">
                        <input type="text" class="form-control adveh" placeholder="Fitness Certificate Number" name="fitness" value="">
                        <input type="text" class="form-control adveh" placeholder="vehicle Colour" name="color" vlaue="">
                        <input type="text" class="form-control adveh" placeholder="Chesis Number" name="chesis" value="">
                        <input type="date" class="form-control adveh" placeholder="Date of services begin" name="dosb" vale="">
                        <div class="input-group image-preview adveh">
                                  <input type="file" class="form-control" accept="image/png, image/jpeg, image/gif" name="image" value="image"/>
                            </div>

                            <button class="btn btn-success adveh center-block btny"> Save Vehicle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection