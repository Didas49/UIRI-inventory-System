<?php

$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $department_code = $_POST['department_code'];
        $department_name = $_POST['department_name'];
        $department_email = $_POST['department_email'];
        $department_contact = $_POST['department_contact'];
        $department_password = $_POST['department_password'];
        

        $sql = "INSERT INTO department(department_code, department_name, department_email,department_contact,department_password )
                VALUES ('$department_code','$department_name','$department_email','$department_contact','$department_password')";

        
    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Department successfully added! You can proceed to add more departments or go back to the previous page by clicking the Back button in the form');
            window.location.href = 'create_department.php';
        </script>";
    }  else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $conn->close();
    }
}
?>
