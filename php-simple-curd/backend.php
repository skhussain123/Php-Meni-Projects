<?php
session_start();
include 'config.php';

if (isset($_POST['btnsave'])) {
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $phone = $_POST['upassword'];
    $course = $_POST['ucourse'];

    $sql = "INSERT INTO students (name, email, phone, course) 
            VALUES ('$name', '$email', '$phone', '$course')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "<div class='alert alert-success'>Student added successfully.</div>";
    } else {
        $_SESSION['message'] = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }

    header("Location: index.php"); // Redirect back to form
    exit();
}


