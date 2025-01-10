<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to User System</h1>

        <!-- Sign-Up Form -->
        <form action="signup.php" method="POST">
            <h2>Sign Up</h2>
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit" class="btn">Sign Up</button>
        </form>

        <!-- Login Button -->
        <div class="login-section">
            <h3>Already have an account?</h3>
            <a href="login.php" class="btn">Log In</a>
        </div>
    </div>
</body>
</html>
