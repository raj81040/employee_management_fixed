<?php
include 'db.php';

$search = $_GET['search'] ?? '';
$result = $conn->query("SELECT * FROM employees WHERE name LIKE '%$search%' OR department LIKE '%$search%'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Employee</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .search-results p {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-primary text-center">Search Employee</h2>

    <form method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Enter name or department" value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </form>

    <div class="search-results">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <p>
                <a href="employee_details.php?id=<?php echo $row['id']; ?>" class="text-dark fw-bold">
                    <?php echo $row['name']; ?> - <?php echo $row['department']; ?>
                </a>
            </p>
        <?php endwhile; ?>
    </div>

    <a href="dashboard.php" class="btn btn-secondary w-100 mt-3">Back to Dashboard</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
