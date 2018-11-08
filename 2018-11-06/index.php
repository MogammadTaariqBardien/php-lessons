<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    
    <?php

        $string = "<br>hello again, nice to see you <br>";
        $string2 = "hello again";
        $num1 = 886.6;
        $num2 = 5;
        $break = "<br>";
        $lie = false;
        $truth = true;
        $example = 'TAARIQ';
        $example2 = 'taariqbardien';
        $example3 = 'where in the world is carmen sandiego';
        $example4 = '     where in the world is carmen sandiego     ';
        $example5 = '     where in the world is carmen sandiego     ';
        $example6 = ' what in the world am i typing for this sentance';

        echo strlen($example6).$break;
        echo trim($example5, ' w').$break;
        echo trim($example4).$break;
        print_r($example3);
        var_dump(explode(' ',$example3)).$break;
        echo strpos($example3,'c').$break;
        echo strtoupper($example2).$break;
        echo $example.$break;
        echo strtolower($example).$break;
        echo $lie.$break;
        echo $num1 * $num2.$break;
        echo $num1 / $num2.$break;
        echo $num1 ** $num2.$break; 
        // Double star is to the power of the number
        echo $string;
        echo $string . $string;
        echo 'this is a $string2<br>';
        echo 'this is a '.$string;

        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit vero fugiat voluptatem atque at sit doloremque consequuntur, quam placeat debitis optio repellat reiciendis reprehenderit in cupiditate quos deleniti id voluptatibus. <br>";
        
    ?>

    <p>
    In this page we will be making variables
    </p>


</body>
</html>