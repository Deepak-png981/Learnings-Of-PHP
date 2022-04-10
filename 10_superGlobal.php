<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals in PHP</title>
</head>
<body>
    <?php
    
    // 1 $GLOBALS
    // PHP stores all global variables in an array called 
    // $GLOBALS[index]. The index holds the name of the variable.
    $first = 23;
    $second = 32;
    function sumPlease(){
        $GLOBALS['sum'] = $GLOBALS['first'] + $GLOBALS['second'];
    }
    sumPlease();
    echo $sum;
    // In the example above, since z is a variable present 
    // within the $GLOBALS array, it is also accessible from outside the function!
    echo "<br>";
    

    // 2 $_SERVER
    // $_SERVER is a PHP super global variable which holds information
    //  about headers, paths, and script locations.
    echo $_SERVER['PHP_SELF']; //OUTPUT : /djl/10_superGlobal.php
    ECHO "<br>";
    echo $_SERVER['SERVER_NAME']; //output : localhost
    ECHO "<br>";
    echo $_SERVER['HTTP_HOST'];
    // Learning about all server element is not a good choice
    //we can learn about it wheneever required
    //If in future required then visit Deepak at :
    //https://www.w3schools.com/php/php_superglobals_server.asp

    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php 
    // $_REQUEST
    // The example below shows a form with an input
    //  field and a submit button. When a user 
    //  submits the data by clicking on "Submit", 
    //  the form data is sent to the file specified 
    //  in the action attribute of the <form> tag. 
    //  In this example, we point to this file 
    //  itself for processing form data. If you 
    //  wish to use another PHP file to process 
    //  form data, replace that with the filename 
    //  of your choice. Then, we can use the super 
    //  global variable $_REQUEST to collect the 
    //  value of the input field:

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     //COLLECT THE value of input field
    //     $name = $_REQUEST["fname"];
    //     if(empty($name)){
    //         echo "Name is empty <br>";
    //     }
    //     else{
    //         echo "Entered name is $name <br>";
    //     }
    // }


    // $_POST 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo $name;
        }
      }


      // PHP $_GET is a PHP super global variable which 
      // is used to collect form data after submitting 
      // an HTML form with method="get".
      

    // $_POST : It can catch the data which is sent using
    //  POST method. $_GET : It can catch the data 
    //  which is sent using GET method. $_REQUEST : 
    //  It can catch the data which is sent using 
    //  both POST & GET methods.
    ?>


</body>
</html>