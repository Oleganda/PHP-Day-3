<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Exercise 1
    //Create a for loop which will print your name 5 times on the screen. Do the same with while and do while loop. 
    $name = "Olga";
    for ($i = 0; $i < 5; $i++) {
        echo "<div>" . $name . "</div><br>";
    }

    //Exercise 2
    //Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
    foreach ($array as $i) {
        echo $i . "<br>";
    }

    //Exercise 3

    //Create a function that will have a parameter. 
    //The argument given to that parameter should be an array. The function should return the highest value from the array. 
    //Try to create an array with at least 10 numbers created randomly. 
    //You may want to take a look at the rand() function from PHP.

    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        $arr[] = rand(1, 100);
    }
    function randomNum(array $arr)
    {
        $i = max($arr);
        echo "Max number is: " . $i . "<br>";
    }
    randomNum($arr);

    //Exercise 4

    //Create a PHP program that iterates the integers from 1 to 100.
    //For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". 
    //For numbers that are multiples of both three and five print "Full-Stack".

    $i = 0;
    for ($x = 0; $x < 100; $x++) {
        if ($x % 5 == 0 && $x % 3 == 0) {
            echo "Full-Stack" . "<br>";
        } elseif ($x % 5 == 0) {
            echo "Front-End" . "<br>";
        } elseif ($x % 3 == 0) {
            echo "Back-End" . "<br>";
        } else {
            echo $x . "<br>";
        }
    }


    ?>
</body>

</html>