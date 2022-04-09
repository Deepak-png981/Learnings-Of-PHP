<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>

    <?php
    // To create a constant in PHP we use define() function
    // define(name , value)
    //no dollar sign is needed to create constant in PHP using define
    define("DEEPAK" , 1);
    echo DEEPAK;
    echo "<br>";

    //Constant array in PHP
    define("cars" , ["Alfa Romeo" , "BMW" , "Toyota"]);
    echo cars[2]; //output: Toyota
    echo "<br>";
    //Constants are global and can be used across the gloab
    define("Hero" , "Hero to Hero hota hai" );
    function checkHero(){
        echo Hero;
    }
    checkHero();



    ?>



</body>
</html>