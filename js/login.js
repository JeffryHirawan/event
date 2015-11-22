$("form#loginForm").submit(function (e)
{
	e.preventDefault();
	$("loginMessage").html("");
	var name = $("input#username").val();
	var password = $("input#password").val();
	$.ajax(
	{
		url: "./bin/session/login.php",
		method: "POST",
		data:
		{
			name: name,
			password: password
		},
		cache:false,
		success: function (data)
		{
			var response = ((JSON && JSON.parse(data)) || $.parseJSON(data));
			if(response.valid)
			{
				window.location.replace("index.php");
			}
			else
			{
				$("#loginMessage").html(response.message);
			}
		}
	});
});