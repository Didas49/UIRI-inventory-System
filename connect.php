<?php

$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
} else {
    // echo "successfully";
    if (isset($_POST['Submit'])) {

        $name = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT User_Id from login where User_Name='$name' and User_Password='$pass'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>
                alert('Invalid username or password');
                window.location.href = 'login.php';
            </script>";
            exit();
        }
        
    }
}
