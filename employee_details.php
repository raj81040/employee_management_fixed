<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM employees WHERE id=$id");
$employee = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>

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
            text-align: center;
        }
        .btn-custom {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-primary"><?php echo $employee['name']; ?></h2>
    <p class="fw-bold">Department: <span class="text-secondary"><?php echo $employee['department']; ?></span></p>
    <p class="fw-bold">Position: <span class="text-secondary"><?php echo $employee['position']; ?></span></p>

    <a href="dashboard.php" class="btn btn-secondary btn-custom mt-3">Back to Dashboard</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
