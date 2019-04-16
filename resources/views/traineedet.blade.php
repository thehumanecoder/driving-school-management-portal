@extends('adminlte::page')
@section('content')

<section class="content">
<div class="container">
    <div class="box box-solid box-success">
       <div class="box-header with-border">
           <div class="row">
             <h4 style="margin-left:15px;"> Training Details of {{ucwords($details[0]->name)}}</h4>
           </div>
       </div>
       @foreach($details as $item)
       <div class="box-body with-border">
            <div class="row">
                    <div class="col-md-7 col-sm-7 offset-md-2 offset-sm-2 ">
                        <p class=""><span>{{_('Full Name')}}</span>{{_(':')}}<span>{{$details[0]->name}}</span></p><br>
                        <p class=""><span>{{_('Father Name')}}</span>{{_(':')}}<span>{{$details[0]->father}}</span></p><br>
                        <p class=""><span>{{_('Mother Name')}}</span>{{_(':')}}<span>{{$details[0]->mother}}</span></p><br>
                        <p class=""><span>{{_('Contact Number')}}</span>{{_(':')}}<span>{{$details[0]->mobile}}</span></p><br>
                        <p class=""><span>{{_('Address')}}</span>{{_(':')}}<span>{{$details[0]->address}}</span></p><br>
                        <p class=""><span>{{_('Date of Birth')}}</span>{{_(':')}}<span>{{$details[0]->dob}}</span></p><br>
                        <p class=""><span>{{_('Blood Group')}}</span>{{_(':')}}<span>{{$details[0]->blood}}</span></p><br>
                        <p class=""><span>{{_('Email Id')}}</span>{{_(':')}}<span>{{$details[0]->email}}</span></p><br>
                        <p class=""><span>{{_('Date of Joining')}}</span>{{_(':')}}<span>{{$details[0]->doj}}</span></p><br>                                
                        <p class=""><span>{{_('Preferable Time')}}</span>{{_(':')}}<span>{{$details[0]->time}}</span></p><br>
                        <p class=""><span>{{_('Class Details')}}</span>{{_(':')}}<span>{{_('6/16')}}</span></p><br>
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
                          <!--Table End-->
                          <h4>Payment Details</h4>
                          <p class=""><span>{{_('Total Contact Fees')}}</span>{{_(':')}}<span>{{_('INR 4,000.00')}}</span></p><br>
                          <p class=""><span>{{_('Fees Deposited')}}</span>{{_(':')}}<span>{{_('INR 2000.00')}}</span></p><br>
                            <!--Payment Table Started-->
                          <h4>Payment Table</h4>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Reciept No</th>
                                <th scope="col">Mode</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>22/06/2018</td>
                                <td>1,000.00</td>
                                <td>56864</td>
                                <td>CASH</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>26/07/2018</td>
                                <td>1,000.00</td>
                                <td>56895</td>
                                <td>CASH</td>
                              </tr>                                      
                            </tbody>
                          </table>
                            <!--Payment Table  Ended-->

                            <h4>License Details</h4>
                            <p class=""><span>{{_('License Type')}}</span>{{_(':')}}<span>{{_('Learning License')}}</span></p><br>
                            <p class=""><span>{{_('Issuing Date')}}</span>{{_(':')}}<span>{{_('30/06/2018')}}</span></p><br>
                            <p class=""><span>{{_('Expiry Date')}}</span>{{_(':')}}<span>{{_('30/12/2018')}}</span></p><br>
                            <p class=""><span>{{_('License Upgrade')}}</span>{{_(':')}}<span>{{_('Yes')}}</span></p><br>
                            <p class=""><span>{{_('License Number')}}</span>{{_(':')}}<span>{{_('62358AA55')}}</span></p><br>
                          
                    </div>
                </div>
       </div>
       @endforeach
    </div>
</div>
</section>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

@section('js')
   
@stop