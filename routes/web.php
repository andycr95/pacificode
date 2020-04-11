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
    $posts = App\Post::orderBy('created_at', 'desc')->limit(3)->select('post_photo', 'post_title','id', 'created_at')->get();
    $testimonies = App\testimony::All();
    return view('welcome', compact('posts', 'testimonies'));
})->name('home');





Route::get('/about', 'AboutController@index')->name('about');
Route::post('/suscripcion', 'SuscripcionController@store')->name('createSuscripcion');

//Contact
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('createContact');

//Portfolio
Route::get('/portfolio', 'ProjectController@index')->name('portfolio');
Route::get('/project/{id}', 'ProjectController@show')->name('project');

//Service
Route::get('/service', 'ServiceController@index')->name('services');
Route::get('/service/{id}', 'ServiceController@show')->name('service');

//testimonies
Route::get('/testimonies', 'TestimonyController@index')->name('testimonies');
Route::get('/testimony/{id}', 'TestimonyController@show')->name('testimony');




//Blog
Route::get('/blogs', 'PostController@index')->name('blogs');
Route::get('/blogs/{post}', 'PostController@show')->name('blog');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/{any?}', 'AdminController@index')->name('admin');
    Route::get('/admin/{any?}/{id}', 'AdminController@index')->name('admin');
});

//auth
Auth::routes();
