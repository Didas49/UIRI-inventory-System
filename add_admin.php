<?php

session_start();
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $admin_id = $_POST['admin_id'];
        $admin_name = $_POST['admin_name'];
        $admin_contact = $_POST['admin_contact'];
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];

        $sql = "INSERT INTO administrators (admin_id, admin_name, admin_contact, admin_email, admin_password)
                VALUES ('$admin_id', '$admin_name','$admin_contact','$admin_email', '$admin_password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('Admin successfully added! Proceed to add more admins or click back button to go to the previous menu');
                window.location.href = 'add_admin_items.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $conn->close();
    }
}
?>
