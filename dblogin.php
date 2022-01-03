<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6462912";
$password = "gPduSIJu5R";
$db="sql6462912";



// Create connection
 $conn = new mysqli($servername, $username, $password,$db);

  $uname=$_POST['username'];
  $password=$_POST['password'];
  session_start();
  $_SESSION['username'] = $uname;

  $sql="select password from login where username='".$uname."'";
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) == 0){
    echo "Invalid username and password" ;
  }
  else{
    $row = mysqli_fetch_row($result);
    if($row["password"==$password]){
      header("Location:index.php");
    }
  }
  $conn->close();

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>