<?php 
include "../connection.php";
$id=$_POST['id'];
$dob=$_POST['dob'];
ECHO $dob;
$del=mysqli_query($conn,"DELETE FROM `signup` WHERE `id` ='$id' and `dob`='$dob'");

?>