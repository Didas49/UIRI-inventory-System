<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="sidekick">
            <img src="login.jpg" alt="login pik">
        </div>
        <form action="connect.php" method="POST" >
            <h2>Please Login</h2>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="Submit">Login</button>
        </form>
    </div>
</body>
</html>