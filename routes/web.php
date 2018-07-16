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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/profile', function () {
    return view('contact_profile');
});
Route::get('/contacts', function () {
    return view('contactsall');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
