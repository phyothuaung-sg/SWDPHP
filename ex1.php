<!-- 
step 1: declare a variable, and assign a number,
step 2: condition (if number/2 == 0, this number is even) // echo
step 3: condition (else , this number is odd) // echo 

-->

<?php

// even or odd
$number = 15; 

if ($number % 2 == 0) {
    echo "$number, <br> This number is even.";
} else {
    echo "$number, <br> Above number is odd.<hr><br><br>";
}

// simple calculator 
$num1 = 22;
$num2 = 4;
$operator = '-'; 
$equal = "=";

echo "$num1";
echo "$operator";
echo "$num2";
echo "$equal";

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Error: Division by zero";
        }
        break;
    default:
        $result = "Error";
        break;
}

echo "$result.<hr> <br><br>";


// Factorial Function
function factorial($num) {
    if ($num <= 0) {
        return "Undefined for zero and negative numbers.";
    }
    $result = 1;
    for ($i = 2; $i <= $num; $i++) {
        $result *= $i;
    }
    echo "The factorial number of $num is, <br>";
    return $result;
    
}

echo factorial(8); 
?>


<?php
    //function type in php
    function greeting($name = "Guest"){
        return "Hello, $name.";
    }
    $result = greeting("John");
    echo "<hr><br><br>Function type in php <br>";
    echo $result;

    // defult value, 
    // typ restriction,
    // scope (local, global).


    // Array
    // 1. Indexed Array
    // 2. Associative Array
    // 3. Multidimensional Array
    echo "<br><hr>";
    $fruits = array ("Apple", "Orange", "Banana");
    echo $fruits[0];

    // foreach
    foreach ($fruits as $fruit)
    echo "<br>";
    echo $fruit;

    $person = array(
        "name" => "John",
        "age" => 30,
        "city" => "Yangon"
    );
    echo "<br><br><hr>";
    echo $person["name"];
    echo "<br><br>";

    // for each
    foreach ($person as $key => $value) {
        echo "<br>";
        echo $key . ":" . $value;
        echo "<br>";
    }

     $mark = array(
        "Aung" => 80,
        "Kyaw Kyaw" => 40,
        "Hla Hla" => 70
    );

    foreach ($mark as $key => $value) {
        if ($value >= 50) {
            echo "<br>";
            echo $key . "Passed";
        } else {
            echo "<br>";
            echo $key . "Failed";
        }
    }

    // Multidimensional Array

    $users = array(
        array("name" => "Aung", "age" => 30, "city" => "Yangon"),
        array("name" => "Maung", "age" => 39, "city" => "Mandalay"),
        array("name" => "Hla", "age" => 40, "city" => "Mon Ywa"),
    );

    foreach($users as $user) {
        echo "<br>";
        echo $user ["name"] . "," . $user["age"] . "," .$user["city"];
    }


?>
