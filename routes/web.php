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
