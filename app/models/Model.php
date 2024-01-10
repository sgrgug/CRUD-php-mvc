<?php

require_once(__DIR__ . '../../../database/database.php');

trait modelTrait {
    public static function all()
    {
        if(property_exists(get_called_class(), 'tableName'))
        {
            $model = new Database();

            $tableName = static::$tableName;

            $query = "SELECT * FROM $tableName";
            $sql = $model->connectDB()->prepare($query);
            $sql->execute();

            $results = $sql->fetchAll(PDO::FETCH_OBJ);

            return $results;
        } else {
            return [];
        }
    }
}

class Model {
    use modelTrait;

}
