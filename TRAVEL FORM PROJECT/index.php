<?php
    $insert = false;    
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    // connection variable
    $con = mysqli_connect($server , $username , $password);
    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }
    // else{
    //     echo "Done";
    // }
    // inserting the data to the database
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`,
     `gender`, `email`, `phone`, `other`, `dt`) 
     VALUES ('$name', '$age', '$gender', 
     '$email', '$phone', '$other', 
      current_timestamp());";
    //   echo $sql;

      if($con->query($sql) == true){
        //   echo "SUCCESSFULLY SUBMITTED";
        $insert = true;
      }
      else{
          echo "ERROR : $sql <br> $con->error";
          $insert = false;
      }
      $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>A simple TRAVEL FORM GGSIPU</h3>
       <p> Kindly enter your Details here : </p>
       <?php 
       if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you are joining us for the TRIP</p>";
        }
        // else{
        //     echo "ERROR";
        // }

       ?>
    <!-- FORM -->
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="number" name="phone" id="phone" placeholder="Enter your number">
        <input type="email" name="email" id="email" placeholder="Enter your E-Mail">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
        <input type="submit" value="submit" id="submit">
        <!-- <button type="reset" >Reset </button> -->

    </form>
    </div>

    <script src="index.js"></script>
</body>
</html>