<?php
// DB Connection
include 'config.php';


session_start();
if (isset($_SESSION['message'])) {
    $message = '';
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // Clear message after showing once
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex">
                <h4 class="mb-0">All Students</h4>

                <span style="margin-left: auto;">
                    <a href="index.php" class="btn btn-light float-end">Add Student</a>
                </span>
            </div>
            <!-- Show success/error message -->
            <div class="card-body">
                <?php if (!empty($message)) echo $message; ?>
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Simple fetch Example

                        $query = "SELECT * FROM students ORDER BY id DESC";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                        ?> <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['course']; ?></td>
                                    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                </tr>

                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>No students found.</td></tr>";
                        }


                        // prepared statement example sql injection prevention
                                    // $stmt = $conn->prepare("SELECT * FROM students ORDER BY id DESC");
                                    // $stmt->execute();
                                    // $result2 = $stmt->get_result();
                                    
                        ?>

                         <?php
                            //             if ($result2->num_rows > 0) {
                            //                 while ($row = $result2->fetch_assoc()) {
                            //                     echo "<tr>
                            //     <td>{$row['id']}</td>
                            //     <td>{$row['name']}</td>
                            //     <td>{$row['email']}</td>
                            //     <td>{$row['phone']}</td>
                            //     <td>{$row['course']}</td>
                            //     <td>
                            //         <a href='edit.php?id={$row['id']}'>Edit</a> |
                            //         <a href='delete.php?id={$row['id']}'>Delete</a>
                            //     </td>
                            // </tr>";
                            //                 }
                            //             } else {
                            //                 echo "<tr><td colspan='6'>No students found</td></tr>";
                            //             }
                            ?>





                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>