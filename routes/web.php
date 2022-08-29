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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('messages', function () {return view('pages.messages');})->name('messages');
	Route::get('message/{id}', function () {return view('pages.messages');})->name('messages_view');
	Route::get('contact_submissions', function () {return view('pages.messages');})->name('contact_submissions');
	Route::get('service_request', function () {return view('pages.messages');})->name('service_request');
	Route::get('categories', function () {return view('pages.messages');})->name('categories');
	Route::get('subcategories', function () {return view('pages.messages');})->name('subcategories');
	Route::get('services', function () {return view('pages.messages');})->name('services');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('manage-model', function () {return view('pages.manage_model');})->name('manage_model');
});

