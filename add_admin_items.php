<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create_department.css">
    <title>Add Admin</title>
    <link rel="stylesheet" href="create_department.css">
    <title>Add Department</title>
</head>
<body>
    <div class="container">
        <h2>Add Admin</h2>
        <form action="add_admin.php" method="POST">
            <label for="admin_id">Admin-ID:</label>
            <input type="text" id="admin_id" name="admin_id" placeholder="Admin-ID" required><br>

            <label for="admin_name">Admin Name:</label>
            <input type="text" id="admin_name" name="admin_name" placeholder="Admin Name" required><br>

            <label for="admin_contact">Admin Contact:</label>
            <input type="text" id="admin_contact" name="admin_contact" placeholder="Admin Contact"><br>

            <label for="admin_email">Admin Email:</label>
            <input type="email" id="admin_email" name="admin_email" placeholder="Admin Email"><br>

            <label for="admin_password">Admin Password:</label>
            <input type="password" id="admin_password" name="admin_password" placeholder="Admin Password"><br>

            <button type="submit">Add Admin</button>
            <button type="button" onclick="window.location.href='admin.php'">Back</button>
            <div class="copyright">&copy; UIRI INVENTORY MANAGEMENT SYSTEM
        <span>- sunstudents</span>
    </div>
        </form>
    </div>
</body>
</html>
