 
<?php
include("conn.php");

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
    <link rel="stylesheet" href="library.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">

    <title>Library</title>
    
  </head>
 <style>
   .home-content .sales-boxes .recent-sales{
  width: 100%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
   </style>
   
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
   
      <div class="p-4 p-md-5 mb-4 text-white text-center d-flex shadow justify-content-center"style="background:#331f59">
        <div class="col-md-6 px-0">
          <h1 class="display-4 " style="font-family: 'Acme', sans-serif;">Search for your favourite book here!</h1><br>
           </div>
      </div> 
      <div class="home-content">
      <div class="sales-boxes  ">
        <div class="recent-sales box">
          <div class="title">List Of Books!</div><br>
          <div class="sales-details">
      <div class="album p-4 bg-light"style="width:100%;" >
        <div class="container"style="width:100%;">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          	<?php
          	$sql="SELECT * FROM category";
          	$res=mysqli_query($conn,$sql);
          	while($row=mysqli_fetch_assoc($res)){
          		
          		echo '<div class="col">
              <div class="card shadow-sm"id="mycard">
                <img src="images/' .$row['image']. '"  width="100%" height="225">
    
                <div class="card-body">
                  <h3 class="card-title" >'.$row["title"].'</h3>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="viewbook.php?id='.$row["cat_id"].'" type="button" class="btn btn-dark">View</a>
                    
                    </div>
                    <small class="text-muted">'.$row["reg_date"].'</small>
                  </div>
                </div>
              </div>
            </div>';
          	}
          	?> 
                  
                </div>
              </div>
              
            </div>
            </div>
             </div> 
             
        <div class="container  col-md-4 mt-3 " style="width:300px;">
      <div class="position-sticky" style="top: 2rem;">
      

      <div class="list-group">
      <a class="list-group-item list-group-item fw-bold bg-dark text-white" style="cursor:pointer;s"><i class="fas fa-hand-holding-heart fa-2x"> Categories</i></a>
      <?php
      $sql="SELECT * FROM dropdown";
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res)){
       
  echo'<a href="catview.php?id='.$row['id'].'" type="button" class="list-group-item list-group-item-action">'.$row['catname'].'</a>';}
   ?>
   

</div>

      
      </div>
    </div>
          </div>
          
             
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
