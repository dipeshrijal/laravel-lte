<?php

$router->get('/', function () {
    return view('welcome');
});

$router->get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

$router->get('/home', 'HomeController@index');

$router->resource('/pages', 'PagesController');
