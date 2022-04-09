<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // A variable declared outside a function has a 
    // GLOBAL SCOPE and can only be accessed outside
    //  a function:
    $variable_in_global_scope = "Golbal ho bhai tum";
    function testFunction(){
        //calling the global function will give us error
        // echo $variable_in_global_scope;  //showing error thats why I am commenting it
    }
    //calling the function
    testFunction();
    //calling the function outside the function
    echo $variable_in_global_scope; //NO ERROR
    ECHO "<br>";
    // A variable declared within a function has a LOCAL 
    // SCOPE and can only be accessed within that function:
    function test2(){
        $check_variable_two = "Second Check";
        echo $check_variable_two;   //No error because it is accessible here
    }
    test2();
    echo "<br>";
    // echo $check_variable_two;       //showing error because it is not accessible outside the function scope
    //so we can have same name of two different variables in two different function


    //If we want to access the global variable then we should
    //use "global" keyword for this
    $global1 = 10 ;
    $global2 = 20;
    function check_check_check(){
        global $global1 , $global2;
        $global1 += $global2;
    }
    check_check_check();
    echo $global1;
    echo "<br>";

    //The global variable in PHP are automatically
    //stored in an array named as $GLOBALS[index]
    //where its index is global variable name itself
    $first = 10;
    $second = 23;
    function GLOBALSarrayChecking(){
        $GLOBALS['second'] = $GLOBALS['first'] + $GLOBALS['second'];
    }
    GLOBALSarrayChecking();
    echo $second;
    echo "<br>";
    echo "I am awesome";
    echo "<br>";
    // sometime we want our local variable not to get deleted
    //after the function ends
    //so we use static variable in PHP
    function staticCheckKrneWala(){
        $deepak = 0;
        static $deepakJoshi = 0;
        echo "Deepak Value : $deepak";
        $deepak++;
        echo "<br>";
        echo "DeepakJoshi value : $deepakJoshi";
        echo "<br>";
        $deepakJoshi++;
    }
    //calling staticCheckKrneWala() three times so that
    //we can understand first time
    staticCheckKrneWala();
    staticCheckKrneWala();
    staticCheckKrneWala();
    // OUTPUT :
    // Deepak Value : 0
    // DeepakJoshi value : 0
    // Deepak Value : 0
    // DeepakJoshi value : 1
    // Deepak Value : 0
    // DeepakJoshi value : 2




    
    ?>
</body>
</html>