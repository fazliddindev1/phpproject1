<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt password

    // Insert user into the "users" table
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
        echo "Sign-Up Successful! <a href='login.php'>Log In</a>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
