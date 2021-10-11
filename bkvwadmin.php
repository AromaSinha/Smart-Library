 
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

   </head>
   
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
         <img src="images/user.jpg" alt=""> 
        <span class="admin_name">aroma</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="sales-boxes  ">
        <div class="recent-sales box">
          <div class="sales-details">
          <table class="table table-borderless " style="width:100%;">
  <thead>

    <tr class="text-center">
      <th scope="col">ID</th>
      <th scope="col">Pdf Name</th>
      <th scope="col">Reg_date</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
   
    </tr>
  </thead>
  <tbody>
     <?php
     include"conn.php";
     $sql="SELECT * FROM category";
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res)){
     ?>
    <tr class="text-center">
     
      <th scope="row"><?php echo $row['cat_id'] ?></th>
      <td><?php echo $row['pdf'] ?></td>
      <td><?php echo $row['reg_date'] ?></td>
      <td><a class="btn btn-primary">Edit</a></td>
      <td><a href="deletebook.php?id=<?php echo $row['cat_id'] ?>" class="btn btn-danger">Delete</a></td>
       
    </tr>
      <?php } ?>
  </tbody>
</table>
</div>
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

