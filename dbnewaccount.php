<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6462912";
$password = "gPduSIJu5R";
$db="sql6462912";

// Create connection
 $conn = new mysqli($servername, $username, $password,$db);

  $name=$_POST['fullname'];
  $uname=$_POST['username'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $flag=0;

  $sql="select fullname from login where username='".$uname."'";
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) != 0){
    echo "Username is already taken";
  }
  elseif($name == '' or $uname == '' or $password == '')
    echo "Empty strings are not allowed";
  elseif(preg_match("/([%\$#\*]+)/", $name))
    echo "Special characters on name are not allowed";
  elseif(strlen($password)<8)
    echo "Password length is too small";
  elseif(strlen($password)>15)
    echo "Password length is too long";
  elseif($dob >= date("Y-m-d"))
    echo "Invalid date for Date of birth";
  else{
    $sql="insert into login values ('".$name."','".$uname."','".$password."','".$gender."','".$dob."')";
    if($conn->query($sql)==true){
        echo "Account created";
    }
    
  }
  $conn->close();

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>