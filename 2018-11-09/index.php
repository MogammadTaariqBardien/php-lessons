<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $break = "<br>";
    $example_array = array('Taariq','Evan', 'Josh', 'Gcobisa');
    $example_array[7] = 'Natheer';
    $array_to_string = implode(', ', $example_array);
    var_dump($example_array);
    echo $array_to_string;

    $back_to_the_array = explode(' ',$array_to_string);
    var_dump($back_to_the_array).$break;
    echo count($example_array).$break;

    echo end($example_array).$break;
    echo key($example_array).$break;

    $example_array2 = array('Taariq','Evan', 'Josh', 'Gcobisa','a','b','c',1,2,3,4);
    sort($example_array2);
    var_dump($example_array2);
    rsort($example_array2);
    var_dump($example_array2);
    echo end($example_array2).$break;
    echo key($example_array2).$break;

    echo array_search('Josh', $example_array2).$break;

    $example_array3 = array('Taariq','Evan', 'Josh');
    array_push($example_array3, 'Natheer');
    echo end($example_array3).$break;
    echo key($example_array3).$break;
    // $example_array3[count($example_array3)] = 'Bob';
    // echo key($example_array3);
    array_unshift($example_array3,'Taufeeq');
    echo $example_array3[0];
    var_dump($example_array3);

    array_shift($example_array3);
    var_dump($example_array3);

    array_pop($example_array3);
    var_dump($example_array3);

    var_dump(array_slice($example_array3, 2));
    
    $example_array4 = array('Gedeon', 'Natheer', 'Reagan', 'Michael', 'Gcobisa', 'Evan', 'Taariq', 'Josh', 'Taufeeq', 'JP', 'X', 'Tyrone', 'Urick', 'Marlon', 'Kaylem', 'Jesse');

    var_dump(array_slice($example_array4, -2));
    var_dump($example_array4);
    var_dump(array_slice($example_array4, 3, 2, true));
    var_dump(array_slice($example_array4, 3, -2, true));

    $replace = array('Nate', 'Devon', 'Garth', 'Emma');
    $emperor_of_the_class = "Nicholas";
    $chunk = array_splice($example_array4, 3, -2, $replace);
    var_dump($chunk);
    var_dump($example_array4);

    unset($example_array4[3]);
    var_dump($example_array4);

    echo (3>4) + true.$break;
    echo (3>4) + (4>3).$break;
    echo (3>=3).$break;

    $i = 4;
    $age = 26;
    $logged_in = false;
    $name = 'bob';

    if (($i > 3 || $age > 23) && $logged_in){
        echo 'True'.$break;
    } else {
        echo 'Nay'.$break;
    }

    if ($name == 'Bob'){
        echo 'True'.$break;
    } else {
        echo 'Nay'.$break;
    }

    if ($name === 'bob') {
        echo 'yay'. ' ' . $name.$break;
    }   else {
        echo 'nay'.$break;
    }

    $bob = array( 'car' => array('model' => 'm8', 'make' => 'BMW'), 'pets' => 'cat');

    if ($bob['car']['make'] == 'BMW') {
        echo 'yay'.$break;
        if ($bob['pets'] == 'cat'){
            echo 'achoo'.$break;
        }
    } else {
        echo 'nay'.$break;
    }

    $light = 'green';
    $light = array('green', 'red','yellow', 'blue');

    switch ($light[rand(0,3)]) {
        case 'red':
            echo 'stop'.$break;
            break;

        case 'yellow':
            echo 'slow down'.$break;
            break;

        case 'green':
            echo 'go'.$break;
            break;
        
        default:
            echo 'treat as 4-way stop'.$break;
            break;
    }

    $class_size = count($example_array4);
    for ($i = 0; $i < $class_size; $i++) {
        $length = count($example_array4);
        $chosen = rand(0, $length-1);
        $output = array_splice($example_array4, $chosen, 1);
        echo $output[0].$break;
    }
    $b = 0;
    do {
        echo $b.$break;
        echo 'I live again'.$break;
        $b++;

    } while ($b <= 10);

    $a = 0;
    while ($a <= 10) {
        echo 'I am working'.$break;
        $a++;
    }

    ?>
</body>
</html>