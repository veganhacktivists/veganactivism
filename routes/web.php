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

Auth::routes(['verify' => true]);

Route::view('/', 'welcome')->name('home');
Route::view('/privacy', 'privacy_policy')->name('privacy_policy');

Route::get('/settings', 'SettingsController@edit')->name('settings.edit');
Route::put('/settings', 'SettingsController@update')->name('settings.update');

Route::delete('/account', 'DeleteAccountController')->name('account.destroy');

Route::view('/contact', 'contact.form')->name('contact.form');
Route::post('/contact', 'SendContactEmailController')->name('contact.send');
