<?php
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT admin_id, admin_name, admin_email, admin_contact FROM administrators";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["admin_id"]) . "</td>
                    <td>" . htmlspecialchars($row["admin_name"]) . "</td>
                    <td>" . htmlspecialchars($row["admin_email"]) . "</td>
                    <td>" . htmlspecialchars($row["admin_contact"]) . "</td>
                    <td><a href='edit_admins.php?admin_id=" . htmlspecialchars($row["admin_id"]) . "'>Edit</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='12'>0 results</td></tr>";
    }

    $conn->close();
}
?>
