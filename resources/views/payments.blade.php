@extends('adminlte::page')
@section('content')
<section class="content">
        <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">User List for Payment Operations</h3>
                      <p>Select an user and operation to proceed</p>
                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
        
                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr>
                          <th>ID</th>
                          <th>Reg. ID</th>
                          <th>User</th>
                          <th>Status</th>
                          <th>Action 1</th>
                          <th>Action 2</th>
                          <th>Action 3</th>
                        </tr>
                        @foreach ($details as $item)
                        @if($item->status=='Active')
                        <tr style="background:skyblue">
                                <td>{{$item->id}}</td>
                                <td>{{$item->regno}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->status}}</td>
                                <td><a href="{{url('/addpayment')}}/{{$item->id}}" style="color:green !important;">Recieve Payments</a></td>
                                <td><a href="{{url('/paymentdetails')}}/{{$item->id}}">Payments Details</a></td>
                                <td><a href="{{url('/changestatus')}}/{{$item->id}}" style="color:red !important;">Change account Status</a></td>
                              </tr>
                            @else
                            <tr style="background:red;color:white">
                              <td>{{$item->id}}</td>
                              <td>{{$item->regno}}</td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->status}}</td>
                              <td><a href="{{url('/addpayment')}}/{{$item->id}}" style="color:white !important;">Recieve Payments</a></td>
                              <td><a href="{{url('/paymentdetails')}}/{{$item->id}}" style="color:white !important;">Payments Details</a></td>
                              <td><a href="{{url('/changestatus')}}/{{$item->id}}" style="color:white !important;">Change account Status</a></td>
                            </tr>
                              @endif      
                        @endforeach
                        
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
            </section>
@stop