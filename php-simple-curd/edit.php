<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Edit Student</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex">
                <h4>Edit Student</h4>
                <span style="margin-left: auto;">
                    <a href="show.php" class="btn btn-light float-end">View Students</a>
                </span>
            </div>
            <div class="card-body">
                <?php

                // Check if 'id' parameter is passed in the URL
                if (!isset($_GET['id'])) {
                    // Redirect back to the student list page or any other page
                    header("Location: show.php");
                    exit();
                }


                include 'config.php';
                session_start();

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    //Simple fetch Example
                    $query = "SELECT * FROM students WHERE id = $id";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);

                    //prepare statement to prevent SQL injection
                    // $stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
                    // $stmt->bind_param("i", $id);
                    // $stmt->execute();
                    // $result2 = $stmt->get_result();
                    // $row = $result2->fetch_assoc();
                }
                ?>
                <form action="update.php?id=<?php echo $id; ?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="uname" value="<?php echo $row['name']; ?>" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="uemail" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label
">Phone Number</label>
                        <input type="text" class="form-control" name="upassword" value="<?php echo $row['phone']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" name="ucourse" value="<?php echo $row['course']; ?>" required>
                    </div>
                    <button type="submit" name="btnupdate" class="btn btn-success">Update Student</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
</body>

</html>