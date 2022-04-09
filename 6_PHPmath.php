<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math</title>
</head>
<body>
    <?php 


    // a simple math function is pi() . It simply returns 
    //the value of pi which is 3.14.....
    echo (pi());    //output: 3.1415926535898
    echo "<br>";


    //PHP min() and max() functions are used to find out
    //the minimum and maximum function in a list of argument
    echo (min( 0, 12 ,23, -12 , 32));  //OUTPUT : -12
    echo "<br>";
    echo (max(0, 12 ,23, -12 , 32));   //OUTPUT: 32
    echo "<br>";

    //PHP absolute function gives us the absolute or positive 
    //value of a number
    echo (abs(1 -33)); //it should be -32 but as we have used absolute 
                      // so its value become 32
                      //OUTPUT : 32;

    echo "<br>";

    //sqrt() function in PHP is there to return the square root
    //of a number
    echo (sqrt(64));       //output: 8
    echo "<br>";

    //round() function rounds the floating number to its nearest integer
    echo (round(0.60));     //output: 1
    echo "<br>";

    echo (round(0.49));     //output: 0;
    echo "<br>";

    //random numbers
    echo (rand());  //output chamges each time we refresh the page
    echo "<br>";
    //to work in a bounded range we can use min and max parameters in rand()
    echo (rand(1 , 6));     //Dice ban gya hihi

    //there are more math references but for now it is sufficient for me to have 
    //a basic understanding of the PHP MATH REFERENCES.
    ?>
</body>
</html>