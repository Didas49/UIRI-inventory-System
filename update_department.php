<?php
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $department_code = $_POST['department_code'];
    $department_name = $_POST['department_name'];
    $department_email = $_POST['department_email'];
    $department_contact = $_POST['department_contact'];

    $sql = "UPDATE department SET department_name=?, department_email=?, department_contact=? WHERE department_code=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $department_name, $department_email, $department_contact, $department_code);

    if ($stmt->execute()) {
        header("Location: department.html"); // Redirect back to the department list
    } else {
        echo "Error updating department: " . $conn->error;
    }
    $stmt->close();
}

$conn->close();
?>
