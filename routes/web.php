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

Route::get('/plogin', function () {
    return view('plogin');
});

Route::get('/demographics', function () {
    return view('demographics');
});

Route::get('/medicalhistory', function () {
    return view('medicalhistory');
});
