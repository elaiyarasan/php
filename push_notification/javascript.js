function go()
{
	var data=
	{
		'mobile' : $('#mobile').val(),
	}
	$.ajax({
		type:'POST',
		url:'api.php',
		data : data,
	});
}