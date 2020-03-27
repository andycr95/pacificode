<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('/user', 'UserController@getUsers');
Route::middleware('api')->get('/user/{id}', 'UserController@getUser');
Route::middleware('api')->get('/tags', 'TagController@getTags');

Route::middleware('api')->post('/user', 'UserController@store');
Route::middleware('api')->put('/user/{id}', 'UserController@update');
Route::middleware('api')->put('/user/photo/{id}', 'UserController@updatePhoto');
Route::middleware('api')->put('/user/photoport/{id}', 'UserController@updatePhotoPort');
Route::middleware('api')->put('/user/desc/{id}', 'UserController@updateDesc');
