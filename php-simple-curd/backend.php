<?php
session_start();
include 'config.php';

if (isset($_POST['btnsave'])) {
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $phone = $_POST['upassword'];
    $course = $_POST['ucourse'];

    //Simple data insertion example
    $sql = "INSERT INTO students (name, email, phone, course) 
            VALUES ('$name', '$email', '$phone', '$course')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "<div class='alert alert-success'>Student added successfully.</div>";
    } else {
        $_SESSION['message'] = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }

    // Prepared statement to prevent SQL injection
    // $stmt = mysqli_prepare($conn, "INSERT INTO students (name, email, phone, course) VALUES (?, ?, ?, ?)");

    // if ($stmt) {
    //     mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $course);

    //     if (mysqli_stmt_execute($stmt)) {
    //         $_SESSION['message'] = "<div class='alert alert-success'>Student added successfully.</div>";
    //     } else {
    //         $_SESSION['message'] = "<div class='alert alert-danger'>Execution Error: " . mysqli_stmt_error($stmt) . "</div>";
    //     }

    //     mysqli_stmt_close($stmt);
    // } else {
    //     $_SESSION['message'] = "<div class='alert alert-danger'>Prepare Error: " . mysqli_error($conn) . "</div>";
    // }



    header("Location: index.php"); // Redirect back to form
    exit();
}
