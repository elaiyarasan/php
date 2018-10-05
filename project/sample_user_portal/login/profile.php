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
    $obj->dob=$row['dob'];

	array_push($array, $obj);
}
}
else
{
$selectdata="SELECT `id`, `firstname`, `lastname`, `mobile_number`, `email`,`dob` FROM `signup` WHERE `email`= '$email' AND `password`='$password'";
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
  $obj->dob=$row['dob'];
	array_push($array, $obj);
}
}



?>
  <?php include"../topnav.php";?>

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
.button:hover {background-color: #3e8e41}
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
      <th>Date of birth</th>
		</thead>
		<tbody>
		<?php 
foreach ($array as $value) {
	?>
<tr><?php 	foreach ($value as $val) {
?><td><?php echo $val;?></td>
<?php } ?>
</tr> <?php } ?>
<tr><td colspan="6" style="background-color:#4CAF50"><input type="button"  id="tst" value="DELETE" onclick="fnselect()" style="display: inline-block;
  padding: 15px 25px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  outline: none;
  color: #fff;
  background-color: red;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;"/></td></tr>
</tbody>
<!-- <tfoot style="margin-top:1300px"></tfoot>
 -->
</table> 
    <input type="hidden" id="value">
<input type="hidden" id="dob">
<!-- <button onclick="edit()">edit</button> -->

<script>

function edit()
{
	    var txt;
    var person = prompt("Please enter the date of birth in this formate(YYYY-MM-DD)", "");
    if (person == null || person == "") {
        alert("Enter the dob");
        txt="please Enter the dob";
    } else {
        txt =person;
    }
    document.getElementById("dob").value = txt;
}



function highlight(e) 
{

    if (selected[0]) selected[0].className = '';
    e.target.parentNode.className = 'selected';
   
}

	var table = document.getElementById('customers'),
    selected = table.getElementsByClassName('selected');
	table.onclick = highlight;

function fnselect()
{
    edit();
    var l=$("tr.selected td:first" ).html();
	document.getElementById("value").value=l;
var data=
	{
    	'id':document.getElementById("value").value,
'dob':document.getElementById('dob').value,
	}
 $.ajax({
	 method:'POST',
	url:'delete.php',
	data:data,
	});
 location.reload();
}

</script>
</body>
</html>