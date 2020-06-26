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

Route::get('/display','RoomController@getList');
Route::get('/c','RoomController@getAdd');
Route::post('/c','RoomController@postAdd');

//bt been Trang chu in laravel
Route::get('index',['as'=>'trang-chu',
                    'uses'=>'PageController@getIndex']);



