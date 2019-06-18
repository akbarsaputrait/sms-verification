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

Route::get('/', 'VerificationController@check')->name('sms');
Route::get('/{code}', 'VerificationController@sendSms')->name('sms.store');
Route::post('/', 'VerificationController@checkVerification')->name('sms.check');
