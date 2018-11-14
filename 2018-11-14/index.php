<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loops And Form Handling</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <!-- <?php

    $break = "<br>";
    $drinks = array('brandy' => 'klipdrift','trash' => 'russian bear','tequila' => 'olmeca','cider' => 'hunters','whiskey' => 'jack daniels');

    $chasers = array('jive', 'sprite', 'cranberry juice');

    foreach ($drinks as $key => $drink) {
        echo "<li>";
        foreach ($chasers as $chaser){
            echo $key ." and " . $chaser . "  ";
        }
        echo "</li>";
    }

    ?> -->
    <?php if (!$_POST) { ?>
    <form action="index.php" method="post">
    
    <input type="text" name = "name" placeholder = "name">

    <input type="text" name = "surname" placeholder = "surname">

    <button type="submit">Submit!</button>

    </form>

    <?php } else {?>

    <p> Hello there <?php 
    echo $_POST['name'];
    ?> </p>

    <?php } ?>

</body>
</html>