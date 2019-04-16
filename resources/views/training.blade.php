@extends('adminlte::page')
@section('content')

<h2 class="page-header">User wise Training </h2>
<section class="content">
        <div class="callout callout-info">
                <h4>Instruction !!</h4>
               Choose an User below for Training Operation and Tasks
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
            <th>ID</th>
            <th>Picture</th>
            <th>User Name</th>
            <th>User Reg No</th>
            <th>Get Details</th>
          </tr>
          @foreach ($details as $item)
          <tr>
                  <td>{{$item->id}}</td>
                  <td><img src="{{url('../')}}/images/{{$item->picture}}" class="table-img" style="height:50px;"></td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->regno}}</td>
                  <td><a href="{{url('trainingdetails')}}/{{$item->id}}">Get Details</a></td>
                </tr>
                    
          @endforeach
          
        </table>
      </div>
</div>
                </div></div>
</div>
</section>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

@section('js')
   
@stop