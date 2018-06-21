function signup()
{
	
	var getdata =
	{
		'firstname':$('#firstname').val(),
		'lastname':$('#lastname').val(),
		'mobile_number':$('#mobile_number').val(),
		'email':$('#email').val(),
		'password':$('#password').val(),
		'repassword':$('#repassword').val(),
	}
	if(getdata.firstname==""||getdata.lastname==""||getdata.mobile_number==""||getdata.email==""||getdata.password==""||getdata.repassword=="")
	{
		alert("fill all the column");
	}
	else{

if(getdata.password==getdata.repassword)
{
	

	$.ajax({
		method :'POST',
		url : "register.php",
		data :getdata,
	});



window.location.href = "../login/login.php";

}
else
{
	alert("Your password was mismatching with reenter password");
}
}
}