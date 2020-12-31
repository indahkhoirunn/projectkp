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
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/presensi', function () {
    return view('presensi');
});

Route::get('/login','loginController@index');

Route::get('/guru','guruController@index');

Route::get('/signup','signupController@index');

Route::get('/admin','adminController@index');

Route::resource('users','UsersController');

Route::get('/kelas','adminController@kelas');

