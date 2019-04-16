@extends('adminlte::page')
@section('content')
<section class="content">
        @if ( session()->has('success') )
        <div class="callout callout-info">
                <h4>Database Message</h4>
                {{ session()->get('success') }}
              </div>
               @endif
        
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <h3 class="box-title">Choose the License Catagory of {{ucwords($details[0]->name)}}</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->

              <form role="form" action="{{ url('savecat')}}/{{$details[0]->id}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="box-body">
                    <div class="form-group" id="catagory-div">
                        <label>License Catagory</label>
                        <select class="form-control input-lg" name="catagory" id="catagory">
                          <option disabled>Select One Below</option>
                          <option value="Learning License">Learning License</option>
                          <option value="Final License">Final License</option>
                        </select>
                    </div> 
                      
                <!-- /.box-body -->
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">Submit</button>
                  <a class="btn btn-success" id="pass" href="{{url('addlicensedetails')}}/{{$details[0]->id}}">Procees to Add Other Data</a>
                </div>
              </form>
            </div>
            <!-- /.box -->
@stop
