<?php

Route::get('/', 'ComingSoonController@index')->name('comingsoon');

Route::get('/', function () {
    return view('comingsoon');
});
