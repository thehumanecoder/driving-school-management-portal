@extends('layouts.app')
@section('content')
<div class="container">
        @if ( session()->has('success') )
        <p class="alert alert-success">
                     {{ session()->get('success') }}
                  </p>
               @endif
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">{{_('Edit details of')}} {{$details[0]->model}}</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>                        
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="btn btn-default" href="{{ url('vehicle')}}">{{_('Go Back')}} <span class="sr-only">(current)</span></a>
                            </div>
                          </nav>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-sm-12">
                        <form action="{{url('updateveh')}}/{{$details[0]->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <input type="text" class="form-control adveh" name="model" value="{{$details[0]->model}}">
                            <input type="text" class="form-control adveh" name="registration" value="{{$details[0]->registration}}">
                            <input type="text" class="form-control adveh" name="rcno" value="{{$details[0]->rcno}}">
                            <input type="text" class="form-control adveh" name="poc" value="{{$details[0]->poc}}">
                            <input type="text" class="form-control adveh" name="fitness" value="{{$details[0]->fitness}}">
                            <input type="text" class="form-control adveh" name="color" value="{{$details[0]->color}}">
                            <input type="text" class="form-control adveh" name="chesis" value="{{$details[0]->chesis}}">
                            <input type="date" class="form-control adveh" name="isf" value="{{$details[0]->isf}}">    
                                <button class="btn btn-success adveh center-block btny"> {{_('Save Vehicle')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection