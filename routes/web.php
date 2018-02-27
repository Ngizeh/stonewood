<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'WelcomeController@index');
Route::get('/about', function () {
    return view('about');
});
Route::get('/buysalerent', 'BuyRentController@index');
Route::get('/property-detail', function () {
    return view('property-detail');
});
Route::get('contact', 'ContactController@create');

Route::post('contact', 'ContactController@store');

Route::get('/team', function () {
    return view('team');
});


Route::get('sale','SalesController@index');
Route::get('rent','RentalsController@index');

Route::post('upload', 'PropertyFileController@upload');

Route::get('search', 'SearchController@index');


Route::get('commercials','CommercialController@index');
Route::get('commercials/sales','CommercialController@sales');
Route::get('commercials/rentals','CommercialController@rentals');

Route::get('lands','LandController@index');
Route::get('lands/sales','LandController@sales');
Route::get('lands/development','LandController@development');


Route::get('residentials','ResidentialController@index');
Route::get('residentials/sales','ResidentialController@sales');
Route::get('residentials/rentals','ResidentialController@rentals');


Route::get('property', 'PropertyController@index');
Route::get('property/create', 'PropertyController@create');
Route::get('property/{property}/edit', 'PropertyController@edit');
Route::get('property/{title}', 'AllPropertyController@show');
Route::post('property', 'PropertyController@store');
Route::get('/{location}/{title}', 'PropertyController@show');
Route::post('{location}/{title}/photos', 'PropertyController@addPhoto');
Route::post('{location}/{title}/files', 'PropertyController@addPhoto');
Route::post('{location}/{title}/photos', 'PropertyController@addPhoto');
Route::patch('property/{property}', 'PropertyController@update');
Route::delete('property_photo/{id}', 'AllPropertyController@destroy');


Route::get('user_account', 'UserAccountController@index');



