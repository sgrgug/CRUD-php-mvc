<?php

require_once "../../database/config.php";

class Model
{
    public function __construct()
    {
        $query = "SELECT * FROM student";

        $result = $conn->query($query);

        if (!$result) {
          die("Query failed: " . $mysqli->error);
        }

        while ($row = $result->fetch_assoc())
        {
          echo $row['first_name'];
          echo "<br />";
        }
    }
}
