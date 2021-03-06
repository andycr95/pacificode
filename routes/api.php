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
    Route::put('/post/{id}', 'PostController@update');
    Route::delete('/post/{id}', 'PostController@destroy');

    //project
    Route::post('/project', 'ProjectController@store');
    Route::put('/project/{id}', 'ProjectController@update');
    Route::delete('/project/{id}', 'ProjectController@destroy');

    //service
    Route::post('/service', 'ServiceController@store');
    Route::put('/service/{id}', 'ServiceController@updateService');
    Route::delete('/service/{id}', 'ServiceController@destroy');

    //Answer
    Route::post('/answer', 'AnswerController@store');
    Route::post('/answer', 'AnswerController@store');
    Route::post('/answer/{id}', 'AnswerController@show');

     //features services
     Route::post('/service_features', 'ServicefeaturesController@store');

     //categorias
     Route::post('/categories', 'CategoryController@store');
     Route::delete('/categories/{id}', 'CategoryController@destroy');

     //tags
     Route::post('/tag', 'TagController@store');

     //testimonies
    Route::post('/testimonies', 'TestimonyController@store');

    //faq
   // Route::post('/faq', 'FaqController@store');

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

    //projects
    Route::get('/projects', 'ProjectController@getProjects');
    Route::get('/project/{id}', 'ProjectController@getProject');

    //comments
    Route::get('/comments/{id}', 'CommentController@getComments');
    Route::post('/comment', 'CommentController@store');

    //testimonios
    Route::get('/testimonies', 'TestimonyController@gettestimonies');

    //categories
    Route::get('/categories', 'CategoryController@getCategories');

    //testimonies
    Route::get('/testimonies', 'TestimonyController@getTestimonies');

     //categories
     Route::get('/categories', 'CategoryController@getCategories');

      //Faqs
    Route::get('/faqs', 'FaqController@getFaqs');
    //Route::get('/faq/{id}', 'FaqController@getFaq');


    //Uploads
    Route::group(['prefix' => 'upload'], function () {
        Route::post('/images/post', 'UploadController@imagePost');
    });
});
