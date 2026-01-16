<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "blessed_fashion";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed");
}
?>