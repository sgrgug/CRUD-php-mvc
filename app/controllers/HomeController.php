<?php
require_once 'Controller.php';

use App\Controller;

class HomeController extends Controller {
    public function home()
    {
        $data = [
            'title' => 'Home page',
            'name' => 'John Doe',
            'age' => 30,
        ];

        return $this->view('home', $data);
    }
    public function dashboard()
    {
        echo 'Dashboard page<br />';
    }
    public function about()
    {
        echo 'About page<br />';
    }
}