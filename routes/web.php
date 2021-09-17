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


// guest

Route::group(['middleware' => ['guest']], function () {

    Route::get('/login', ['as' => 'login', 'uses' => 'Auth@login']);
    Route::post('/auth/login', ['as' => 'auth.login', 'uses' => 'Auth@loginUser']);

    Route::get('/register', ['as' => 'register', 'uses' => 'Auth@register']);
    Route::post('/auth/register', ['as' => 'auth.register', 'uses' => 'Auth@createNewUser']);
});






Route::group(['middleware' => ['auth']], function () {

    Route::post('/auth/user', ['as' => 'auth.user', 'uses' => 'Auth@index']);
    Route::post('/auth/user', ['as' => 'auth.user', 'uses' => 'Auth@index']);

    Route::get('/auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth@logout']);
    Route::post('/category', ['as' => 'category.post', 'uses' => 'Category@create']);

    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'Dashboard@index']);
    Route::post('/dashboard', ['as' => 'dashboard', 'uses' => 'Dashboard@show']);
});
