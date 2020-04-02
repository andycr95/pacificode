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
    return view('welcome', compact('posts'));
})->name('home');

Route::get('/blogs', 'PostController@index')->name('blogs');
Route::get('/blog', 'PostController@show')->name('blog');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('createContact');

Route::get('/portfolio', 'ProjectController@index')->name('portfolio');
//Route::post('/portfolio', 'ProjectController@store')->name('createProject');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/service', 'SeviceController@index')->name('service');

Route::post('/suscripcion', 'SuscripcionController@store')->name('createSuscripcion');
Auth::routes();

Route::get('/admin/{any?}', 'AdminController@index')->name('admin');
Route::get('/admin/{any?}/{id}', 'AdminController@index')->name('admin');


