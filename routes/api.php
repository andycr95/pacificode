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


Route::post('/login', 'AuthController@login');

Route::group(['middleware' => ['auth:api']], function () {
    //login api
    Route::post('/logout', 'AuthController@logout');

    //User routes
    Route::get('/user', 'UserController@getUsers');
    Route::post('/user', 'UserController@store');
    Route::get('/user/{id}', 'UserController@getUser');
    Route::put('/user/{id}', 'UserController@update');
    Route::put('/user/photo/{id}', 'UserController@updatePhoto');
    Route::put('/user/photoport/{id}', 'UserController@updatePhotoPort');
    Route::put('/user/desc/{id}', 'UserController@updateDesc');

    //posts
    Route::post('/post', 'PostController@store');

    //project
    Route::post('/project', 'ProjectController@store');

     //service
     Route::post('/service', 'ServiceController@store');
     Route::put('/service/{id}', 'ServiceController@updateService');

});

Route::group(['middleware' => ['api']], function () {

    //tags
    Route::get('/tags', 'TagController@getTags');
    

    //posts
    Route::get('/posts', 'PostController@getPosts');
    Route::get('/post/{id}', 'PostController@getPost');

     //services
     Route::get('/services', 'ServiceController@getServices');
     Route::get('/service/{id}', 'ServiceController@getService');

       //testimonios
       Route::get('/testimonies', 'TestimonyController@gettestimonies');

    //categories
    Route::get('/categories', 'CategoryController@getCategories');
});
