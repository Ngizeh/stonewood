<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('property', 'PropertyController@index');
Route::get('property/{property}', 'AllPropertyController@show');
Route::get('property/create', 'PropertyController@create');
Route::post('property', 'PropertyController@store');
Route::get('/{location}/{title}', 'PropertyController@show');
Route::post('{location}/{title}/photos', 'PropertyController@addPhoto');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
