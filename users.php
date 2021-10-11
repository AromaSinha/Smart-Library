<?php
  include "conn.php";


  $query="SELECT * FROM signup WHERE id != 5";
  $res=mysqli_query($conn,$query);
  
?>


<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link href="library.css" rel="stylesheet">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
         

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

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
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Library</span>
    </div>
     <ul class="nav-links">
        <li>
          <a href="adminhome.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="users.php" >
            <i class='bx bx-box' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="books.php" >
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Books</span>
          </a>
        </li>
        <li>
          <a href="bkvwadmin.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Book Details</span>
          </a>
        </li>
        <li>
          <a href="category.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Categories</span>
          </a>
        </li>
        <li>
           
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <div class="home-content">
      <div class="sales-boxes  ">
        <div class="recent-sales box">
          <div class="title">User Details</div><br>
          <div class="sales-details">
           <table class="table  table-borderless table-hover">
  <thead>
    <tr class="text-center">
      <th scope="col">ID</th>
      <th scope="col">Users</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
       
    </tr>
  </thead>
  <tbody>
    <?php
      while($rows=mysqli_fetch_array($res)){


    ?>
    <tr class="text-center">
      <th scope="row"><?php echo $rows['id'] ?></th>
      <td><?php echo $rows['username'] ?></td>
      <td><?php echo $rows['email'] ?></td>
      <td>@<?php echo $rows['usertype'] ?></td>
      <td><a class="btn btn-primary">Edit</a></td>
      <td><a class="btn btn-danger">Delete</a></td>
    </tr>
     <?php
     }
     ?>
  </tbody>
</table>
     </div>
    </div>
  </div>
  <?php 
  
  $query="SELECT * FROM add_admin";
  $res=mysqli_query($conn,$query);
  ?>
  <div class="sales-boxes mt-3">
        <div class="recent-sales box mb-3" style="width:100%;">
         
          <div class="title">Admin Details </div><br>
          <div class="sales-details">
           <table class="table  table-borderless table-hover">
  <thead>
    <tr class="text-center">
      <th scope="col">ID</th>
      <th scope="col">Users</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
       
    </tr>
  </thead>
  <tbody>
    <?php
      while($rows=mysqli_fetch_array($res)){


    ?>
    <tr class="text-center">
      <th scope="row"><?php echo $rows['id'] ?></th>
      <td><?php echo $rows['username'] ?></td>
      <td><?php echo $rows['email'] ?></td>
      <td>@<?php echo $rows['usertype'] ?></td>
      <td><a class="btn btn-primary">Edit</a></td>
      <td><a class="btn btn-danger">Delete</a></td>
    </tr>
     <?php
     }
     ?>
  </tbody>
</table>
     </div>
    </div>
    <?php
 
if (isset($_POST['submit'])){
  $username=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["pass"];
  $cpassword=$_POST["cpass"];
   

  $query="INSERT INTO add_admin (username, email, password, cpassword) VALUES ('$username','$email','$password','$cpassword' )";

  $result=mysqli_query($conn,$query);
   if($result){
   	echo '<script>
      window.location="users.php";
      </script>';
  }
  else{
      echo "Error creating table: " . $conn->error;
  }
   
}
?>

    <div class="top-sales box mb-3" style="width:100%; margin-left: 12px;">
       
          <div class="top-sales-details">
           
      <form action="" method="POST">
            <h3 class="title">Add Admin</h3><br>
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
        
        <input  class="btn btn-dark" type="submit" name="submit" value="Add" >
         
      </div>
    </form>

          </div>
             </div>
 </div>
 </section>
  
   
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

