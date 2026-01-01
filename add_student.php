<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

include 'header.php';

include 'config.php';

// Handle form submission
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $roll_no = trim($_POST['roll_no']);
    $class = trim($_POST['class']);

    if (!empty($name) && !empty($roll_no) && !empty($class)) {
        $stmt = $conn->prepare("INSERT INTO students (name, roll_no, class, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param("sss", $name, $roll_no, $class);

        if ($stmt->execute()) {
            $message = '<div class="alert alert-success">✅ Student added successfully!</div>';
        } else {
            $message = '<div class="alert alert-danger">❌ Error: Could not add student.</div>';
        }

        $stmt->close();
    } else {
        $message = '<div class="alert alert-warning">⚠ Please fill all fields.</div>';
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">➕ Add New Student</h2>

    <!-- Message -->
    <?php echo $message; ?>

    <!-- Student Form -->
    <form method="POST" class="p-4 bg-white rounded shadow-sm">
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter student name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Roll Number</label>
            <input type="text" name="roll_no" class="form-control" placeholder="Enter roll number" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Class</label>
            <input type="text" name="class" class="form-control" placeholder="Enter class (e.g. 10A)" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Add Student</button>
    </form>

    <div class="text-center mt-3">
        <a href="dashboard.php" class="btn btn-secondary">⬅ Back to Dashboard</a>
    </div>
</div>

</body>
</html>
