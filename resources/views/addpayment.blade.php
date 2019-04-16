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
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Add Payment for {{$details[0]->name}}</h3>
                      <p class="text-red">Choose Options carefully</p>
                      
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                            <form role="form" action="{{ url('addpaymentfor')}}/{{$details[0]->id}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="box-body">
                                    <div class="form-group" id="catagory-div">
                                        <label>Payment Type</label>
                                        <select class="form-control input-lg" name="catagory" id="catagory">
                                          <option value="Full Payment">Full Payment</option>
                                          <option value="1st Installment">1st Installment</option>
                                          <option value="2nd Installment">2nd Installment</option>
                                          <option value="3rd Installment">3rd Installment</option>
                                        </select>
                                      </div> 
                                      <div class="form-group" id="license-div">
                                            <label for="llno">Amount</label>
                                            <input type="text" class="form-control input-lg" id="llno" name="amount" value="" placeholder="Amount">
                                          </div>
                                          <div class="form-group" id="catagory-div">
                                                <label>Payment Mode</label>
                                                <select class="form-control input-lg" name="mode" id="mode">
                                                  <option value="Cash">Cash</option>
                                                  <option value="Cheque">Cheque</option>
                                                  <option value="Online Transfer">Online Transfer</option>
                                                  <option value="UPI">UPI</option>
                                                </select>
                                              </div> 
                                      
                                <!-- /.box-body -->
                  
                                <div class="box-footer">
                                  <button type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">Submit</button>
                                   </div>
                              </form>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
            </section>
@stop
