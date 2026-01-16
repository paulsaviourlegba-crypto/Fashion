<?php
session_start();
include "db.php";

$email    = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['fullname'];
    header("Location: ../index.html");
} else {
    echo "Invalid email or password!";
}
?>