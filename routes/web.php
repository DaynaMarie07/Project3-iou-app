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

// <<<<<<< project2iou
// Route::group(['middleware' => ['auth']], function() {
//     Route::get('/', 'HomeController@index')->name('home');
//     Route::get('/home', 'HomeController@index')->name('home');

//     Route::get('/sendIOU', 'IOUController@showCreateIOU')->name('sendIOU');
//     Route::get('/recieveUOME', 'IOUController@showCreateUOME')->name('recieveUOME');

//     Route::post('/createIOU',  'IOUController@createIOU')->name('createIOU');
//     Route::post('/createUOME', 'IOUController@createUOME')->name('createUOME');

//     Route::get('/profile', 'HomeController@index')->name('profile');
//     Route::get('/contact', 'HomeController@index')->name('contact');
//     Route::get('/contactsall', 'HomeController@index')->name('contactsall');
// });
// =======
// Route::get('/home', 'HomeController@index')->name('home');
// >>>>>>> master
