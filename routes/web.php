<?php



Route::get('/', 'WelcomeController@index');
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





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
