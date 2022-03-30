<?php
include("connectDatabase.php");
$sql = "CREATE TABLE Dish (
    dishId int unsigned auto_increment,
    dishName VARCHAR(50) not null unique,
    dishIngredients VARCHAR(255) not null,
    facilityId int unsigned,
    PRIMARY KEY (dishId),
    FOREIGN KEY (facilityId) REFERENCES Facility(facilityId)
)";

if ($conn->query($sql))
    echo("Table created successfully");
else
    echo("Error: " . $conn->error);
?>