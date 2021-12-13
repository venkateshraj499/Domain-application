<?php
$servername = "localhost";
$username = "root";
$password = "Pass#123";
$db="domain_app";

// Create connection
 $conn = new mysqli($servername, $username, $password,$db);

  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="select password from login where username='".$uname."'";
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) == 0){
    echo "Invalid username and password" ;
  }
  else{
    echo "Welcome ".$uname."!";
  }

  $conn->close();

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>