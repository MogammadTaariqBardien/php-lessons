<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colours Page</title>
</head>
<body>
    <a href="index.php"> Home </a>

    <p> My Favourite colour is <?php echo $_SESSION['favcolour'] ?></p>
</body>
</html>