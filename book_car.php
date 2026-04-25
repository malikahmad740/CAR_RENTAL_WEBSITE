<?php
include "db.php";
if(!isset($_SESSION['email'])){
  header("Location: login.php");
  exit;
}

$email=$_SESSION['email'];
$car=$_POST['car'];
$rp=$_POST['rent_place'];
$rtp=$_POST['return_place'];
$rd=$_POST['rent_date'];
$rtd=$_POST['return_date'];

mysqli_query($conn,"INSERT INTO bookings VALUES(NULL,'$email','$car','$rp','$rtp','$rd','$rtd',NOW())");

echo "<script>alert('Booking Successful');window.location='index.php'</script>";
?>
