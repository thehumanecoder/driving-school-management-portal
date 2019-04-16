<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vehicle',function(){
        return view('vehicle');
});
Route::get('/advehc',function(){
        return view('addvehicle');
});
Route::get('/editvehicle/{id}',function(){
    return view('editvehicle');
});
Route::get('/vehicledetail/{id}',function(){
    return view('vehicledetail');
});
Route::get('/trainee',function(){
    return view('trainee');
});
Route::get('/traineedet/{id}',function(){
    return view('traineedet');
});
Route::get('/edittrainee/{id}',function(){
    return view('edittrainee');
});
Route::get('/traineedet/{id}','CustomerController@details');
Route::get('/edittrainee/{id}','CustomerController@editget');

Route::get('/addtrainee',function(){
    return view('addtrainee');
});
Route::post('/updatetrn/{id}','CustomerController@update');
Route::post('/addTrainee','CustomerController@addnew');
Route::get('/trainee','CustomerController@getcustomer');
Route::post('/addvehicle','VehicleController@addnew');
Route::get('/vehicle','VehicleController@getall');
Route::get('/editvehicle/{id}','VehicleController@edit');
Route::get('/vehicledetail/{id}','VehicleController@getdetails');
Route::post('/updateveh/{id}','VehicleController@update');
Route::get('/driver',function(){
    return view('/driver');
});
Route::get('/adddriver',function(){
    return view('adddriver');
});
Route::post('/submitdriver','DriverController@add');
Route::get('/driver','DriverController@getall');
Route::get('/driverdet/{id}',function(){
    return view('driverdet');
});
Route::get('/modedriver/{id}',function(){
    return view('moddriver');
});
Route::get('/driverdet/{id}','DriverController@getdetails');
Route::get('/modedriver/{id}','DriverController@getsome');
Route::post('/updatedriver/{id}','DriverController@update');
Route::get('/test',function(){
    return view('test');
});
Route::get('/vehicle2',function(){
    return view('vehicle2');
});
Route::get('/license',function(){
    return view('license');
});
Route::get('/license','LicenseController@getuser');
Route::get('/updatelicense/{id}',function(){
    
  return view('updatelicense');

});
Route::get('/addlicense/{id}',function(){
    return view('addlicense');  
});

Route::get('/addlicense/{id}','LicenseController@adcat');
Route::get('/addlicensedetails/{id}',function(){
    return view('/addlicensedetails');
});
Route::get('/updatelicensecat/{id}',function(){
        return view('updatelicensecat');
});
Route::get('/updatelicensecat/{id}','LicenseController@getlic');

Route::post('savecat/{id}','LicenseController@savecat');

Route::get('/addlicensedetails/{id}','LicenseController@licdet');
Route::post('/savecat1/{id}','LicenseController@savecat1');
Route::post('/savecat2/{id}','LicenseController@savecat2');
Route::post('/updatecat/{id}','LicenseController@updatecat');
Route::get('/updatelicense/{id}',function(){
        return view('updatelicense');
});
Route::get('/updatelicense/{id}','LicenseController@getlicensedetails');
Route::post('/updatecat1/{id}','LicenseController@updatecat1');
Route::post('/updatecat2/{id}','LicenseController@updatecat2');
Route::get('/viewlicense/{id}',function(){
    return view('viewlicense');
});
Route::get('/viewlicense/{id}','LicenseController@getalldetails');
Route::get('/payments',function(){
    return view('payments');
});
Route::get('/payments','AccountController@getUserDetails');
Route::get('/addpayment/{id}',function(){
    return view('/addpayment');
});
Route::get('/addpayment/{id}','AccountController@getUserForPayment');
Route::post('/addpaymentfor/{id}','PaymentController@add');
Route::get('/paymentdetails/{id}',function(){
    return view('/paymentdetails');
});
Route::get('/paymentdetails/{id}','PaymentController@getUserPayments');
Route::post('/changestatus/{id}','PaymentController@setStatus');
Route::get('/testajax',function(){
        return view('test2');
});
Route::get('/testajax','NotificatioController@getAll');
Route::get('/slots',function(){
    return view('slots');
});
Route::get('/slots','SlotController@getall');

//Route::get('dayslot',function(){
  //  return view('dayslot');
//});
Route::get('slotden/{id}',function(){
    return view('slotden');
});
Route::get('slotden/{id}','SlotController@getdetails');
Route::get('formslot/{id}','SlotController@getdetforslot');
Route::post('addslot/{id}','SlotController@addslot');

Route::post('update/{id}','SlotController@update');
Route::get('editslot',function(){
    return view('editslot');
});
Route::get('editslot/{id}','SlotController@editslot');
Route::get('updslot/{id1}/{id2}','SlotController@getsvt');
Route::post('updateslot/{id}','SlotController@update');
Route::get('deleteslot/{id1}/{id2}','SlotController@delslot');
Route::get('training','TrainingController@getCustomers');
Route::get('allotvehicle/{id}','TrainingController@allotvehicle');
Route::post('addvehicleallot','TrainingController@dvi');
Route::get('trainingdetails/{id}',function(){
    return view('training2');
});
Route::get('trainingdetails/{id}','TrainingController@trainingdet');
Route::get('settings',function(){
    return view('settings');
});
Route::post('/addtcf','SettingsController@addTcf');
Route::get('settings','SettingsController@getusers');
Route::get('login2',function(){
    return view('auth.login2');
});