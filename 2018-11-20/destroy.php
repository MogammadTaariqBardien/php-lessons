<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How to delete a session</title>
</head>
<body>
    
    <?php

    session_unset();
    // Reseting the session contents
    // session_reset();

    if ($_SESSION) {

        echo "There is a session";
    }   else {
        echo "There is no session";
    }

    ?>

    <a href="index.php"> Home </a>
</body>
</html>