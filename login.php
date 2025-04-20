<?php
session_start();

// Hardcoded user for demo
$valid_user = 'romaez';
$valid_pass = 'secret123';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_user && $password === $valid_pass) {
        $_SESSION['user'] = $username;
        header("Location: users.php");
        exit();
    } else {
        header("Location: index.html?error=Invalid+credentials");
        exit();
    }
}
?>
