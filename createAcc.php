<?php
$host="localhost";
$user="root";
$password="";
$db="portiwebpage";
$error=null;
$error2=null;
$con=new mysqli($host,$user,$password,$db);

if($con===false)
{
    die("Connection Error");
}
else{
    if(isset($_POST['reg'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpass= $_POST['cpassword'];
        $type = $_POST['type'];

            if($pass==$cpass){
            $sql="INSERT INTO account(fname,mail,password,types) VALUES('$name','$email','$pass','$type')";
            $con->query($sql);
            header("location:Login.php");
            $error="<p style='color:green'>Registration Done</p>";

             }
             else{
              $error2= "<p style='color:red'> Password does not match </p>";
             }
          } 

    }

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ridmi rasanjalee, portfolio,ridmi, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
    <meta name="description" content="Welcome to ridmi's Portfolio. Full-Stack Web Developer and Android App Developer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link id='favicon' rel="shortcut icon" href="./assets/images/avatar.png" type="image/x-png">
    <title>Portfolio | Ridmi Rasanjalee</title>

</head>
<style type="text/css">
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  outline: none; border: none;
  text-transform:capitalize;
  transition: all .2s linear;
}
html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
}
body{
  background: #f7f7f7;
  font-family: 'Poppins', sans-serif;
}

*::selection{
  background: #2b3dda;
  color: #fff;
}
html{
  font-size: 62.5%;
  overflow-x: hidden;
}
html::-webkit-scrollbar{
  width: .8rem;
}
html::-webkit-scrollbar-track{
  background: rgb(235, 202, 245);
}
html::-webkit-scrollbar-thumb{
  background: #420177;
}
/* navbar starts */
header{
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.7rem 10%;
  height: 6.5rem;
  background-color: #fff;
  box-shadow: 0 1px 4px rgba(146,161,176,.3);
}
section{
  min-height: 100vh;
  padding: 2rem 9%;
}
header .logo{
  font-size: 1.9rem;
  font-weight: 800;
  text-decoration: none;
  color: #0E2431;
}
header .logo i {
  font-size: 2.2rem;
}
header .logo:hover {
  color: #fc8c05;
}
header .navbar ul{
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
}
header .navbar li{
  margin-left: 2.5rem;
}
header .navbar ul li a{
  font-size: 1.57rem;
  color: #0E2431;
  font-weight: 600;
  text-decoration: none;
  letter-spacing: 0.04rem;
}
header .navbar ul li a.active,
header .navbar ul li a:hover{
  color: #011aff;
  border-bottom: .2rem solid #011aff;
  padding: .5rem 0;
}
/* navbar ends */

/* hamburger icon starts*/
#menu{
  font-size: 3rem;
  cursor: pointer;
  color: rgb(24, 2, 63);
  display: none;
}
@media(max-width:768px){
  #menu{
      display: block;
  }
  



/* common media queries starts*/
@media(max-width:450px){
  html{
    font-size: 55%;
  }
  body{
    padding-right: 0;
  }
  section{
    padding: 2rem;
  }
}
/* common media queries ends*/


/* scroll top starts */
#scroll-top{
  position: fixed;
  top: -140%;
  right: 2rem;
  padding: 1rem 1.5rem;
  font-size: 2rem;
  background: #ffae00;
  color: rgb(13, 0, 44);
  border-radius: 5rem;
  transition: 1s linear;
  z-index: 1000;
}
#scroll-top.active{
  top: calc(100% - 12rem);
}
/* scroll top ends */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  outline: none;
  border: none;
  text-transform: capitalize;
  transition: all 0.2s linear;
}
html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
}
body {
  background: #f7f7f7;
  font-family: "Poppins", sans-serif;
}

*::selection {
  background: #2b3dda;
  color: #fff;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
}
html::-webkit-scrollbar {
  width: 0.8rem;
}
html::-webkit-scrollbar-track {
  background: rgb(235, 202, 245);
}
html::-webkit-scrollbar-thumb {
  background: #420177;
}



