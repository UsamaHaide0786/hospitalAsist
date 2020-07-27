<?php

use App\Http\Controllers\HospitalController;
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
Route::get('/hospitals',function(){
    return view('hospitals.list');
});
Route::get('/DOCTORS',function(){
    return view('doctors.list');
});
Route::get('/WARDS',function(){
    return view('wards.list');
});
Route::get('/index/BESTFORYOU',function(){
    return view('BESTFORYOU');
});

Route::resource('hospitals','HospitalController');
Route::get('/REGISTER','HospitalController@create');
Route::get('/update','HospitalController@edit');
Route::post('/done','HospitalController@update');
Route::post('/done','HospitalController@store');


Route::get('/registered',function(){
    return view('hospitals.registered');
})->name('registered');

Route::get('/ADMIN',function(){
    return view('Admins.login');
});
Route::get('/HospitalSearch',function(){
    return view('hospitals.search');
});
Route::get('/DoctorSearch',function(){
    return view('doctors.search');
});
Route::get('/WardSearch',function(){
    return view('wards.search');
});
Route::get('/HOSPITALS/DETAILS',function(){
    return view('hospitals.details');
});
Route::get('/ADMIN/Login','HospitalController@index');
Route::post('/index/HOSPITALS','HospitalController@store');
Route::post('/index/WARDS','WardController@store');
Route::post('/index/DOCTORS','DocotorController@store');
