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



Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register/Patient', 'Auth\RegisterController@showPatientForm')->name('registerpatient');
Route::get('/register/Doctor', 'Auth\RegisterController@showDoctorForm')->name('registerdoctor');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password (added in v6.2)
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x

Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::get('/home', 'HomeController@index')->name('home');





Route::group(['middleware' => ['auth','Admin']] ,function(){
    
    Route::get('/Admin/index', 'Admin\DashboardAdminController@welcome');
    Route::get('/Admin/Doctorslist', 'Admin\DashboardAdminController@doctorslist')->name('doctorslist');
    Route::get('/Admin/allDoctorslist', 'Admin\DashboardAdminController@alldoctorslist')->name('alldoctorslist');
    Route::get('/Admin/blockedDoctorslist', 'Admin\DashboardAdminController@blockeddoctorslist')->name('blockeddoctorslist');

    Route::get('/Admin/allPatientslist', 'Admin\DashboardAdminController@allpatientslist')->name('allpatientslist');
    Route::get('/Admin/blockedPatientslist', 'Admin\DashboardAdminController@blockedpatientslist')->name('blockedpatientslist');
    Route::PUT('/Admin/update/{doctor}', 'Admin\DashboardAdminController@confirm')->name('confirm');

 });
 
 Route::group(['middleware' => ['auth','Doctor']] ,function(){
    
    Route::get('/Doctor/showpatient/{id}','NoteController@show')->name('showpatient');
    Route::resource('/Doctor/Note','NoteController');
    Route::get('/Doctor/makenote/{id}', 'NoteController@makenote')->name('makenote');

    Route::get('appointementd', 'AppointementController@index')->name('appointementd');
    Route::get('/Doctor/mypatients','AppointementController@mypatients')->name('mypatients');
    Route::resource('/Doctor/appointement','AppointementController');
    
    Route::get('/Doctor/index', 'Doctor\DashboardDoctorController@welcome');

    Route::GET('/Doctor/update', 'Doctor\DashboardDoctorController@showupdate');
    Route::PUT('/Doctor/update', 'Doctor\DashboardDoctorController@update')->name('update');
    
    
});
Route::group(['middleware' => ['auth','Patient']] ,function(){

    
    Route::get('/Patient/index', 'Patient\PatientController@welcome');
    Route::resource('/Patient/appointement','AppointementController', [
        'as' => 'Patient'
    ]);
    Route::get('/Patient/appontement/{id}', 'AppointementController@makeappointement')->name('makeappointement');
    Route::get('/Patient/doctorlist', 'Patient\PatientController@doctorlist')->name('doctorlist');



    
});

