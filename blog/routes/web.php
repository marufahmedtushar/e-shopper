<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware grou   p. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth','user']],function() {
Route::get('/userprofile','IndexController@userprofile');
Route::put('/userinfostore','IndexController@userinfostore');

});

Auth::routes();

Route::get('/', 'IndexController@index');