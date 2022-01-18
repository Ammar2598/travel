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
    return view('front-end.home-body');
})->name('home-page');

Route::namespace('BackEnd')->prefix('admin')->middleware('auth')->group(function (){

    Route::get('home','Home@index')->name('admin.home');
    Route::resource('users','Users')->except('show');
    Route::resource('categories','Categories')->except('show');
    Route::resource('destinations','Destinations')->except('show');
    Route::resource('journeys','Journeys')->except('show');
    Route::resource('blogs','Blogs')->except('show');
    Route::resource('infos','Infos')->except('show');

    
    Route::resource('messages','Messages')->only(['index','destroy','edit']);


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('FrontEnd')->prefix('front')->group(function (){

  Route::get('category/{id}','Categories@index')->name('front.category');
  Route::get('destination/{id}','Destinations@index')->name('front.destination');
  Route::get('journey/{id}','Journeys@index')->name('front.journey');
  Route::get('journey-search','Journeys@search')->name('journey.search');
  Route::get('blog/{id}','Blogs@index')->name('front.blog');
  Route::get('info','Informations@index')->name('front.info');

  Route::get('send-message','Messages@store')->name('contect.store');
  Route::get('recieve-message','Messages@index')->name('contect.recieve');
});