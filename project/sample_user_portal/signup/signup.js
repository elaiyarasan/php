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
		'dob':$('#dob').val(),
	}
	if(getdata.firstname==""||getdata.lastname==""||getdata.mobile_number==""||getdata.email==""||getdata.password==""||getdata.repassword==""||getdata.dob=="")
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

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}