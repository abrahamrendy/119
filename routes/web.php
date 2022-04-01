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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@verificator')->name('home');
Route::post('/register', 'HomeController@register')->name('register');
Route::post('/temp_verify', 'HomeController@scan')->name('temp_verify');
Route::get('/success/{code}', 'HomeController@success')->name('success');


Route::get('qr-code', 'HomeController@generateQRCode')->name('qr-code');

Route::post('register/', 'HomeController@register');
Route::get('fetchattendance/{daterange}', 'AttendanceController@fetchAttendanceByDate');
Route::post('attend/', 'AttendanceController@attend')->name('attend');
