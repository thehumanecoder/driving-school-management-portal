@extends('adminlte::page')
@section('content')
<section class="content">
    {{$details}}
    <div class="row">
    <div class="col-md-12">
        <div class="box box-widget">
          <div class="box-header with-border">
            <div class="user-block">
              <span class="username"><a href="#">{{$details[0]->name}}</a></span>
            </div>
          </div>
          <div class="box-body">
              <div class="col-md-12 col-sm-12">
                  <div class="row">
                      @if($details[0]->catagory=='Final License')
                        <p style="font-size:18px;"><span class="text-green">License Type</span> : <span class="text-uppercase">{{$details[0]->catagory}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">License No</span> : <span class="text-uppercase">{{$details[0]->llno}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Application Number</span> : <span class="text-uppercase">{{$details[0]->application}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Date of Birth</span> : <span class="text-uppercase">{{$details[0]->dob}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Mobile No (+91)</span> : <span class="text-uppercase">{{$details[0]->mobile}}</span></p>
                        <p style="font-size:18px;"><span class="text-green">Slot Date</span> : <span class="text-uppercase">{{$details[0]->slotdate}}</span></p>
                  
                    @else
                    <p style="font-size:18px;"><span class="text-green">Father Name</span> : <span class="text-uppercase">{{$details[0]->father}}</span></p>
                    <p style="font-size:18px;"><span class="text-green">License Type</span> : <span class="text-uppercase">{{$details[0]->catagory}}</span></p>
                    <p style="font-size:18px;"><span class="text-green">License No</span> : <span class="text-uppercase">{{$details[0]->llno}}</span></p>
                    <p style="font-size:18px;"><span class="text-green">Application Number</span> : <span class="text-uppercase">{{$details[0]->application}}</span></p>
                    <p style="font-size:18px;"><span class="text-green">Date of Birth</span> : <span class="text-uppercase">{{$details[0]->dob}}</span></p>
                    <p style="font-size:18px;"><span class="text-green">Mobile No (+91)</span> : <span class="text-uppercase">{{$details[0]->mobile}}</span></p>
                    <p style="font-size:18px;"><span class="text-green">Slot Date</span> : <span class="text-uppercase">{{$details[0]->slotdate}}</span></p>
                    <p style="font-size:18px;"><span class="text-green">Validity</span> : <span class="text-uppercase">{{$details[0]->validity}}</span></p>
                    @endif    
                </div>
              </div>
            </div>
          </div>
         
</section>
@stop