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

Route::get('/user', ['as' => 'user.index', 'uses' => 'User@index']);
Route::post('/user', ['as' => 'user.create', 'uses' => 'User@create']);


// guest:admin

Route::group(['middleware' => ['guest']], function () {

    Route::get('/login', ['as' => 'auth.login', 'uses' => 'Auth@login']);
    Route::post('/login', ['as' => 'auth.login.post', 'uses' => 'Auth@loginUser']);
    Route::get('/register', ['as' => 'auth.register.get', 'uses' => 'Auth@register']);
    Route::post('/register', ['as' => 'auth.register.post', 'uses' => 'Auth@createNewUser']);
});


Route::group(['middleware' => ['auth']], function () {

    Route::post('/auth/user', ['as' => 'auth.user', 'uses' => 'Auth@index']);
    Route::get('/auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth@logout']);
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'Dashboard@index']);
    Route::post('/dashboard', ['as' => 'dashboard', 'uses' => 'Dashboard@show']);
});
