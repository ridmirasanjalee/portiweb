<?php

$link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"portiwebpage");

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>All</span></h3>
      <h1><span>Welcome To My Page</span></h1>
      
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
  
   </div>

</div>

</body>
</html>