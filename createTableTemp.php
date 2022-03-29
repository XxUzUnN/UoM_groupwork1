<?php
include("connectDatabase.php");
$sql = "CREATE TABLE temp (
    facilityId int unsigned auto_increment primary key,
    facilityName VARCHAR(30) not null unique,
    facilityType VARCHAR(255) not null,
    facilityAddress VARCHAR(255) not null,
    facilityWebsite VARCHAR(255) not null,
    facilityTel VARCHAR(20)
)";

if ($conn->query($sql))
    echo("Table created successfully");
else
    echo("Error: " . $conn->error);
?>