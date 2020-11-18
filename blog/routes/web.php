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


Route::group(['middleware' => ['auth','admin']],function() {

Route::get('/dashboard','AdminController@dashboard');

Route::get('/users','AdminController@users');
Route::put('/userroleupdate','AdminController@userroleupdate');
Route::delete('/deleteuser/{id}','AdminController@userdelete');


Route::get('/categories','AdminController@categories');
Route::put('/catstore','AdminController@catstore');
Route::put('/catupdate','AdminController@updatecat');


Route::get('/products','AdminController@products');
Route::get('/addproducts','AdminController@addproducts');
Route::put('/productstore','AdminController@productstore');
Route::get('/viewproduct/{id}','AdminController@productdetails');
});



Route::group(['middleware' => ['auth','user']],function() {
Route::get('/userprofile','IndexController@userprofile');
Route::put('/userinfosave/{id}','IndexController@userinfosave');

});

Auth::routes();

Route::get('/', 'IndexController@index');
Route::get('/categorydetails/{id}', 'IndexController@categorydetails');
Route::get('/productdetails/{id}', 'IndexController@productdetails');
