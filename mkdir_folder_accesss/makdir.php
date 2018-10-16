<!DOCTYPE html>
<html>
<head>
	<title>makeDirectory</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<input type="date" id="date">
<button onclick="makeDirectory()">Submit</button>
<script>


function makeDirectory()
{ 
    var modalDetails=
    {
        
        "date":$("#date").val()
         }
    

 $.ajax({
            type: "POST",
            url: "createdirectory.php",
            data: modalDetails
            });
}


// 	function makeDirectory()
// 	{
// 	var name=
// 	{
// 'date':$.('#date').val(),
// }
// 	$.ajax({
// 		url: "createdirectory.php",
//       type: "POST",
//       data:name
// 	});
// 	}
</script>
</body>
</html>