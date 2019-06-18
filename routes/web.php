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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'VerificationController@index')->name('sms');
Route::post('sms', 'VerificationController@sendSms')->name('sms.store');

Route::get('/check/{uuid}', 'VerificationController@check')->name('check');
Route::post('check', 'VerificationController@checkVerification')->name('check.store');
