<?php
include("connectDatabase.php");
$sql = "CREATE TABLE fiveguys (
    userId int unsigned auto_increment primary key,
    username VARCHAR(30) not null unique,
    email VARCHAR(255) not null,
    content VARCHAR(255) not null,
    commentTime datetime DEFAULT null
)";

if ($conn->query($sql))
    echo("Table created successfully");
else
    echo("Error: " . $conn->error);
?>