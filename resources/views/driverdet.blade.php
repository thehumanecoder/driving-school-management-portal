@extends('layouts.app')
@section('content')

<!--Container starts here-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 card">
          
            
                <h2 class="headline">{{_('Driver Details of')}} {{ucwords($details[0]->name)}}</h2>
            
            <div class="row card-body">
                <div class="col-sm-3 col-md-3">
                        <img src="{{url('../')}}/drivers/{{$details[0]->pic}}" class="vehicle-image">
                </div>
                <div class="col-sm-7 col-md-6 det">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-12">
                                <p class="det2"><span>{{_('Full Name')}}</span>{{_(':')}}<span>{{$details[0]->name}}</span></p><br>
                                <p class="det2"><span>{{_('Contact Number')}}</span>{{_(':')}}<span>{{$details[0]->phone}}</span></p><br>
                                <p class="det2"><span>{{_('Address')}}</span>{{_(':')}}<span>{{$details[0]->address}}</span></p><br>
                                <p class="det2"><span>{{_('Date of Birth')}}</span>{{_(':')}}<span>{{$details[0]->dob}}</span></p><br>
                                <p class="det2"><span>{{_('Blood Group')}}</span>{{_(':')}}<span>{{$details[0]->blood}}</span></p><br>
                                <p class="det2"><span>{{_('Date of Joining')}}</span>{{_(':')}}<span>{{$details[0]->doj}}</span></p><br>                                
                                <p class="det2"><span>{{_('License Number')}}</span>{{_(':')}}<span>{{$details[0]->license}}</span></p><br>
                                <p class="det2"><span>{{_('Class Details')}}</span>{{_(':')}}<span>{{_('6/16')}}</span></p><br>
                                <!--Training Detail Table-->
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Vehicle Number</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>22/06/2018</td>
                                        <td>07:00</td>
                                        <td>OD-02-AA-6348</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>26/06/2018</td>
                                        <td>07:00</td>
                                        <td>OD-02-BC-1410</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>01/07/2018</td>
                                        <td>08:00</td>
                                        <td>OD-02-DC-2018</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>07/07/2018</td>
                                        <td>07:00</td>
                                        <td>OD-02-BC-1410</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">5</th>
                                        <td>03/08/2018</td>
                                        <td>07:00</td>
                                        <td>OD-02-BC-1410</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">6</th>
                                        <td>16/08/2018</td>
                                        <td>07:00</td>
                                        <td>OD-02-BC-1410</td>
                                      </tr>
                                      
                                    </tbody>
                                  </table>
                                    <p><a href="{{url('driver')}}" class="btn btn-danger">{{_('Go Back')}}</a>
                                    <a href="{{url('modedriver')}}/{{$details[0]->id}}" class="btn btn-success">{{_('Modify Data')}}</a></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Container Ends Here-->
@endsection