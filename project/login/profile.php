<?php
include "../connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
echo $email;
$selectdata="SELECT `id`, `firstname`, `lastname`, `mobile_number`, `email` FROM `signup` WHERE `email`= '$email' AND `password`='$password'";
$con=mysqli_query($conn,$selectdata);
$array = array();
while($row = mysqli_fetch_array($con))
{
	$obj=new stdclass();
	$obj->id=$row['id'];
	$obj->firstname=$row['firstname'];
	$obj->lastname=$row['lastname'];
	$obj->mobile_number=$row['mobile_number'];
	$obj->email=$row['email'];
	array_push($array, $obj);
}

echo json_encode($array);
?>
