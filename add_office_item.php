<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_office.css">
    
    <title>Add Office Item</title>
</head>
<body>
    <div class="container">
        <h2>Add Office Item</h2>
        <form action="office_item_submission.php" method="POST">
            <label for="office_id">Office-ID:</label>
            <input type="text" id="office_id" name="office_id" placeholder="Office-ID" required><br>

            <label for="office_name">Office Name:</label>
            <input type="text" id="office_name" name="office_name" placeholder="Office Name" required><br>

            <label for="room_number">Room Number:</label>
            <input type="text" id="room_number" name="room_number" placeholder="Room Number"><br>

            <label for="office_contact">Office Contact:</label>
            <input type="text" id="office_contact" name="office_contact" placeholder="Office Contact"><br>

            <label for="office_email">Office Email Address:</label>
            <input type="email" id="office_email" name="office_email" placeholder="Office Email Address"><br>
            
            <button type="submit">Create Office</button>
            <button type="button" onclick="window.location.href='office.php'">Back</button>
            
            <div class="copyright">&copy; UIRI INVENTORY MANAGEMENT SYSTEM
        </form>
    </div>

    
        <span>- sunstudents</span>
    </div>
</body>
</html>
