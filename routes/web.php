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

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::view('/privacy', 'privacy_policy')->name('privacy_policy');

Route::get('/settings', 'SettingsController@edit')->name('settings.edit');
Route::put('/settings', 'SettingsController@update')->name('settings.update');

Route::delete('/account', 'DeleteAccountController')->name('account.destroy');

Route::get('/contact', 'RedirectController@contact')->name('contact.form');

Route::get('/pages/{organization}', 'OrganizationsController@show')->name('organizations.show');
Route::get('/organizations', 'OrganizationsController@index')->name('organizations.index');
Route::get('/organizations/{organization}', 'OrganizationsController@get');
Route::post('/organizations/{organization}/clicks', 'OrganizationClicksController@store')->name('organizations.clicks.store');

Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@get');

Route::get('/redirect/{to}', 'RedirectController@index')->name('redirect.to');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');
