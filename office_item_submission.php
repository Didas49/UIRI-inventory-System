<?php

$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $office_id = $_POST['office_id'];
        $office_name = $_POST['office_name'];
        $room_number = $_POST['room_number'];
        $office_contact = $_POST['office_contact'];
        $office_email = $_POST['office_email'];
        
        $sql = "INSERT INTO office (office_id, office_name, room_number, office_contact, office_email)
                VALUES ('$office_id', '$office_name', '$room_number', '$office_contact', '$office_email')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('Office successfully added! Proceed to add more offices or click back button to go to the previous menu');
                window.location.href = 'add_admin_items.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $conn->close();
    }
    
}
?>
