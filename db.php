<?php
// MySQL connection example (edit credentials as needed)
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "task1_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully to MySQL!";
?>
