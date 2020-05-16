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
    //return view('welcome');
    return redirect('login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');



Route::get('/userlist', 'HomeController@userList');
Route::get('/userdetail/{id}', 'HomeController@userDetail');

Route::get('/edituser/{id}', 'HomeController@editUser');

Route::post('/updateuser/{id}', 'HomeController@updateUser');


Route::get('/doner/{id}', 'HomeController@doner');


Route::get('/delete/{id}', 'HomeController@delete');



