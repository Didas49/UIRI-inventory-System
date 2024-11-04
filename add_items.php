<?php

$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $item_id = $_POST['Item-ID'];
        $item_name = $_POST['item-Name'];
        $status = $_POST['status'];
        $item_type = $_POST['item-type'];
        $office = $_POST['office'];
        $serial_number = $_POST['Serial-Number'];
        $engraved_number = $_POST['Engraved-Number'];
        $department = $_POST['department'];
        $admin_name = $_POST['Admin-Name'];
        $location = $_POST['location'];
        $user = $_POST['user'];
        $year_of_purchase = $_POST['Year-of-Purchase'];

        $sql = "INSERT INTO items(item_id, item_name, status_of_item, item_type, office, serial_number, engraved_number, department, admin_name, location_site, item_user, year_of_purchase)
                VALUES ('$item_id', '$item_name', '$status', '$item_type', '$office', '$serial_number', '$engraved_number', '$department', '$admin_name', '$location', '$user', '$year_of_purchase')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                alert('Item successfully added! You can proceed to add more items or continue to other sections');
                window.location.href = 'Add_item.php';
                </script>";
            }  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

        $conn->close();
    }
}
?>
