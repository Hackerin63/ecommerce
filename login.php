<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['name'];
            header("Location: admin.php");
            exit();
        } else {
            echo "Invalid password!<a href='login.html'>Retry</a>";
        }
    } else {
        echo "No user found!<a href='register.html'>Go Back for register</a>";
    }
}
?>

