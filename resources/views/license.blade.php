@extends('adminlte::page')
@section('content')
<section class="content">
        <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">User List for License Details</h3>
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
                          <th>Action 1</th>
                          <th>Action 2</th>
                          <th>Action 2</th>
                        </tr>
                        @foreach ($details as $item)
                        <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->regno}}</td>
                                <td><a href="{{url('/viewlicense')}}/{{$item->id}}">{{$item->name}}</a></td>
                                <td><a href="{{url('/addlicense')}}/{{$item->id}}" style="color:green !important;">Add</a></td>
                                <td><a href="{{url('/updatelicensecat')}}/{{$item->id}}">Update</a></td>
                                <td><a href="{{url('/removelicense')}}/{{$item->id}}" style="color:red !important;">Remove</a></td>
                              </tr>
                                  
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