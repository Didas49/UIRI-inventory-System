 <?php
$conn = new mysqli("localhost", "root", "", "inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT department_code, department_name, department_email, department_contact FROM department";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["department_code"]) . "</td>
                    <td>" . htmlspecialchars($row["department_name"]) . "</td>
                    <td>" . htmlspecialchars($row["department_email"]) . "</td>
                    <td>" . htmlspecialchars($row["department_contact"]) . "</td>
                    <td><a href='edit_department.php?department_code=" . htmlspecialchars($row["department_code"]) . "'>Edit</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>0 results</td></tr>";
    }

    $conn->close();
}
?>
