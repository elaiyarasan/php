<?php
include "connection.php";
$select_data="SELECT data, count(*) AS count,chart_type FROM chatdata WHERE data is not null GROUP BY data";
$query=mysqli_query($conn,$select_data);
$array=array();
while($row = mysqli_fetch_array($query))
{
	$obj=new stdclass();
	$obj->count=$row['count'];
	$obj->data=$row['data'];
	$obj->chart_type=$row['chart_type'];
	array_push($array, $obj);

}
echo json_encode($array);

?>
