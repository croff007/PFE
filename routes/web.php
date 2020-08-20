<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth','Admin']] ,function(){

    Route::get('/Admin/index', 'Admin\DashboardAdminController@welcome');



 });
 Route::group(['middleware' => ['auth','Doctor']] ,function(){



    Route::get('/doctor/index', 'Doctor\DashboardDoctorController@welcome');

    
});
Route::group(['middleware' => ['auth','Patient']] ,function(){

    Route::get('/Patient/index', 'Patient\PatientController@welcome');



    
});