<?php
  require('fpdf184/fpdf.php');
  $servername = "sql6.freemysqlhosting.net";
  $username = "sql6462912";
  $password = "gPduSIJu5R";
  $db="sql6462912";
  
  // Create connection
   $conn = new mysqli($servername, $username, $password,$db);
   session_start();
   $sql="select * from domain where username='".$_SESSION['username']."'";  
   $result=mysqli_query($conn,$sql);
   $pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(150,10,'All Your Domain Status',0,1,'C');
$pdf->Cell(60,10,'Domain',1,0,'L');
$pdf->Cell(40,10,'Amount',1,0,'C');
$pdf->Cell(40,10,'Expiry date',1,1,'C');
while($rows = mysqli_fetch_array($result)){
   while($rows = mysqli_fetch_array($result)){
       $pdf->SetFont('Arial','',16);
       $pdf->Cell(60,10,$rows['domainname'],1,0,'L');
       $pdf->Cell(40,10,$rows['amount'],1,0,'C');
       $pdf->Cell(40,10,$rows['expiredate'],1,1,'C');
   }
}
$pdf->Output();
   
?>