<?php
session_start();
$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // Clear message after showing once
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex">
                <h4>Add Student</h4>

                <span style="margin-left: auto;">
                    <a href="show.php" class="btn btn-light float-end">View Students</a>
                </span>
            </div>
            <div class="card-body">

                <!-- Show success/error message -->
                <?php if (!empty($message)) echo $message; ?>

                <form action="backend.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="uname" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="uemail" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="upassword" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" name="ucourse" required>
                    </div>
                    <button type="submit" name="btnsave" class="btn btn-success">Add Student</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>