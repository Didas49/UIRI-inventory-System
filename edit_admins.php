<?php
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['admin_id'])) {
    $admin_id = $conn->real_escape_string($_GET['admin_id']);

    // Fetch the admin details
    $sql = "SELECT admin_id, admin_name, admin_email, admin_contact FROM administrators WHERE admin_id = '$admin_id'";
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

// Handle form submission for updating the admin
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $new_name = $conn->real_escape_string($_POST['admin_name']);
    $new_email = $conn->real_escape_string($_POST['admin_email']);
    $new_contact = $conn->real_escape_string($_POST['admin_contact']);

    $sql = "UPDATE administrators SET admin_name='$new_name', admin_email='$new_email', admin_contact='$new_contact' WHERE admin_id='$admin_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            window.location.href = 'admin.php';
            alert('Record updated successfully!');
        </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
}

// Handle deletion of the admin
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $sql = "DELETE FROM administrators WHERE admin_id='$admin_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            window.location.href = 'admin.php';
            alert('Admin deleted successfully!');
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
    <link rel="stylesheet" href="edit_admins.css">
    <title>Edit admins</title>
</head>
<body>
    <div class="container">
        <h2>Edit admins</h2>
        <form method="POST">
            <label for="admin_id">admin id:</label>
            <input type="text" id="admin_id" name="admin_id" value="<?php echo htmlspecialchars($row['admin_id']); ?>" readonly><br>

            <label for="admin_name">Admin Name:</label>
            <input type="text" id="admin_name" name="admin_name" value="<?php echo htmlspecialchars($row['admin_name']); ?>"><br>

            <label for="admin_email">Admin Email:</label>
            <input type="email" id="admin_email" name="admin_email" value="<?php echo htmlspecialchars($row['admin_email']); ?>"><br>

            <label for="admin_contact">Admin Contact:</label>
            <input type="text" id="admin_contact" name="admin_contact" value="<?php echo htmlspecialchars($row['admin_contact']); ?>"><br>

            <button type="submit" name="update" onclick="return confirm('Are you sure you want to update this record?');">Update</button>
            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
            <button type="button" name = "button" onclick="window.location.href='admin.php'">Back</button>
            
            <div class="copyright">
                © UIRI INVENTORY MANAGEMENT SYSTEM -sunstudents
            </div>
        </form>
    </div>
</body>
</html>
