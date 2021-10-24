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
Auth::routes();

Route::get('/','App\Http\Controllers\RegistrationController@main');

Route::post('register','App\Http\Controllers\RegistrationController@register')->name('register');
Route::post('login','App\Http\Controllers\RegistrationController@login')->name('login');
Route::get('login','App\Http\Controllers\RegistrationController@login')->name('login');
Route::post('logout','App\Http\Controllers\RegistrationController@logout')->middleware('auth');
Route::get('logout','App\Http\Controllers\RegistrationController@logout')->middleware('auth');

Route::post('showFbCallPage','App\Http\Controllers\FbCallController@showFbCallPage')->middleware('auth');
Route::post('showTables','App\Http\Controllers\EmailController@showTables')->middleware('auth');
Route::get('showTables','App\Http\Controllers\EmailController@showTables')->middleware('auth');
Route::get('table','App\Http\Controllers\EmailController@table')->middleware('auth');
Route::post('table','App\Http\Controllers\EmailController@table')->middleware('auth');
Route::post('getDomains','App\Http\Controllers\EmailController@getDomains')->middleware('auth');
Route::get('getDomains','App\Http\Controllers\EmailController@getDomains')->middleware('auth');
Route::post('showReport','App\Http\Controllers\EmailController@showReport')->middleware('auth');
Route::post('startQueue', 'App\Http\Controllers\EmailController@startQueue')->middleware('auth');
Route::post('upload','App\Http\Controllers\EmailController@upload')->middleware('auth');
Route::get('upload','App\Http\Controllers\EmailController@upload')->middleware('auth');
Route::post('store','App\Http\Controllers\EmailController@store')->middleware('auth');
Route::get('store','App\Http\Controllers\EmailController@store')->middleware('auth');
Route::post('showuploadedfiles','App\Http\Controllers\EmailController@showuploadedfiles')->middleware('auth');
Route::post('showEmails','App\Http\Controllers\EmailController@showEmails')->middleware('auth');
Route::post('parse','App\Http\Controllers\EmailController@parse')->middleware('auth');
Route::get('parse','App\Http\Controllers\EmailController@parse')->middleware('auth');
Route::post('writeemailsdb','App\Http\Controllers\EmailController@writeemailsdb')->middleware('auth');
Route::post ('check','App\Http\Controllers\EmailController@check')->middleware('auth');
Route::get('check','App\Http\Controllers\EmailController@check')->middleware('auth');
Route::get('track','App\Http\Controllers\EmailDataController@track');
Route::post('checkBounces','App\Http\Controllers\EmailDataController@checkBounces')->middleware('auth');
Route::post('showCheckBouncesPage','App\Http\Controllers\EmailDataController@showCheckBouncesPage')->middleware('auth');
Route::get('showCheckBouncesPage','App\Http\Controllers\EmailDataController@showCheckBouncesPage')->middleware('auth');
Route::get('unsubscribe','App\Http\Controllers\EmailDataController@unsubscribe');
Route::post('showKillPidPage','App\Http\Controllers\EmailController@showKillPidPage')->middleware('auth');
Route::post('showSearchPage','App\Http\Controllers\EmailDataController@showSearchPage')->middleware('auth');
Route::post('test','\App\Http\Controllers\EmailDataController@test')->middleware('auth');
Route::get('jsonn','App\Http\Controllers\EmailDataController@jsonn');
Route::post('jsonn','App\Http\Controllers\EmailDataController@jsonn');
Route::post('search','App\Http\Controllers\EmailDataController@search')->middleware('auth');
Route::post('showWhatWeHave','App\Http\Controllers\EmailController@showWhatWeHave')->middleware('auth');


