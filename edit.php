<?php
$conn = mysqli_connect('localhost', 'root', '', 'portiwebpage');
$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;


if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    
    $contact_number = $_POST['contact_number'];

   $sql = "UPDATE `crud1` SET `first_name`='$first_name', `email`='$email', `service`='$service', `contact_number`='$contact_number' WHERE id = $id";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: table.php?msg=Record updated successfully");
        exit(); // Add exit to stop further execution after redirection
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
</head>

<body>
   

   <div class="container">
      <div class="text-center mb-4">
         <h3>Edit User Information</h3>
         <p class="text-muted">Click update after changing any information</p>
      </div>

       <?php
        $id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
        $stmt = null;
        if ($id < 0) {
        // Show a warning message
        echo "Invalid ID provided.";
    } else {
    $sql = "SELECT * FROM `crud1` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($stmt) {
            // Bind the parameter
            mysqli_stmt_bind_param($stmt, "i", $id);

            // Execute the statement
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);

            // Fetch the row
            $row = mysqli_fetch_assoc($result);

            // ... Process the $row data as needed ...

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            // Handle the error if the statement preparation fails
            echo "An error occurred while processing your request.";
        }
    }
    ?>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">

<div class="row mb-3">
               <div class="col">
                  <label class="form-label">ID:</label>
                  <input type="text" class="form-control" name="id" value="<?php echo $row['id']?>">
               </div>


               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']?>">
               </div>

              

            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>">
            </div>

             <div class="col">
                  <label class="form-label">Service:</label>
                  <input type="text" class="form-control" name="service" value="<?php echo $row['service']?>">
               </div>

             
            <div class="col">
                  <label class="form-label">Contact Number:</label>
                  <input type="text" class="form-control" name="contact_number"value="<?php echo $row['contact_number']?>" >
               </div>

            <br>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Update</button>
               <a href="table.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
