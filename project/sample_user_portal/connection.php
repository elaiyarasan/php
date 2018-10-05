<?php
$conn = mysqli_connect('localhost','root','root','project1');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<p>
	<?php
// echo "Connected successfully";
?>
</p>
<?php

?>