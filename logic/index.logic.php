<?php
require 'db/mysql.php';
global $connection;

if($connection){
    $query = 'SELECT * FROM users';
    $result = mysqli_query($connection,$query);


}