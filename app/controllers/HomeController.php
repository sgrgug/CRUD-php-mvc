<?php
require_once 'Controller.php';
// require_once '../models/Student.php';

use App\Controllers\Controller;
// use App\Models\Student;

class HomeController extends Controller {

    public function home()
    {
        // $student = Student::get();

        // echo $student;

        // echo "Home page<br />";
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

echo $x;