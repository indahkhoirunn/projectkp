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



Route::get('/login','loginController@index');

Route::get('/signup','signupController@index');

Route::get('/admin','adminController@index');

Route::resource('users','UsersController');

Route::resource('kelas','KelasController');

Route::get('/materi/index','MaterisController@index');
Route::get('/materi','MaterisController@index');
Route::get('/materi/create','MaterisController@create');
Route::get('/materi/{materi}','MaterisController@show');
Route::post('/materi','MaterisController@store');
Route::delete('/materi/{materi}','MaterisController@destroy');
Route::get('/materi/{materi}/edit','MaterisController@edit');
Route::patch('/materi/{materi}','MaterisController@update');

Route::get('/assignment/index','AssignmentsController@index');
Route::get('/assignment','AssignmentsController@index');
Route::get('/assignment/create','AssignmentsController@create');
Route::get('/assignment/{assignment}','AssignmentsController@show');
Route::post('/assignment','AssignmentsController@store');
Route::delete('/assignment/{assignment}','AssignmentsController@destroy');
Route::get('/assignment/{assignment}/edit','AssignmentsController@edit');
Route::patch('/assignment/{assignment}','AssignmentsController@update');

Route::get('/presence','PresencesController@index');



Route::get('siswa/presence','StudentPresencesController@index');
Route::get('siswa/presence/index','StudentPresencesController@index');
Route::post('/presence/store','StudentPresencesController@store');

