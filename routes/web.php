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

Route::get('/phpstorm', 'PageController@getPhpstorm')->name('phpstorm.get');
Route::post('/phpstorm', 'PageController@postPhpstorm')->name('phpstorm.post');
//AdvancedRoute::controller('/', 'PageController');
