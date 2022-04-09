<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional Operator</title>
</head>
<body>
    
    <?php
    

    $t = date("H");
    if($t < 20){
        echo "Have a good day";
    }
    else{
        echo "Have a good night";
    }
    echo "<br>";

    $time = date("g");
    if($time <= 20){
        echo $time;
    }
    else {
        echo "Time is : ";
        echo $time;
    }
    echo "<br>";

    // Switch statement
    $fav_colour = "Blue";
    switch($fav_colour){
        case "Red":
        echo "Your favorite colour is RED";
        break;
        case "Blue":
        echo "Your favorite colour is Blue";
        break;
        case "Green":
        echo "Your favorite colour is Green";
        break;
        default:
        echo "Your favourite colour is neither Red , Blue , nor Green!!";

    }

    echo "<br>";

    // PHP LOOPS
    //While LOOp
    // Printing no. from one to ten
    $one = 1;
    while($one <= 10){
        echo $one ;
        echo  "<br>";
        $one++;
    }

    // counts to 100 by tens:
    $ten = 10;
    while($ten <= 100){
        echo "The number is : $ten  <br>";
        $ten += 10; 
    }

    // Do while loop
    $x = 6;

    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
    

    // For loop
    for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
      }

    //For each loop is assigned to each element of the array
    $colors = array("red", "green", "blue", "yellow");
    foreach($colors as $value){
        echo "$value <br>";
    }

    // In this example both key and value will be printed
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val){
        echo "$x = $val<br>";
    }





    ?>
    
</body>
</html>