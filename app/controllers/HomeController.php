<?php
require_once 'Controller.php';
require_once(__DIR__ . '/../models/Student.php');
require_once(__DIR__ . '/../models/Book.php');

use App\Controllers\Controller;

class HomeController extends Controller
{

    public function home()
    {
        // Previous Link or Route
        $this->previousURL();

        $students = Student::all();

        return $this->view('student', $students);
    }

    public function createStudent()
    {
//         $con = new PDO("mysql:host=localhost;dbname=soeexam;", "root", "");

//         $sq = $con->prepare("INSERT INTO student (first_name, middle_name, last_name, address, programe, total_qn, symbolNO, corect_qn, marks)
// VALUES ('test', 'test', 'test', 'test', 'test', 1, 2, 3, 4)");

//         $sq->execute();

        
        $student = new Student();

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
