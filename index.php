<?php
$insert = false;
if(isset($_POST['name'])) { 
$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connction failed" .mysqli_connect_error());

}
      //echo "Sucessfuly connected";
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $desc = $_POST['desc'];
     
      $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `others`, `dt`) VALUES 
      ('$name', '$age', '$gender', '$email', '$phone', '$desc', CURRENT_TIMESTAMP);";

     // echo $sql;

      if($con->query($sql)== true) {

        //echo "Successfuly inserted";
        $insert= true;
      }
      else{
          echo "Error $sql <br> $con->error";
      }

      $con->close();
      
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
</head>

<body>
    <img class="bg" src="giphy.webp" alt="Rosary College">
    
     <div class="container">
         <h1>Welcome to travel form</h1>
         <p>Enter your details</p>

         <?php
         if($insert==true){
         echo "<p class='abc'>Thanks for submitting.</p>";
          }
         ?>
         <form action="index.php" method="post">

      <input type="text" name="name" id="name" placeholder="Enter your name">
      <input type="text" name="age" id="age" placeholder="Enter your age">
      <input type="text" name="gender" id="gender" placeholder="Enter your gender">
      <input type="email" name="email" id="email" placeholder="Enter your email">
      <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

     <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter info"> </textarea>
     <button class="btn">Submit</button>
    
     
    </form>
     </div>


     <script src="index.js"></script>
    
</body>
</html>

 





 