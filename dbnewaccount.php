<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6464728";
$password = "ERsMIjTP6n";
$db="sql6464728";

// Create connection
 $conn = new mysqli($servername, $username, $password,$db);

  $name=$_POST['fullname'];
  $uname=$_POST['username'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  
  $sql="select fullname from login where username='".$uname."'";
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) != 0){
    echo '<script>alert("Username is already taken")</script>';
  }
  elseif($name == '' or $uname == '' or $password == '')
    echo '<script>alert("Empty strings are not allowed")</script>';
  elseif(preg_match("/([%\$#\*]+)/", $name))
    echo '<script>alert("Special characters on name are not allowed")</script>';
  elseif(strlen($password)<8)
    echo '<script>alert("Password length is too small")</script>';
  elseif(strlen($password)>15)
    echo '<script>alert("Password length is too long")</script>';
  elseif($dob >= date("Y-m-d"))
    echo '<script>alert("Invalid date for Date of birth")</script>';
  else{
    $sql="insert into login values ('".$name."','".$uname."','".$password."','".$gender."','".$dob."')";
    if($conn->query($sql)==true){
        echo '<script>alert("Account created")</script>';
    } 
  }
  $conn->close();

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>