<?php
 include("conn.php");
$id = $_GET['id'];  

$qry = mysqli_query($conn,"SELECT * FROM `category` WHERE cat_id=$id");  
$data = mysqli_fetch_array($qry);  
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="library.css" rel="stylesheet">

    <title>Hello, world!</title>
    <style>
    .home-content .sales-boxes .sales-details{
  display: flex;
  align-items: center;
  
}
  </style>
  </head>
  <body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img src="images/book-stack.ico"width="40px"height="40px">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
              <li><a href="login.php" class="nav-link px-2 text-white">Library</a></li>
              </ul>
    
            <div class="text-end">
              <a>Username</a>
            </div>
          </div>
        </div>
      </header>
    <main>
      <div class="home-content mt-3">
      <div class="sales-boxes  ">
        <div class="recent-sales box">
         
         
    <embed src="pdf/<?php echo $data['pdf']?>" type="application/pdf" class="pdf" height="600px" width="100%"> 
         </div>
        <div class="top-sales box mt-2">
       
          <div class="top-sales-details">
   <?php
  if (isset($_POST['submit'])){
  $notes=$_POST["notes"];
  $query="INSERT INTO notes (notes) VALUES ('$notes')";

  $result=mysqli_query($conn,$query);
   
  if($result){
      echo '<script>
      window.location="viewbook.php?id='.$data["cat_id"].'";
      </script>';
       
      
  }
  else{
      echo "Error creating table: " . $conn->error;
  }
}
?>
        
      <form action="" method="POST">
            <h3 class="title">Start making notes!</h3><br>
         <div class="form-floating mb-3">
          <textarea type="text" id="addTxt"class="form-control" style="height:300px;"name="notes" id="floatingInput" placeholder="notes"></textarea>
          <label for="floatingInput">Notes</label>
        </div>
        <input  class="btn btn-dark" type="submit" name="submit" id="addBtn" value="Save" >
         
      </div>
    </form>
              
          </div>

             </div>

      </div>

    </div>
    <div class="home-content mt-3 mb-3">
      <div class="sales-boxes  ">
        <div class="recent-sales box" style="width:100%;">
          <div class="title">Your Notes</div><br>
          <div class="sales-details"id="notes">
    
 
          </div>
        </div>
      </div>
    </div>


    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="app.js"></script>

 
  </body>
</html>