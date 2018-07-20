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

Route::get('/', function () {
    return view('index');
});

/*
Route::get('/login', function () {
    return view('login');
});
Route::get('/profile', function () {
    return view('contact_profile');
});
Route::get('/contacts', function () {
    return view('contactsall');
});
Route::get('/sendRequest', function () {
    return view('sendRequest');
});
*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@index')->name('profile');
