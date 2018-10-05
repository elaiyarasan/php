<?php
$conn = mysqli_connect('localhost','root','root','project1');

// include "connection.php";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobile_number=$_POST['mobile_number'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['dob'];

$ins="INSERT INTO `signup`(`firstname`, `lastname`, `mobile_number`, `email`, `password`,`dob`) VALUES ('$firstname','$lastname','$mobile_number','$email','$password','$dob')";
$quer=mysqli_query( $conn,$ins);
echo "hi";
?>