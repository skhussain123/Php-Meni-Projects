<?php

include 'config.php';
session_start();


//update student details
if (isset($_POST['btnupdate'])) {
    $id = $_GET['id'];
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $phone = $_POST['upassword'];
    $course = $_POST['ucourse'];

    
    // Prepare an update statement in a secure way to prevent SQL injection
    $stmt = $conn->prepare("UPDATE students SET name=?, email=?, phone=?, course=? WHERE id=?");
    $stmt->bind_param("ssssi", $name, $email, $phone, $course, $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "<div class='alert alert-success'>Student updated successfully.</div>";
    } else {
        $_SESSION['message'] = "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }
    header("Location: show.php"); // Redirect back to form
    exit();

    $stmt->close();
} else {
    $_SESSION['message'] = "<div class='alert alert-danger'>Invalid request.</div>";
}
$conn->close();
