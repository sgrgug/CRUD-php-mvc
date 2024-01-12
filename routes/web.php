<?php

require_once 'baseroute.php';
require_once '../app/controllers/HomeController.php';

use App\Routes\Route;


$getRoutes = [
    ''  =>  'HomeController@index',
    'home' => 'HomeController@home',
    'dashboard' => 'HomeController@dashboard',
    'about' => 'HomeController@about',

    // create students
    'addstudent'    =>  'HomeController@createStudent',
];


Route::get($getRoutes);