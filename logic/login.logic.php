<?php
session_start();
global $connection;
require 'db/mysql.php';

if($_SESSION['loggedIn'] === true) {
    header('Location:index.php');
}

if($_POST["submit"]) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = stripcslashes($email);
    $password = stripcslashes($password);

    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);


    $hashPassword = md5($password);

    if($email && $password) {
        $userExist = "SELECT * FROM users WHERE email='$email' && password='$hashPassword'";

        $result = mysqli_query($connection,$userExist);

        $count = mysqli_num_rows($result);

        $row = mysqli_fetch_assoc($result);

        if($count === 1) {
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['loggedIn'] = true;
            header('Location:index.php');
        } else {
            $error[] = 'Invalid credentials!';
        }

    }
}