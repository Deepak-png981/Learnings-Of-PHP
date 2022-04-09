<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <?php
    // PHP has over one thousand built in functions that 
    //can be easily called from here
    //We were be focusing more on user defined funcions in this file
    //Basic functions we know , how to call a function etc
    function HelloPrintMachine(){
        echo "Hello World printed by HelloPrintMachine() function";
    }
    HelloPrintMachine();


    // Passing an argument through the function
    function familyName($fname){
        echo "$fname <br>";
    }
    familyName("Deepak");
    familyName("Deepak's Brother");
    familyName("Deepak's Sister");
    familyName("Deepak's COOLNEESSSSSSSSSSSSSSSSSSS");  //KIDDING
    // here we passed only one argument now we are going to 
    //pass two argument
    function familyName2($fname , $year){
        echo "$fname . Born in $year <br>";
    }
    familyName("Deepak", "1975");   //fake DOB
    familyName("Stolen", "1978");
    familyName("Kim john unn ", "1983");    //uffffhh 


    // default argument
    function setHeight(int $minHeight = 20){
        echo "The height is : $minHeight <br>";
    }
    setHeight(232);     //output : 232
    setHeight();        //Default argument will work and 
                        //the output will be : 20;

    // in PHP we can also use type declaration of the return 
    //and also the return type can be different from the argument
    //type
    function addNumbers(float $a , float $b) : int{
        return $a + $b;
    }
    echo addNumbers(1.2 , 5.2);
    echo "<br>";

    // Passing arguments by Reference
    function addWithReference($a , $b , &$value){
        $value = $a + $b;
    }
    $value = 0;
    addWithReference(5 ,5 , $value);
    echo $value;    //output 10







    ?>
</body>
</html>