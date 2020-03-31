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


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

Route::get('/home', 'HomeController@index');
Route::get('/home/profile', 'HomeController@profile');

Route::get('/home/add', 'HomeController@addUserView');
Route::post('/home/add', 'HomeController@adduser');


Route::get('/home/userlist', 'HomeController@userList');

