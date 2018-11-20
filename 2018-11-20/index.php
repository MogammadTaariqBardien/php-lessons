<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions</title>
</head>
<body>

    <form action="index.php" method="post">
    
    <input type="text" name="favcolour" placeholder= "Favourite Colour">
    <input type="submit">
    </form>

    <?php
    $break = "<br>";
    // var_dump($_SESSION);
    // $_SESSION['age'] = 368;
    // unset($_SESSION['age']);
    // echo $_SESSION['age'];

    // session_id();

    // echo session_id();
    // session_id(23412311451);
    // $_SESSION['favcolour'] = 'blue';

    // echo session_id().$break;
    // echo session_cache_expire().$break;

    ?>

    <a href="destroy.php"> KABOOM </a>
    <a href="colours.php"> Colourful thingys </a>

    <?php
    if ($_POST){
        $_SESSION['favcolour'] = $_POST['favcolour'];
    }
    ?>

    
</body>
</html>