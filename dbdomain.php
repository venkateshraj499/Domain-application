<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6462912";
$password = "gPduSIJu5R";
$db="sql6462912";

// Create connection
 $conn = new mysqli($servername, $username, $password,$db);

  $dname = $_POST['domain'];
  $price = 0;
  $date = date("Y-m-d", strtotime("+365 days"));

  $sql="select username from domain where domainname='".$dname."'";
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) != 0){
    echo '<script>alert("Domain name is already taken")</script>';
  }
  else{
  $exten = substr($dname,strripos($dname,".")+1);
  
  if($exten=='com')
    $price=999;
  elseif($exten=='in')
    $price=699;
  elseif($exten=='org')
    $price=499;
  else
    $price=399;

  $cf=false;
  echo '<script  type="text/JavaScript">
  {
    let text = "Price of the choosen domain is \nClick OK to confirm purchase.";
    if (confirm(text) == true) {
      $cf=true.;
    } else {
      $cf=false;
      console.log($cf);
    }
    document.getElementById("demo").innerHTML = text;
  }
  </script>';
//   let text = "Price of the choosen domain is "'.$price.'"\nClick OK to confirm purchase.";
  if($cf){
    session_start();
    $sql="insert into domain values ('".$_SESSION['username']."','".$dname."','".$price."','".$date."')";
    if($conn->query($sql)==true){
        echo '<script>alert("Purchase Success!")</script>';
    } 
  }
  else{
    header("Location:index.php");
  }
}
  $conn->close();

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>