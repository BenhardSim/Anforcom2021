<?php

Route::get('/comingsoon', 'ComingSoonController@index')->name('comingsoon');

Route::get('/', 'HomepageController@index')->middleware('needevents')->name('home');

Route::get('/', function () {
    return view('comingsoon');
});
