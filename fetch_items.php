<?php
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT item_id, item_name, status_of_item, item_type, office, serial_number, engraved_number, department, admin_name, location_site, item_user, year_of_purchase FROM items";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["item_id"]) . "</td>
                    <td>" . htmlspecialchars($row["item_name"]) . "</td>
                    <td>" . htmlspecialchars($row["status_of_item"]) . "</td>
                    <td>" . htmlspecialchars($row["item_type"]) . "</td>
                    <td>" . htmlspecialchars($row["office"]) . "</td>
                    <td>" . htmlspecialchars($row["serial_number"]) . "</td>
                    <td>" . htmlspecialchars($row["engraved_number"]) . "</td>
                    <td>" . htmlspecialchars($row["department"]) . "</td>
                    <td>" . htmlspecialchars($row["admin_name"]) . "</td>
                    <td>" . htmlspecialchars($row["location_site"]) . "</td>
                    <td>" . htmlspecialchars($row["item_user"]) . "</td>
                    <td>" . htmlspecialchars($row["year_of_purchase"]) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='12'>0 results</td></tr>";
    }

    $conn->close();
}
?>
