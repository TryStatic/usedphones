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


Route::get('/', 'PagesController@getHome');

Route::get('about', 'PagesController@getAbout');

Route::get('faq', 'PagesController@getFaq');

Route::get('support', 'PagesController@getSupport');


Route::get('listings/create/{category?}', 'ListingsController@create')->name('listings.create');
Route::resource('listings', 'ListingsController', ['except' => ['create'] ]);
