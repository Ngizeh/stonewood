<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('property', 'PropertyController@index');
Route::get('property/create', 'PropertyController@create');
Route::get('property/{title}', 'AllPropertyController@show');
Route::post('property', 'PropertyController@store');
Route::get('/{location}/{title}', 'PropertyController@show');
Route::post('{location}/{title}/photos', 'PropertyController@addPhoto');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
