<?php
require_once 'Controller.php';
require_once(__DIR__ . '/../models/Student.php');
require_once(__DIR__ . '/../models/Book.php');

use App\Controllers\Controller;

class HomeController extends Controller {

    public function home()
    {

        $data = Student::all();

        return $this->view('student', $data);
    }
    public function dashboard()
    {
        $data = Book::all();

        return $this->view('book', $data);
    }
    public function about()
    {
        echo 'About page<br />';
    }
}