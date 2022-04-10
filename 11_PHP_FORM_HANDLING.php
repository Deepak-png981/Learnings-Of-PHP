<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM HANDLING</title>
</head>
<body>
    <!-- simply printing the information which is send to the server
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

    <br>
    <?php
        echo $_POST["name"] . " YOUR EMAIL IS " . $_POST["email"];
    ?> -->


    <!-- OUTPUT: -->
    <!-- Welcome Deepak Joshi
    Your email address is: deepakjoshicscoder@gmail.com
    Deepak Joshi YOUR EMAIL IS deepakjoshicscoder@gmail.com  -->


    <?php
    // SAME result can also be achieved using GET method
    echo "Very Warm Welcome ". $_GET["name"] . " Your email is " . $_GET["email"];

    ?>


<!-- $_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method. -->
<!-- 
Note: GET should NEVER be used for sending passwords or other sensitive information! -->



</body>
</html>