/* contact section starts */
.contact {
  background: #e5ecfb;
  min-height: 60vh;
}
.contact .container {
  max-width: 1050px;
  width: 100%;
  background: #fff;
  border-radius: 1.5rem;
  margin: 2rem 5rem;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
}
.contact .container .content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 2.5rem 2rem;
}
.contact .content .image-box {
  max-width: 60%;
  margin-left: 4rem;
}
.contact .content .image-box img {
  width: 100%;
  height: 40rem;
  position: relative;
}
.contact .content form {
  width: 45%;
  margin-right: 3.5rem;
}
form .form-group {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.form-group .field {
  height: 50px;
  display: flex;
  position: relative;
  margin: 1rem;
  width: 100%;
}
form i {
  position: absolute;
  top: 50%;
  left: 18px;
  color: rgb(51, 51, 51);
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
}
form .field input,
form .message textarea {
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 16px 0 48px;
  font-size: 16px;
  font-family: "Poppins", sans-serif;
  border-radius: 5px;
  border: 1px solid rgb(51, 51, 51);
  background: #e5ecfb;
}
.field input::placeholder,
.message textarea::placeholder {
  color: rgb(51, 51, 51);
}
.field input:focus,
.message textarea:focus {
  padding-left: 47px;
  border: 2px solid rgb(115, 3, 167);
}
.field input:focus ~ i,
.message textarea:focus ~ i {
  color: rgb(115, 3, 167);
}


form .button-area {
  display: flex;
  float: right;
  flex-direction: row-reverse;
}

.button-area button {
  color: #fff;
  border: none;
  outline: none;
  font-size: 1.8rem;
  cursor: pointer;
  border-radius: 5px;
  padding: 13px 25px;
  background: #2506ad;
  box-shadow: 0px 5px 10px rgba(48, 68, 247, 0.6);
  transition: 0.3s ease;
  font-family: "Nunito", sans-serif;

}
.button-area button:hover {
  background: #421cecf5;
}
.button-area span {
  font-size: 15px;
  padding: 1rem;
  display: none;
}
.button-area button i {
  position:relative;
  top: 6px;
  left: 2px;
  font-size: 1.5rem;
  transition: 0.3s;
  color: #fff;
}
.button-area button:hover i {
  left: 8px;
}



/* contact section media queries starts */
@media (max-width: 900px) {
  .contact {
    min-height: 70vh;
  }
  .contact .container {
    margin: 3rem 0 2rem 0;
  }
  .contact .container .content {
    padding: 18px 12px;
  }
  .contact .content .image-box {
    display: none;
  }
  .contact .content form {
    width: 100%;
    margin-right: 2rem;
  }
}
.form-group .new {
  height: 50px;
  display: flex;
  position: relative;
  margin: 1rem;
  width: 100%;
}

</style>
<body oncontextmenu="return false">



<!-- contact section starts -->
<section class="contact" id="contact">
  
  <h2 class="heading"><i class="  fas fa-pen-square"></i> CreateNew<span>Account</span></h2>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img draggable="false" src="./assets/images/contact.png" alt="">
      </div>
      <form action=""  method="POST" class="signupform">
      
      <div class="form-group">
        <div class="field">
          <input type="text" name="name" placeholder="Name" required>
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Email" required>
          <i class='fas fa-envelope'></i>
        </div>
        <div class="field">
          <input type="password" name="password" placeholder="Enter password">
          <i class='fa fa-user-secret'></i>
        </div>
        <div class="field">
          <input type="password" name="cpassword" placeholder="Re-Enter password">
          <i class='fa fa-user-secret'></i>
        </div>
        <div class="new">
          <label for=""> <p style="color: black; font-family:Nunito, sans-serif;font-size:16px;border: 1px solid rgb(51, 51, 51); padding-left: 47px;border-radius:5px ;margin-right: 5rem; height: 50px;
  display: flex;
  position: relative;
  margin: 1rem;
  width: 100%;background: #e5ecfb;
}">User type:</label>
  <i class='fas fa-user-check'></i>
          <input type="radio" name="type" placeholder="Enter your type"value="client">
          <label>Client</label>
           <input type="radio" name="type" placeholder="Enter your type"value="admin">
          <label>Admin</label>


          
                
        </div>
        
        
        </div>
      <div class="button-area">
        <button type="submit" name="reg" onclick="window.location.href='Login.php';" >
          Submit <i class="fa fa-paper-plane"></i></button>
          </div>
  
          
    </form>
    
  </div>

  
</section>




<!-- contact section ends -->



<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->



<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="./assets/js/particles.min.js"></script>
<script src="./assets/js/app.js"></script>

<!-- vanilla tilt.js links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- scroll reveal anim -->
<script src="https://unpkg.com/scrollreveal"></script>

<script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>



<script src="./assets/js/script.js"></script>

</body>
</html>
