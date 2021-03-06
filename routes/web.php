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


Auth::routes();

/* Route::get('/home', 'Guest\HomeController@index')->name('home'); */

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::resource('posts', 'PostController');
    Route::resource('categories', 'CategoryController');
});

Route::get('/', 'Guest\HomeController@index');

Route::get('/contacts', 'Guest\ContactController@contact')->name('guest.contact');
Route::post('/contacts', 'Guest\ContactController@contactMailSender')->name('guest.contactStore');



