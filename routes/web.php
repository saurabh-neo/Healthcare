<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('plogin');
});

//Route::get('/plogin','PatientController@validatelogin');

Route::get('/plogin','PatientController@login');

Route::post('/plogin','PatientController@validatelogin');

Route::get('/demographics','PatientController@showform');

Route::post('/demographics','DemographicsController@savedata');

Route::post('/medicalhistory','MedicalhistoryController@savemedicaldata');

Route::get('/demo', function () {
    return \Redirect::back();
});

Route::get('/medicalhistory', function () {
    return view('medicalhistory');
});


Route::get('/plogout','MedicalhistoryController@plogt'); //so after wrong credentials it will not give error
Route::post('/plogout','MedicalhistoryController@plogt'); //so after wrong credentials it will not give error