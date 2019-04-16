@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
              <div class="box-header with-border">
                <i class="fa fa-warning"></i>
  
                <h3 class="box-title">Settings</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <form method="POST" action='{{url('/addtcf')}}' enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group col-md-12 col-sl-12 col-xl-12">
                      <label for="tcf">Total Contacted Fees</label>
                      <input type="text" class="form-control" id="tcf" name='tcf' placeholder="Enter Total Contacted Fees">
                      <button type='submit'class="btn btn-success">Save</button>
                    </div>
                </form>
                <div class="box-header with-border">
                        <i class="fa fa-users"></i>
          
                        <h3 class="box-title">Add Or Manage Users</h3>
                      </div>

                    
                      <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                              <tr>
                                <th>Sl No</th>
                                <th>User Name</th>
                                <th>Created At</th>
                                <th>Delete</th>
                              </tr>
                              @foreach ($details as $item)
                              <tr style="font-size:18px;">
                                      <td>{{$item->id}}</td>
                                      <td>{{ucwords($item->name)}}</td>
                                      <td>{{$item->created_at}}</td>
                                      <td><a href="{{url('/deleteuser')}}/{{$item->id}}" style="color:white !important;" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                        
                              @endforeach
                              
                            </table>
                          </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
    </div>
</div>
@stop