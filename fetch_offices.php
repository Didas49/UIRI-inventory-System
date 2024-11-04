<?php
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT office_id,office_name,room_number,office_contact,office_email FROM office";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["office_id"]) . "</td>
                    <td>" . htmlspecialchars($row["office_name"]) . "</td>
                    <td>" . htmlspecialchars($row["room_number"]) . "</td>
                    <td>" . htmlspecialchars($row["office_contact"]) . "</td>
                        <td>" . htmlspecialchars($row["office_email"]) . "</td>
                        <td><a href='edit_offices.php?office_id=" . htmlspecialchars($row["office_id"]) . "'>Edit</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='12'>0 results</td></tr>";
    }

    $conn->close();
}
?>
