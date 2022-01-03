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

  if($name == '' or $uname == '' or $password == '')
    echo "Empty strings are not valid";
  
  elseif($dob >= date("Y-m-d"))
    echo "Invalid date for dob";

  else{
    $sql="insert into login values ('".$uname."'";
    $result=mysqli_query($conn,$sql);
  }
  $sql="select password from login where username='".$uname."'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result) == 0){
    echo "Invalid username and password" ;
  }
  else{
    $row = mysqli_fetch_row($result);
    if($row["password"==$password]){
        header("Location:newAccount.php");}
  }
  $conn->close();

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>