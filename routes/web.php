<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/index/HOSPITALS/',function(){
    return view('HOSPITALS');
});
Route::get('/index/DOCTORS/',function(){
    return view('DOCTORS');
});
Route::get('/index/WARDS/',function(){
    return view('WARDZ');
});
Route::get('/index/BESTFORYOU/',function(){
    return view('BESTFORYOU');
});
Route::get('/index/REGISTER/',function(){
    return view('REGISTER');
});
Route::get('/index/Admin/',function(){
    return view('Admin');
});
Route::get('/index/HospitalSearch/',function(){
    return view('HospitalSearch');
});
Route::get('/index/DoctorSearch/',function(){
    return view('DoctorSearch');
});
Route::get('/index/WardSearch/',function(){
    return view('WardSearch');
}); 