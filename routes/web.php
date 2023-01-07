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

Route::middleware('auth')
->namespace('Admin') /* SERVE AD INDICARE CHE BISOGNA GUARDARE NELLA SOTTOCARTELLA Admin dei Controllers */
->prefix('admin') /* VIENE APPLICATO PRIMA DI OGNI URI */
->name('admin.') /* SERVE PER IDENTIFICARE UNA ROUTE DA USARE AD ESEMPIO IN UN HREF {{ route('NOME DELLA ROTTA')}} */
->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
    Route::resource('categories', 'CategoryController');
});

Route::get('/', 'Guest\HomeController@index')->name('home');
Route::get('/{any}', 'Guest\HomeController@index')->where('any', '.*');


Route::get('/contacts', 'Guest\ContactController@contact')->name('guest.contact');
Route::post('/contacts', 'Guest\ContactController@contactMailSender')->name('guest.contactStore');

Route::get('/view', 'Guest\HomeController@view');





