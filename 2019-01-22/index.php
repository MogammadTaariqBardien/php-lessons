<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

        <?php
            $name = "Taariq";
            $age = 22;
            $favFoods = array("Pasta", "Noodles", "Pizza");
            
            echo "Hello my name is " . $name . " and my age is " . $age . " . Currently, my favorite foods are" . $favFoods[0] . "," . $favFoods[1]. ", and " . $favFoods[2] . "." ;

        ?>
</body>
</html>