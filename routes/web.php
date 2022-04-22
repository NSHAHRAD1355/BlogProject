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



Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/login', 'HomeController@index')->name('login');
//Route::get('/register', 'HomeController@index')->name('login');



//Route::get('/home','HomeController@index')->name('home');


Route::get('/homepage', 'PagesController@getIndex')->name('homepage');

Route::get('about', 'PagesController@getAbout')->name('about');
Route::get('contact','PagesController@getContact')->name('contact');

//Route::get('/home', 'PagesController@getIndex');
//Route::get('login', 'PagesController@getIndex')->name('home');

Route::resource('posts','PostController');
Route::resource('categories','CategoryController');
Route::resource('tags','TagController');

