<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/trouble', 'HomeController@trouble')->name('trouble');

Route::get('/top10', 'HomeController@top10')->name('top10');

Route::get('/starthere', 'FlowController@index')->name('starthere');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/add_Teacher','HomeController@add_Teacher')->name('add_Teacher');

// Route::get('/starthere/{$id_city}', 'FlowController@show')->name('universities');

Route::Resource('flow', 'FlowController');

Route::Resource('flow2', 'Flow2Controller');

Route::Resource('flow3', 'Flow3Controller');

Route::Resource('flow4', 'Flow4Controller');

Route::Resource('flow5', 'Flow5Controller');

Route::Resource('flow6', 'Flow6Controller');

Route::Resource('ratings', 'RatingsController');




