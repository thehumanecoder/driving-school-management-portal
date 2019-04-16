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
              <h3 class="box-title">Update the License Details</h3>
              </div>
              <!--/.box-header -->
              @if($details[0]->catagory =='Final License')
              <form role="form" action="{{ url('updatecat1')}}/{{$details[0]->cid}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="box-body">                      
                      <div class="form-group" id="dob-div">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" class="form-control input-lg" id="dob" name="dob" value="{{$details[0]->dob}}">
                      </div>                          
                      <div class="form-group" id="license-div">
                            <label for="llno">License No</label>
                            <input type="text" class="form-control input-lg" id="llno" name="llno" value="{{$details[0]->llno}}" >
                          </div>
                          
                      <div class="form-group" id="mobile-div">
                            <label for="mobile">Mobile(+91)</label>
                            <input type="text" class="form-control input-lg" id="mobile" name="mobile" value="{{$details[0]->mobile}}">
                          </div>
                          <div class="form-group" id="application-div">
                                <label for="application">Application No</label>
                                <input type="text" class="form-control input-lg" id="application" name="application" value="{{$details[0]->application}}" >
                              </div>
                           <div class="form-group" id="slot-div">
                                    <label for="slotdate">Slot Date</label>
                                    <input type="date" class="form-control input-lg" id="slotdate" name="slotdate" value="{{$details[0]->slotdate}}" >
                           </div>
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">Submit</button>
                </div>
              </form>
                @else
                <form role="form" action="{{ url('updatecat2')}}/{{$details[0]->cid}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="box-body">
                          <div class="form-group" id="father-div">
                            <label for="father">Father Name</label>
                            <input type="text" class="form-control input-lg" name="father" id="father" value="{{$details[0]->father}}">
                          </div>
                          
                          <div class="form-group" id="dob-div">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" class="form-control input-lg" id="dob" name="dob" value="{{$details[0]->dob}}">
                              </div>
                              
                          <div class="form-group" id="validity-div">
                                <label for="validity">License Validity(In days)</label>
                                <input type="text" class="form-control input-lg" id="validity" name="validity" value="{{$details[0]->validity}}">
                              </div>
                              
                          <div class="form-group" id="license-div">
                                <label for="llno">License No</label>
                                <input type="text" class="form-control input-lg" id="llno" name="llno" value="{{$details[0]->llno}}">
                              </div>
                              
                          <div class="form-group" id="mobile-div">
                                <label for="mobile">Mobile(+91)</label>
                                <input type="text" class="form-control input-lg" id="mobile" name="mobile" value="{{$details[0]->mobile}}">
                              </div>
                              <div class="form-group" id="application-div">
                                    <label for="application">Application No</label>
                                    <input type="text" class="form-control input-lg" id="application" name="application" value="{{$details[0]->application}}">
                                  </div>
                               <div class="form-group" id="slot-div">
                                        <label for="slotdate">Slot Date</label>
                                        <input type="date" class="form-control input-lg" id="slotdate" name="slotdate" value="{{$details[0]->slotdate}}">
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