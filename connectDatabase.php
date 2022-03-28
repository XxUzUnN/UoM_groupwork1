<?php
$servername = "localhost";
$username = "root";
$password = "12345687";
$db = "mmyyddbb";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn)
    die("connection failed: " . mysqli_connect_error());
echo ("Connected to: " . $db);
?>