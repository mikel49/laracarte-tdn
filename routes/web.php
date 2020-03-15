<?php

Route::name('route_path')->get('/', 'PagesController@home');

Route::name('about_path')->get('/about', 'PagesController@about');

/*Route::get('/', [
    'as' => 'route_path',
    'users' => 'PagesController@home'
]);

Route::get('/about', [
   'as' => 'about_path',
   'users' => 'PagesController@about' 
]);