<?php



$db_host = 'localhost'; // Database host
$db_user = 'root';
$db_pass = ''; // Database password
$db_name = 'student_management'; // Database name


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}