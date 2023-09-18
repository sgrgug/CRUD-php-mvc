<?php

require_once 'baseroute.php';
require_once '../app/controllers/HomeController.php';



$routes = [
    'home' => 'HomeController@home',
    'dashboard' => 'HomeController@dashboard',
    'about' => 'HomeController@about',
];

Route::get($routes);