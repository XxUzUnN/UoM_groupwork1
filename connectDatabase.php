<?php
$servername = "dbhost.cs.man.ac.uk";
$username = "t56091yd";
$password = "12345687";
$db = "2021_comp10120_r4";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn)
    die("connection failed: " . mysqli_connect_error());
echo ("Connected to: " . $db);
?>