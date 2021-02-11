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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::get('/','App\Http\Controllers\RegistrationController@main');

Route::post('register','App\Http\Controllers\RegistrationController@register');
Route::post('login','App\Http\Controllers\RegistrationController@login');
Route::get('login','App\Http\Controllers\RegistrationController@login');
Route::post('logout','App\Http\Controllers\RegistrationController@logout');


Route::post('showTables','App\Http\Controllers\EmailController@showTables');
Route::get('showTables','App\Http\Controllers\EmailController@showTables');
Route::get('table','App\Http\Controllers\EmailController@table');
Route::post('table','App\Http\Controllers\EmailController@table');
Route::post('getDomains','App\Http\Controllers\EmailController@getDomains');
Route::get('getDomains','App\Http\Controllers\EmailController@getDomains');
Route::post('showReport','App\Http\Controllers\EmailController@showReport');
Route::post('startQueue', 'App\Http\Controllers\EmailController@startQueue');
Route::post('upload','App\Http\Controllers\EmailController@upload');
Route::get('upload','App\Http\Controllers\EmailController@upload');
Route::post('store','App\Http\Controllers\EmailController@store');
Route::get('store','App\Http\Controllers\EmailController@store');
Route::post('showuploadedfiles','App\Http\Controllers\EmailController@showuploadedfiles');

Route::post('showEmails','App\Http\Controllers\EmailController@showEmails');
Route::post('parse','App\Http\Controllers\EmailController@parse');
Route::get('parse','App\Http\Controllers\EmailController@parse');
Route::post('writeemailsdb','App\Http\Controllers\EmailController@writeemailsdb');
Route::post ('check','App\Http\Controllers\EmailController@check');
Route::get('check','App\Http\Controllers\EmailController@check');
Route::get('track','App\Http\Controllers\EmailDataController@track');
Route::post('checkBounces','App\Http\Controllers\EmailDataController@checkBounces');
Route::post('showCheckBouncesPage','App\Http\Controllers\EmailDataController@showCheckBouncesPage');