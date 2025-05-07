<?php

include 'config.php';
session_start();


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Simple data deletion example
    $stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "<div class='alert alert-danger'>Student deleted successfully.</div>";
    } else {
        $_SESSION['message'] = "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }
    header("Location: show.php"); // Redirect back to form
    exit();



    // Prepare statement to prevent SQL injection
    // $stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
    // $stmt->bind_param("i", $id);

    // if ($stmt->execute()) {
    //     $_SESSION['message'] = "<div class='alert alert-danger'>Student deleted successfully.</div>";
    // } else {
    //     $_SESSION['message'] = "<div class='alert alert-danger'>Error deleting student: " . $stmt->error . "</div>";
    // }

    // $stmt->close();
    // header("Location: show.php"); // Redirect back to form
    // exit();



} else {
    $_SESSION['message'] = "<div class='alert alert-danger'>Invalid request.</div>";
    header("Location: show.php");
    exit();
}
