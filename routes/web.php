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
Route::get('commercials','CommercialController@index');
Route::get('commercials/sales','CommercialController@sales');
Route::get('commercials/rentals','CommercialController@rentals');

Route::get('lands','LandController@index');
Route::get('lands/sales','LandController@sales');
Route::get('lands/rentals','LandController@rentals');



Route::get('residentials','ResidentialController@index');
Route::get('residentials/sales','ResidentialController@sales');
Route::get('residentials/rentals','ResidentialController@rentals');



Route::get('property', 'PropertyController@index');
Route::get('property/create', 'PropertyController@create');
Route::get('property/{property}/edit', 'PropertyController@edit');
Route::patch('property/{property}', 'PropertyController@update');
Route::get('property/{title}', 'AllPropertyController@show');
Route::post('property', 'PropertyController@store');
Route::get('/{location}/{title}', 'PropertyController@show');
Route::post('{location}/{title}/photos', 'PropertyController@addPhoto');
Route::delete('property_photo/{id}', 'AllPropertyController@destroy');

//Route::get('lands', 'LandController@create');
//Route::post('lands', 'LandController@store');
//Route::get('residentials', 'ResidentialController@create');
//Route::post('residentials', 'ResidentialController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
