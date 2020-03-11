<?php

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('web.about');
Route::get('/contact', 'HomeController@contact')->name('web.contact');
