<?php
session_start();
global $connection;
require 'db/mysql.php';

if($_SESSION['loggedIn'] === true) {
    header('Location:index.php');
}

if($_POST["submit"]) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $fullname = stripcslashes($fullname);
    $email = stripcslashes($email);
    $password = stripcslashes($password);

    $fullname = mysqli_real_escape_string($connection,$fullname);
    $email = mysqli_real_escape_string($connection,$email);
    $password = mysqli_real_escape_string($connection,$password);


    $hashPassword = md5($password);

    if($fullname && $email && $password) {
        $userExist = "SELECT * FROM users WHERE email='$email'";

        $result = mysqli_query($connection,$userExist);

        $count = mysqli_num_rows($result);

        if($count > 0) {
            $error[] = "Email already used!";
        }

        $query = "INSERT INTO users(username,email,password) VALUES('$fullname','$email','$hashPassword')";

        $result = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($result)) {
            $email = $row['$email'];
        }

        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['loggedIn'] = true;
        header('Location:index.php');
    }
}
