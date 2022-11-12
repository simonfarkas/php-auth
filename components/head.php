<?php
    session_start();
    if($_SESSION['email']) {
        $email = $_SESSION['email'];
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header>
    <div class="bg-blue-800 py-4 px-8 text-white">
        <div class="flex flex-row justify-between items-center">
            <div>
                <a href="../index.php">
                    <h1 class="text-2xl">LOGO</h1>
                </a>
            </div>

            <?php
            if($email) {
                echo
                "<div class='space-x-4'>
                    <span>$email</span>
                    <button class='bg-white text-black py-2 px-4 rounded-md'><a href='../logout.php'>Log Out</a></button>
                </div>";
            } else {
                echo "<div class='space-x-2'>
                <a href='../signin.php'>Sign In</a>
                <a href='../signup.php'>Sign Up</a>
            </div>";
            }
            ?>
        </div>
    </div>
</header>
<main class="max-w-lg mx-auto">

