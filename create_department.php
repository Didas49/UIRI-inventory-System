<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create_department.css">
    <title>Add Department</title>
</head>

<body>
    <div class="container">
        
        <h2>Add Department</h2>
        
        <form action="add_department.php" method="POST">
            <label for="department_code">Department Code:</label>
            <input type="text" id="department_code" name="department_code" placeholder="Department code" required><br>

            <label for="department_name">Department Name:</label>
            <input type="text" id="department_name" name="department_name" placeholder="Department Name" required><br>

            <label for="department_email">Department Email:</label>
            <input type="email" id="department_email" name="department_email" placeholder="Department Email Address"><br>

            <label for="department_contact">Department Contact:</label>
            <input type="text" id="department_contact" name="department_contact" placeholder="Department Contact"><br>

            <label for="department_password">Department Password:</label>
            <input type="text" id="department_password" name="department_password" placeholder="Department Password"><br>

            <button type="submit">Create Department</button>
            <button type="button" onclick="window.location.href='department.php'">Back</button>
            
            <div class="copyright">
                © UIRI INVENTORY MANAGEMENT SYSTEM -sunstudents
            </div>
        </form>
    </div>
</body>

</html>
