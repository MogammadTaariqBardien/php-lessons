<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Functions/Arrays</title>
</head>
<body>
    
    <?php

    $example = 'where_in_the_world_is_Carmen_Sandiego';
    $break = "<br>";

    // Display everything from the 5th character
    echo substr($example,5).$break;
    // Finding certain things in a string
    echo substr($example, strpos($example,'i'),strpos($example,'d')-strpos($example,'i')+1).$break;
    // Will display everything from the 5th character from the end, while it will display only 2
    echo substr($example, -5, 2).$break;
    // The first 5 will not show and the last 2 will not show as well
    echo substr($example, 5, -2).$break;
    // The function will replace instances of certain characters in a string with a different characters
    echo str_replace('where', 'who', $example).$break;

    // Create an array with strings
    $example_array = array('Toyota', 'BMW', 'Ferrari', 'Hot Wheels');
    // Adding a an array item to a certain postion manually
    $example_array[5] = 'Lambogirni';
    // Display the element at a position
    echo $example_array[0].$break;
    echo $example_array[1].$break;
    echo $example_array[2].$break;
    echo $example_array[3].$break;
    echo $example_array[5].$break;
    echo var_dump($example_array).$break;
    // Loop to display the entire array
    foreach ($example_array as $car) {
        echo "<p>$car<p>";
    }

    // Creating an associative array
    $taariq = array('age' => 21, 'hair' => 'Straight', 'height' => 'Average');
    // To display values from the array
    echo $taariq['age'].$break;
    echo $taariq['hair'].$break;
    echo $taariq['height'].$break;

    // Manually add values to an associative array
    $evan['height'] = 'Tall';
    $evan['age'] = 21;
    $evan['hair'] = 'Curly';

    echo $evan['age'].$break;
    echo $evan['hair'].$break;
    echo $evan['height'].$break;

    // Creating arrays in an array (Multi-Dimensional Arrays)
    $example_array2 = array(
                        array(1,2,3,4,5),
                        array('Jaguar','Opel', 'Fiat'));
    // Manually making an associative array
    $example_array2['people'] = array('Reagan', 'Nicholas', 'Josh');
    var_dump($example_array2).$break;
    // Displaying an Item from an array in an array
    echo $example_array2[1][0].$break;
    // Changing an array item in an array
    $example_array2[1][0] = 'Porche';

    // Creating an associative multi-dimentional array
    $example_array3 = array(
     'numbers' =>   array(1,2,3,4,5),
      'cars' =>  array('Jaguar','Opel', 'Fiat'));

    var_dump($example_array3).$break;
    echo $example_array3['cars'][0];
    
    $example_array4 = array('Taariq', 'Evan', 'Josh', 'Natheer');
    // To sort arrays, NOTE IT DOES NOT CHANGE THE KEYS. It sorts from A - Z
    sort($example_array4);
    var_dump($example_array4);
    // Sorts the array in reverse from Z - A
    rsort($example_array4);
    var_dump($example_array4);

    ?>

</body>
</html>