 <?php
 include("conn.php");
$id = $_GET['id'];  

$qry = mysqli_query($conn,"SELECT * FROM `category` WHERE cat_id=$id");  
$data = mysqli_fetch_array($qry);  

if(isset($_POST['update']))  
{
    $title = $_POST['title'];
    $des = $_POST['des'];
    $image=$_FILES["image"]["name"]; 
    $pdf=$_FILES["pdf"]["name"];
  
    $edit = mysqli_query($conn,"update category set title='$title', des='$des', image='$image', pdf='$pdf' where cat_id='$id'");
    move_uploaded_file($_FILES['image']['tmp_name'], "images/" .$_FILES['image']['name']);
    move_uploaded_file($_FILES['pdf']['tmp_name'], "pdf/" .$_FILES['pdf']['name']);
  
    if($edit)
    {
         
        header("location:books.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error updating: " . $conn->error;
    }     
}
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
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
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
        <span class="admin_name">Prem Shahi</span>
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
      <th scope="col">Title</th>

      <th scope="col">Reg_date</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
   
    </tr>
  </thead>
  <tbody>
     <?php
     
     $sql="SELECT * FROM category";
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res)){
     ?>
    <tr class="text-center">
     
      <th scope="row"><?php echo $row['cat_id'] ?></th>
      <td><?php echo $row['title'] ?></td>
      <td><?php echo $row['reg_date'] ?></td>
      <td><a class="btn btn-primary">Edit</a></td>
      <td><a class="btn btn-danger">Delete</a></td>
       
    </tr>
      <?php } ?>
  </tbody>
</table>
</div>
 </div>
        <div class="top-sales box mb-3"style="height:400px;">
       
          <div class="top-sales-details">
           
      <form action="" enctype="multipart/form-data" method="POST">
            <h3 class="title">Edit Book</h3><br>
         <div class="form-floating mb-3">
          <input type="text" class="form-control" value="<?php echo $data['title']; ?>" name="title" id="floatingInput" placeholder="Bookname">
          <label for="floatingInput">Bookname</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="des" value="<?php echo $data['des']; ?>" id="floatingInput" placeholder="Description">
          <label for="floatingInput">Description</label>
        </div>
        <div class="input-group mb-3">
          <input type="file"   name="image" accept="image/gif" class="form-control">
        </div>
        <div class="input-group mb-3">
          <input type="file" name="pdf" accept="application/pdf" class="form-control">
        </div>
        
        <input  class="btn btn-dark" type="submit" name="update" value="Update" >
         
      </div>
    </form>

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

