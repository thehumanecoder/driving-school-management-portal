@extends('adminlte::page')
@section('content')

<h2 class="page-header">User wise Training </h2>
<section class="content">
        <div class="callout callout-info">
                <h4>Instruction !!</h4>
             Choose an Vehicle Below to Start Sloting
              </div>
<div class="container">
        <div class="row">
                <div class="col-xs-12">
                        <div class="box">
                          <div class="box-header">

                            <div class="box-tools">
                              
                            </div>
                          </div>
   <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Sl No</th>
            <th>Picture</th>
            <th>Model</th>
            <th>Vehicle Number</th>
            <th>Add Slot</th>
            <th>Change Slots</th>
            <th>Check Slots</th>
          </tr>
          @foreach ($details as $item)
          <tr>
                  <td>{{$item->id}}</td>
                  <td><img src="{{url('../')}}/vehicles/{{$item->image}}" class="table-img" style="height:50px;"></td>
                  <td>{{$item->registration}}</td>
                  <td>{{$item->model}}</td>
                  <td><a href="{{url('formslot')}}/{{$item->id}}" class="btn btn-success">Go</a></td>
                  <td><a href="{{url('editslot')}}/{{$item->id}}" class="btn btn-danger">Go</a>
                  <td><a href="{{url('slotden')}}/{{$item->id}}" class="btn btn-success">Go</a></td>
                </tr>
                    
          @endforeach
          
        </table>
      </div>
</div>
                </div>
            </div>
</div>
</section>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

@section('js')
   
@stop