<?php

require_once(__DIR__ . '../../../database/database.php');

class Model {

    public static function all()
    {
        $model = new Database();

        $query = "SELECT * FROM student";
        $sql = $model->connectDB()->prepare($query);
        $sql->execute();

        $results = $sql->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

}
