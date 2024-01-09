<?php
require_once 'Controller.php';
require_once(__DIR__ . '/../models/Student.php');

use App\Controllers\Controller;

class HomeController extends Controller {

    public function home()
    {

        $d = Student::all();

        echo $this->print($d);



        // $d = new Student();
        // echo $d->tt();
        
        // $std = new Student();
        // echo $this->print($std);
        // $sql = $std->conn->prepare("SELECT * FROM student");
        // $sql->execute();

        // $result = $sql->fetchAll(PDO::FETCH_OBJ);

        // return $this->print($result);
        
        // $data = [
        //     'title' => 'Home page',
        //     'name' => 'John Doe',
        //     'age' => 30,
        // ];

            // print_r($data);

        // return $this->view('home', $data);
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