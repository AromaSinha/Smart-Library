<?php
include("conn.php");
if (isset($_POST['submit'])){
  $username=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["pass"];
  $cpassword=$_POST["cpass"];
   

  $query="INSERT INTO signup (username, email, password, cpassword) VALUES ('$username','$email','$password','$cpassword' )";

  $result=mysqli_query($conn,$query);
   
  if($result){
      header("location:login.php");
      
  }
  else{
      echo "Error creating table: " . $conn->error;
  }
}
?>
 





 
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">

    <title>Library</title>
    
  </head>
   
  <body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img src="images/book-stack.ico"width="40px"height="40px">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
              <li><a href="login.php" class="nav-link px-2 text-white">Library</a></li>
              </ul>
    
            <div class="text-end">
              <a href="login.php"type="button" class="btn btn-outline-light me-2">Login</a>
              <a href="signup.php" type="button" class="btn btn-warning" >Sign-up</a>
            </div>
          </div>
        </div>
      </header>
        <div class="container w-50 mt-4 shadow p-4">
      <form action="" method="POST">
            <h3>Register Here</h3><br>
         <div class="form-floating mb-3">
          <input type="text" class="form-control" name="username" id="floatingInput" placeholder="username">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" id="floatingInput" placeholder="email">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="cpass" id="floatingPassword" placeholder="Confirm Password">
          <label for="floatingPassword">Confirm Password</label>
        </div>
        
        <input  class="btn btn-dark" type="submit" name="submit" value="SignUp" >
         <a>Already a User!</a> <a href="login.php">LOGIN HERE</a>
      </div>
       
       
</form>
</div>
    
 
     
       
       
    <script>
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    </script>
    
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</script>
    <script src="script.js"></script>
    
    
  </body>
</html>
