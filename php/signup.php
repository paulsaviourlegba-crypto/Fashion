<?php
include "db.php";

$fullname = $_POST['fullname'];
$email    = $_POST['email'];
$password = $_POST['password'];

$hashed = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (fullname, email, password)
          VALUES ('$fullname', '$email', '$hashed')";

if (mysqli_query($conn, $query)) {
    header("Location: ../signin.html");
} else {
    echo "Registration failed!";
}
?>