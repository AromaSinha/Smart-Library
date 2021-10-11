<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 

$sql = "CREATE TABLE signup (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(50),
    cpassword VARCHAR(50),
    role VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
     
 
    


   
    
    
?>