<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
</head>
<body>
    <?php

    $number_in_integer = 4;
    $number_in_float  = 2.5;
    var_dump($number_in_float * $number_in_integer);    // Output :  float(10)
    echo "<br>";
    
    // INT_MAX in PHP
    $varIntMax = PHP_INT_MAX;
    echo $varIntMax;    //Output : 9223372036854775807
    echo "<br>";
    // INT_MIN in PHP
    $varIntMin = PHP_INT_MIN;
    echo $varIntMin;    //OUTPUT : -9223372036854775808
    echo "<br>";

    //is_int() function is there to check if the type of the
    //variable is integer or not
    $integerCheck = 7;
    var_dump(is_int($integerCheck));
    echo "<br>";

    $integerCheck2 = 7.1;
    var_dump(is_int($integerCheck2));
    echo "<br>";


    //same is for float like PHP_FLOAT_MAX() and PHP_FLOAT_MIN() functions
    //same like is_int() function of integer we have is_float() function
    //for the float
    $x = 7.1;
    var_dump(is_float($x));
    echo "<br>";

    //  PHP Infinity
    // A numeric value that is larger than PHP_FLOAT_MAX is considered infinite
    $infiniteCheck = 1.9e411;
    var_dump($infiniteCheck);  //Output : float(INF)
    echo "<br>";

    //PHP Numeric string is_numeric() function can be used to
    //find whether a variable is numeric . The function returns
    // true if the variable is a number of a numeric string false otherwise

    $checkNumeric = 2323223;
    var_dump($checkNumeric);
    echo "<br>";

    //PHP Casting strings and floats to integers
    $no_in_float = 32.23;
    $casted_to_int = (int)$no_in_float;
    var_dump($casted_to_int); //output : 32
    echo "<br>";

    //Casting string to int
    $no_int_string = "1234";
    $string_into_int = (int) $no_int_string;
    var_dump($string_into_int);
    



    ?>

</body>
</html>