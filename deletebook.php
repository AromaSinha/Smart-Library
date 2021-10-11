<?php
include("conn.php");
$id=$_GET['id'];
$q="DELETE FROM `category` WHERE cat_id=$id";
$res=mysqli_query($conn,$q);
if($res){
	unlink("pdf/" .$pdf);
	header("location:books.php");
}
else{
	echo "Error deleting record: " . $conn->error;
}

?>