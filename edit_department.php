<?php
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['department_code'])) {
    $department_code = $conn->real_escape_string($_GET['department_code']);

    // Fetch the department details
    $sql = "SELECT department_code, department_name, department_email, department_contact FROM department WHERE department_code = '$department_code'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}

// Handle form submission for updating the department
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $new_name = $conn->real_escape_string($_POST['department_name']);
    $new_email = $conn->real_escape_string($_POST['department_email']);
    $new_contact = $conn->real_escape_string($_POST['department_contact']);

    $sql = "UPDATE department SET department_name='$new_name', department_email='$new_email', department_contact='$new_contact' WHERE department_code='$department_code'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            window.location.href = 'department.php';
            alert('Record updated successfully!');
        </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
}

// Handle deletion of the department
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $sql = "DELETE FROM department WHERE department_code='$department_code'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            window.location.href = 'department.php';
            alert('Record deleted successfully!');
        </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit_department.css">
    <title>Edit Department</title>
</head>
<body>
    <div class="container">
        <h2>Edit Department</h2>
        <form method="POST">
            <label for="department_code">Department Code:</label>
            <input type="text" id="department_code" name="department_code" value="<?php echo htmlspecialchars($row['department_code']); ?>" readonly><br>

            <label for="department_name">Department Name:</label>
            <input type="text" id="department_name" name="department_name" value="<?php echo htmlspecialchars($row['department_name']); ?>"><br>

            <label for="department_email">Department Email:</label>
            <input type="email" id="department_email" name="department_email" value="<?php echo htmlspecialchars($row['department_email']); ?>"><br>

            <label for="department_contact">Department Contact:</label>
            <input type="text" id="department_contact" name="department_contact" value="<?php echo htmlspecialchars($row['department_contact']); ?>"><br>

            <button type="submit" name="update" onclick="return confirm('Are you sure you want to update this record?');">Update</button>
            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
            <button type="button" name = "button" onclick="window.location.href='department.php'">Back</button>
            
            <div class="copyright">
                © UIRI INVENTORY MANAGEMENT SYSTEM -sunstudents
            </div>
        </form>
    </div>
</body>
</html>
