@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 card">
                <h2 class="headline">{{_('Vehicle Details of ')}}{{$details[0]->model}}</h2>
            
            <div class="row card-body">
                <div class="col-sm-2 col-md-2">
                        <img src="{{url('../')}}/vehicles/{{$details[0]->image}}" class="vehicle-image">
                </div>
                <div class="col-sm-6 col-md-6 det">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-12">
                                <p class="det2"><span>{{_('Vehicle Model')}}</span>{{_(':')}}<span>{{$details[0]->model}}</span></p><br>
                                <p class="det2"><span>{{_('Vehicle Registration Number')}}</span>{{_(':')}}<span>{{$details[0]->registration}}</span></p><br>
                                <p class="det2"><span>{{_('Vehicle RC Number')}}</span>{{_(':')}}<span>{{$details[0]->rcno}}</span></p><br>
                                <p class="det2"><span>{{_('Polution Control Certificate Number')}}</span>{{_(':')}}<span>{{$details[0]->poc}}</span></p><br>
                                <p class="det2"><span>{{_('Fitness Certificate Number')}}</span>{{_(':')}}<span>{{$details[0]->fitness}}</span></p><br>
                                <p class="det2"><span>{{_('Vehicle Colour')}}</span>{{_(':')}}<span>{{$details[0]->color}}</span></p><br>
                                <p class="det2"><span>{{_('Chesis Number')}}</span>{{_(':')}}<span>{{$details[0]->chesis}}</span></p><br>                                
                                <p class="det2"><span>{{_('In Service From')}}</span>{{_(':')}}<span>{{$details[0]->isf}}</span></p><br>
                                <p><a href="{{url('vehicle')}}" class="btn btn-danger">{{_('Go Back')}}</a>
                                    <a href="{{url('editvehicle')}}/{{$details[0]->id}}" class="btn btn-success">{{_('Modify Vehicle')}}</a></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection