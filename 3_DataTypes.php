<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <?php
    //string in PHP
    $string = "Hello World";
    echo $string;
    echo "<br>";
    
    //Integer
    $x = 343;
    echo $x;
    echo "<br>";
    //var_dump() function returns the data type and value
    var_dump($x);

    echo "<br>";
    
    //Float data type
    $float = 23.232;
    var_dump($float);
    echo "<br>";
    //PHP boolean
    $sahi = true;
    $galat = false;
    var_dump($sahi);
    echo "<br>";
    //PHP array 
    $arrayDeclaration = array("Hello" , "Hi" , "Hola");
    var_dump($arrayDeclaration);
    echo "<br>";
    
    // Object in PHP
    class Car {
        public $color;
        public $model;
        // creating the constructor of the class
        public function __construct($model , $color){
            $this->model = $model;
            $this->color = $color;
        }
        public function printMessage(){
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
    $myCar = new Car("Volvo" , "Blue");
    echo $myCar -> printMessage();
    echo "<br>";
    $mySecondCar = new Car("Ferrari" , "RED");
    echo $mySecondCar -> printMessage();
    echo "<br>";


    // NULL
    $nulla = "Hello World";
    $nulla = null;
    var_dump($nulla);

    ?>
</body>
</html>