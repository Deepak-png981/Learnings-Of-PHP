<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function In PHP</title>
</head>
<body>
    <!-- PHP Code -->
    <?php
    // Some useful string function to manipulate string
    // strlen() ->returns the length of the string
    echo strlen("Hello Brother");   //output : 13
    echo "<br>";

    // str_word_count() function is used to count number
    //of words in the string
    echo str_word_count("Hello Brother"); //output: 2;
    echo "<br>";

    //strrev() function is used to reverse the string
    echo strrev("Hello Brother");  //output : rehtorB olleH
    echo "<br>";


    //strpos() function is used to search specific test within the string
    echo strpos("Hello World" , "World"); //output : 6
    echo "<br>";

    // str_replace() -> it replaces some charactes in a string 
    //with some characters
    // World ko change kardo Dolly shabd ke saath
    echo str_replace("World" , "Dolly" , "Hello World");
    //there are many such more string functions
    //I will be learning about them in future according to the need of each function
    ?>
</body>
</html>