

<?php
$conn = mysqli_connect('localhost', 'root', '', 'portiwebpage');

if (isset($_POST["submit"])) {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $contact_number = $_POST['contact_number'];

    $sql = "INSERT INTO `crud1`(`id`, `first_name`, `email`, `service`,  `contact_number`) 
            VALUES (NULL, '$first_name', '$email', '$service', '$contact_number')";

    $result = mysqli_query($conn, $sql);
    $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;

    if ($result) {
        header("Location: table.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>
   <style>
.contact {
  background: #e5ecfb;
  min-height: 60vh;
}
.contact .container {
  max-width: 1050px;
  width: 100%;
  background:#e5ecfb;
  border-radius: 1.5rem;
  margin: 2rem 5rem;}


 
/*.contact .container .content {
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
form .message {
  position: relative;
  margin: 1rem;
  width: 100%;
}
form .message i {
  top: 25px;
  font-size: 20px;
  left: 15px;
}
form .message textarea {
  min-height: 130px;
  max-height: 230px;
  max-width: 100%;
  min-width: 100%;
  padding: 12px 20px 0 48px;
}
form .message textarea::-webkit-scrollbar {
  width: 0px;
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
  font-size: 17px;
  padding: 1rem;
  display: none;
}
.button-area button i {
  position: relative;
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
/*@media (max-width: 900px) {
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
}*/
   </style>
</head>

<body>
  
   
<div class="contact">
   <div class="container">
      <div class="text-center mb-4">
         <h3>Add A Comment</h3>
         <p>Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label"><b>First Name:</b></label>
                  <input type="text" class="form-control" name="first_name" placeholder="Albert">
               </div>

              

            </div>

            <div class="mb-3">
               <label class="form-label"><b>Email:</b></label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

             <div class="col">
                  <label class="form-label"><b>Service:</b></label>
                  <input type="text" class="form-control" name="service" placeholder="Comment">
               </div>

             

                

            <div class="col">
                  <label class="form-label"><b>Contact Number:</b></label>
                  <input type="text" class="form-control" name="contact_number" placeholder="07********">
               </div>

            <br>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="table.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>
</div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>