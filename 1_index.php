<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <div class="class">
        This is my first lecture.
    </div> 
    <!-- Using PHP -->
    <!-- PHP is not a case sensitive language -->
    <?php
    echo "Now this is written using PHP";
    print("Printed using print");
    
    //creating variables in PHP
    $variable1 = 2;
    $variable2 = 5;
    //For new line 
    echo "<br>";
    echo "Sum of the variable created using PHP is : ";
    echo $variable1 + $variable2;
    // print($variable1 + $variable2)


    //operators in PHP
    // Arithemetic operator
    echo "<br>";
    echo "The value of variable 1 + variable2 is : ";
    echo $variable1 + $variable2;
    echo "<br>"; 

    //Assignment operator
    $newVar = $variable1;
    echo "The value of newVar is : ";
    echo $newVar;
    echo "<br>";
    $newVarPlus = 1;
    $newVarPlus += $newVar;
    echo "newVarPlus = ";
    echo $newVarPlus;
    
    echo "<br>";

    //comparison operators 
    echo "The value of 1 == 4 is : ";
    echo var_dump(1 == 4);
    echo "<br>";
    //Increament/Decreament operator
    //Post Increment
    echo $variable1++;
    echo "<br>";
    //Post decrement
    echo $variable2--;
    echo "<br>";
    //Pre Increment
    echo ++$variable1;
    echo "<br>";
    //Pre decremenet
    echo --$variable2;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $txt = "PHP IS AWESOME";
    echo $txt;
    echo "<br>";
    echo "I LOVE PHP AND $txt";

    //Variable names are case sensitive;
    ?>
    

</body>
</html>