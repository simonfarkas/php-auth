<?php

// Connect to db
$connection = mysqli_connect("localhost", "root", "root", "project");

// Check if db is connected
if (!$connection) {
    $error[] = "Database not connected";
}

?>