<?php
include "connection.php";
	$dataa = $_POST['datatable'];
    $chart = $_POST['charttype'];

$rl= "INSERT INTO `chatdata`(`data`,`chart_type`) VALUES ('$dataa','$chart')";
$quer=mysqli_query($conn,$rl);
?>
