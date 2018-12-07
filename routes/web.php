<?php

Route::get('/', 'HomeController@indexAction')->name('page.home');
Route::get('about', 'HomeController@aboutAction')->name('page.about');
