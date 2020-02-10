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
    return view('template.biasa');
});
Route::get('/form', function () {
    return view('coba');
});
Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');
Route::get('/buatdonasi', function () {
    return view('buatdonasi');
});
Route::get('/laporandonasi', function () {
    return view('laporandonasi');
});
Route::get('/loginbeebagi', function () {
    return view('user.loginbeebagi');
});
Route::get('/singup', function () {
    return view('user.register');
});
Route::get('/forgetpass', function () {
    return view('user.forgetpass');
});

Route::group(['prefix'=>'users','as'=>'user'], function(){
    Route::get('/', ['as' => 'index', 'uses' => 'UserController@index']);
    Route::get('/rima', ['as' => 'index', 'uses' => 'UserController@index1']);
});

Route::get('/input', 'userController@input');
 
Route::post('/proses', 'userController@proses');
// Route::get('/test', function () {
//     return view('template.biasa');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/firebase','FirebaseController@index')->name('firebase');


