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
    return view('welcome');
})->name('home');

Route::get('/blogs', 'BlogController@index')->name('blogs');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/about', 'AboutController@index')->name('about');
Route::post('/contact', 'ContactController@store')->name('createContact');
Route::get('/project', 'ProjectController@index')->name('project');
Route::get('/service', 'SeviceController@index')->name('service');
Route::post('/suscripcion', 'SuscripcionController@store')->name('createSuscripcion');
Auth::routes();

Route::get('/admin/{any?}', 'AdminController@index')->name('admin');
