<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");  
 $connect = mysqli_connect("localhost", "root", "root", "testing");  
  
 $result = mysqli_query($connect, "SELECT `name` FROM `tbl_images` ORDER BY id DESC ");  
 
// $outp = "";
$array=array();

while($rs = mysqli_fetch_array($result)) 
{

	$obj=new stdclass();

	$obj->name=$rs["name"];
	array_push($array,$obj);
    // if ($outp != "") {$outp .= ",";}
    // $outp .= '{"name":"'  . $rs["name"] . '",';
}
// $outp ='{"records":['.$outp.']}';
echo json_encode($array);
$connect->close();


?>



