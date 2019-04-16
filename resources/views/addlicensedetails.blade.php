@extends('adminlte::page')
@section('content')
<section class="content">
        @if ( session()->has('success') )
        <div class="callout callout-info">
                <h4>Database Message</h4>
                {{ session()->get('success') }}{{ucwords($details[0]->name)}}
              </div>
               @endif
        
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
              <h3 class="box-title">Add the License Details of {{ucwords($details[0]->name)}} for {{ucwords($details[0]->catagory)}}</h3>
              </div>
              <!--/.box-header -->
              @if($details[0]->catagory =='Final License')
              <form role="form" action="{{ url('savecat1')}}/{{$details[0]->id}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="box-body">                      
                      <div class="form-group" id="dob-div">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" class="form-control input-lg" id="dob" name="dob" value="">
                      </div>                          
                      <div class="form-group" id="license-div">
                            <label for="llno">License No</label>
                            <input type="text" class="form-control input-lg" id="llno" name="llno" value="" placeholder="License No">
                          </div>
                          
                      <div class="form-group" id="mobile-div">
                            <label for="mobile">Mobile(+91)</label>
                            <input type="text" class="form-control input-lg" id="mobile" name="mobile" value="" placeholder="Mobile No">
                          </div>
                          <div class="form-group" id="application-div">
                                <label for="application">Application No</label>
                                <input type="text" class="form-control input-lg" id="application" name="application" value="" placeholder="Application No">
                              </div>
                           <div class="form-group" id="slot-div">
                                    <label for="slotdate">Slot Date</label>
                                    <input type="date" class="form-control input-lg" id="slotdate" name="slotdate" value="" >
                           </div>
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">Submit</button>
                </div>
              </form>
                @else
                <form role="form" action="{{ url('savecat2')}}/{{$details[0]->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="box-body">
                          <div class="form-group" id="father-div">
                            <label for="father">Father Name</label>
                            <input type="text" class="form-control input-lg" name="father" id="father" value="">
                          </div>
                          
                          <div class="form-group" id="dob-div">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" class="form-control input-lg" id="dob" name="dob" value="">
                              </div>
                              
                          <div class="form-group" id="validity-div">
                                <label for="validity">License Validity(In days)</label>
                                <input type="text" class="form-control input-lg" id="validity" name="validity" value="">
                              </div>
                              
                          <div class="form-group" id="license-div">
                                <label for="llno">License No</label>
                                <input type="text" class="form-control input-lg" id="llno" name="llno" value="">
                              </div>
                              
                          <div class="form-group" id="mobile-div">
                                <label for="mobile">Mobile(+91)</label>
                                <input type="text" class="form-control input-lg" id="mobile" name="mobile" value="">
                              </div>
                              <div class="form-group" id="application-div">
                                    <label for="application">Application No</label>
                                    <input type="text" class="form-control input-lg" id="application" name="application" value="">
                                  </div>
                               <div class="form-group" id="slot-div">
                                        <label for="slotdate">Slot Date</label>
                                        <input type="date" class="form-control input-lg" id="slotdate" name="slotdate" value="">
                               </div>
      
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">Submit</button>
                    </div>
                  </form>
                @endif
              <!-- form start -->
             
            </div>
            <!-- /.box -->
@stop