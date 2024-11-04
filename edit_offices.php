<?php
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['office_id'])) {
    $office_id = $conn->real_escape_string($_GET['office_id']);

    // Fetch the department details
    $sql = "SELECT office_id, office_name,room_number, office_email, office_contact FROM office WHERE office_id = '$office_id'";
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
    $new_name = $conn->real_escape_string($_POST['office_name']);
    $new_number = $conn->real_escape_string($_POST['room_number']);
    $new_email = $conn->real_escape_string($_POST['office_email']);
    $new_contact = $conn->real_escape_string($_POST['office_contact']);

    $sql = "UPDATE office SET office_name='$new_name', room_number='$new_number',office_email='$new_email', office_contact='$new_contact' WHERE office_id='$office_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            window.location.href = 'office.php';
            alert('Record updated successfully!');
        </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
}

// Handle deletion of the office
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $sql = "DELETE FROM office WHERE office_id='$office_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            window.location.href = 'office.php';
            alert('Office deleted successfully!');
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
    <title>Edit Office</title>
</head>
<body>
    <div class="container">
        <h2>Edit office</h2>
        <form method="POST">
            <label for="office_id">Office Id:</label>
            <input type="text" id="office_id" name="office_id" value="<?php echo htmlspecialchars($row['office_id']); ?>" readonly><br>

            <label for="office_name">office Name:</label>
            <input type="text" id="office_name" name="office_name" value="<?php echo htmlspecialchars($row['office_name']); ?>"><br>

            <label for="office_email">Office Email:</label>
            <input type="email" id="office_email" name="office_email" value="<?php echo htmlspecialchars($row['office_email']); ?>"><br>

            <label for="office_contact">Office Contact:</label>
            <input type="text" id="office_contact" name="office_contact" value="<?php echo htmlspecialchars($row['office_contact']); ?>"><br>

            <button type="submit" name="update" onclick="return confirm('Are you sure you want to update this record?');">Update</button>
            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
            <button type="button" name = "button" onclick="window.location.href='office.php'">Back</button>
            
            <div class="copyright">
                © UIRI INVENTORY MANAGEMENT SYSTEM -sunstudents
            </div>
        </form>
    </div>
</body>
</html>
