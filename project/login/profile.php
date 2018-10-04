<?php
include "../connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
if($email=="a@gmail.com")
{
	$selectdata="SELECT * FROM `signup`";
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
}
else
{
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
}



?>
 <html>
 <head>
 <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    text-align:center;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}


td {border: 1px #DDD solid; padding: 5px; cursor: pointer;}

.selected {
    background-color: red;
    color: #FFF;
}

</style>
 	<script src="../jquery.js"></script>

 </head>
<body>
	<table id="customers" align="center">
		<thead>
			<th>Id</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Mobile Number</th>
			<th>Email</th>
		</thead>
		<tbody>
		<?php 
foreach ($array as $value) {
	?>
<tr><?php 	foreach ($value as $val) {
?><td><?php echo $val;?></td>
<?php } ?>
</tr> <?php } ?>

</tbody>
	
	</table>
<button onclick="update()">Edit</button><button onclick="delete()">Delete</button>

    <input type="button" id="tst" value="OK" onclick="fnselect()" />
	<script>





// function update(e) {
//     if (selected[0]) selected[0].className = '';
//     e.target.parentNode.className = 'selected';
// }

function highlight(e) {
    if (selected[0]) selected[0].className = '';
    e.target.parentNode.className = 'selected';
}
function update(){
    

    
    var l=($("tr.selected td:first" ).html());
    alert(l);

    // window.location="edit.php+?id="+selectedData[0][0];
}



// 	 function dksfjdks() {
// 	 	     alert("fdf");

// }
	 
// function myFunction() {
//  var x = document.getElementById("customers").rows.length;
//     document.getElementById("demo").innerHTML = "Found " + x + " tr elements in the table.";
// }
    </script>
</body>
</html>