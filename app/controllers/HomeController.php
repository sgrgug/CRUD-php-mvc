<?php
require_once 'Controller.php';
require_once(__DIR__ . '/../models/Student.php');

use App\Controllers\Controller;
use App\Models\Student;

class HomeController extends Controller {

    public function home()
    {
        $student = new Student();

        $data = $student->all();

        // foreach($student as $s)
        // {
        //     echo $s->title;
        // }

        // echo $student->name;

        // echo "Home page<br />";

        // echo "sad";

        // $data = [
        //     'title' => 'Home page',
        //     'name' => 'John Doe',
        //     'age' => 30,
        // ];

            // print_r($data);

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