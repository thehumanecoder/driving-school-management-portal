@extends('layouts.app')
@section('content')
@foreach($details as $item)
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9 text-center">
                <h2>{{ucwords($item->name)}}</h2>
                <h5>{{$item->slotdate}}
                <h5>{{$item->slottime}}
                <p><a href="{{url('updslot')}}/{{$item->vehicle_id}}/{{$item->trainee_id}}" class="btn btn-success">{{_('Modify Slot')}}</a>  
                    <a href="{{url('deleteslot')}}/{{$item->vehicle_id}}/{{$item->trainee_id}}" class="btn btn-success">{{_('Delete Slot')}}</a></p>
            </div>
            </div>
    </div>
</div>    
@endforeach  
@endsection