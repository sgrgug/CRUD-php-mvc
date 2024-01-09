<?php

class Database {

    private $host = "localhost";
    private $dbname = "soeexam";
    private $username = "root";
    private $password = "";

    public function connectDB()
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection Failed" . $e->getMessage();
        }
    }

}

?>