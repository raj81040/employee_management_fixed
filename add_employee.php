<?php
include 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $position = $_POST['position'];

    $sql = "INSERT INTO employees (name, department, position) VALUES ('$name', '$department', '$position')";

    if ($conn->query($sql) === TRUE) {
        $message = "<div class='alert alert-success'>Employee added successfully! <a href='dashboard.php' class='alert-link'>Back to Dashboard</a></div>";
    } else {
        $message = "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-primary text-center">Add Employee</h2>

    <?php echo $message; ?>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Employee Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Employee Name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Department</label>
            <input type="text" name="department" class="form-control" placeholder="Enter Department">
        </div>

        <div class="mb-3">
            <label class="form-label">Position</label>
            <input type="text" name="position" class="form-control" placeholder="Enter Position">
        </div>

        <button type="submit" class="btn btn-success w-100">Add Employee</button>
    </form>

    <a href="dashboard.php" class="btn btn-secondary w-100 mt-3">Back to Dashboard</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
