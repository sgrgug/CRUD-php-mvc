<?php

namespace App\Controllers;

class Controller {
    public function view($view, $data = [])
    {
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        } else {
            echo "View not found: $view";
        }
    }

}