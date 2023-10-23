<?php

require_once 'baseroute.php';
require_once '../app/controllers/HomeController.php';

use App\Routes\Route;


$routes = [
    ''  =>  'HomeController@index',
    'home' => 'HomeController@home',
    'dashboard' => 'HomeController@dashboard',
    'about' => 'HomeController@about',
];


Route::get($routes);