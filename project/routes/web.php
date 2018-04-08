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

