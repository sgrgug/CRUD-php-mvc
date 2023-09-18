<?php

// data base connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soeexam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

?>
<?php

        
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // MySQL Query to read data
// $query = mysqli_query($conn, "SELECT * FROM student");

// if (!$query) {
//     die("Query failed: " . mysqli_error($conn));
// }

// while ($row = mysqli_fetch_assoc($query)) {
//     echo "Name: " . $row['first_name'] . "<br />";
// }
    ?>