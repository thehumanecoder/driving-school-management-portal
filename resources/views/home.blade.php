@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome Admin , Choose an option below to begin operations.</p>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-automobile"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Vehicles</span>
              <span class="info-box-number">10</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Trainee</span>
              <span class="info-box-number">55</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-male"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Drivers</span>
              <span class="info-box-number">15</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-server"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Training Seasons</span>
              <span class="info-box-number">205</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
       <!-- Small boxes (Stat box) -->
       <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Vehicle</h3>

              <p>Create,Update,Delete,View</p>
            </div>
            <a href="{{ url('vehicle')}}" class="small-box-footer">
              Access <i class="fa fa -arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Trainee</h3>

              <p>Create,Update,Delete,View</p>
            </div>
            <a href="{{ url('trainee')}}" class="small-box-footer">
              Access <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Driver</h3>

              <p>Create,Update,Delete,View</p>
            </div>
            <a href="{{ url('driver')}}" class="small-box-footer">
              Access<i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Training</h3>

              <p>Create,Update,Delete,View</p>
            </div>
            <a href="{{ url('training')}}" class="small-box-footer">
              Access <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Slots & Times</h3>

              <p>Create,Update,Delete,View</p>
            </div>
            <a href="{{ url('slots')}}" class="small-box-footer">
              Access <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>License</h3>

              <p>Create,Update,Delete,View</p>
            </div>
            <a href="{{ url('license')}}" class="small-box-footer">
              Access <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Payments</h3>

              <p>Create,Update,Delete,View</p>
            </div>
            <a href="{{ url('payments')}}" class="small-box-footer">
              Access<i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Settings</h3>

              <p>Create,Update,Delete,View</p>
            </div>
            <a href="{{ url('settings')}}" class="small-box-footer">
              Access <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

@section('js')
    <script> console.log('Hi!'); </script>
@stop
<!--
Tavvmann or renamed versions strictly belongs to Arch Technologies and Media ,
No one has the reseller license except Arch Technologies & Media and it's licensed 
partners .

Application details :-

Developed Under: General Development Section 
Arch Technologies & Media 
Project Lead- Biswas Sampad Satpathy,Co-Founder,Arch Technologies & Media.
for info: info@archtechnologies.co.in
    sales: sales@archtechnologies.co.in
    visit: https://www.archtechnologies.co.in
-->