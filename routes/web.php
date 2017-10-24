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
});


//Route::resource('property', 'PropertyController');
Route::get('property', 'PropertyController@index');
Route::get('property/create', 'PropertyController@create');
Route::post('property', 'PropertyController@store');
Route::get('{location}/{title}', 'PropertyController@show');
Route::post('{location}/{title}/photos', 'PropertyController@addPhoto');
Route::get('all-properties', 'AllPropertyController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');