<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<?php
	require_once("bin/session/session.php");
	if(!isLoggedIn())
	{
		echo "<meta http-equiv='refresh' content='0; url=sign-in.html'>";
		die;
	}
	?>
	<title>eNVITE Control Panel</title>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/templatemo_main.css">
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
	<div class="navbar-header">
		<div class="logo"><h1>eNVITE Control Panel</h1></div>
	</div>
</div>
<div class="template-page-wrapper">
	<div class="navbar-collapse collapse templatemo-sidebar">
		<ul class="templatemo-sidebar-menu">
			<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
			<li><a href="addevent.php"><i class="fa fa-plus"></i>Add New Event</a></li>
			<li><a href="allevent.php"><i class="fa fa-map-marker"></i>All Events</a></li>
			<li><a href="staffs.php"><i class="fa fa-users"></i>Staffs</a></li>
			<li class="active"><a href="preferences.php"><i class="fa fa-cog"></i>Preferences</a></li>
			<li><a href="bin/session/logout.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
		</ul>
	</div>

	<div class="templatemo-content-wrapper">
		<div class="templatemo-content">
			<ol class="breadcrumb">
				<li>ENvite</li>
				<li class="active">Preferences</li>
			</ol>
			<h1>Welcome</h1>

			<p>Signed in as <?php echo getUser(); ?></p>

			<div class="row">
				<div class="col-md-12">
					<form id="passwordForm" class="form-horizontal">
						<div class="form-group">
							<label for="oldPass" class="col-md-2 control-label">Old Password</label>

							<div class="col-md-3">
								<input type="password" class="form-control" id="oldPass" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label for="newPass" class="col-md-2 control-label">New Password</label>

							<div class="col-md-3">
								<input type="password" class="form-control" id="newPass" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label for="confirmPass" class="col-md-2 control-label">Confirm Password</label>

							<div class="col-md-3">
								<input type="password" class="form-control" id="confirmPass" placeholder="Password">
							</div>
						</div>
						<div class="col-md-5">
							<input type="submit" class="btn btn-success pull-right" value="Change">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
			</div>
			<div class="modal-footer">
				<a href="sign-in.html" class="btn btn-primary">Yes</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
			</div>
		</div>
	</div>
</div>
<footer class="templatemo-footer">
	<div class="templatemo-copyright">
		<p>Copyright &copy; 2015 Your Company Name</p>
	</div>
</footer>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/templatemo_script.js"></script>
<script type="text/javascript">
	window.onload = function()
	{
	};

	$("form#passwordForm").submit(function(e)
	{
		e.preventDefault();

		var pass = $("input#oldPass").val();
		var newPass = $("input#newPass").val();
		var cPass = $("input#confirmPass").val();

		$.ajax(
		{
			url: "./bin/preferences/update.php",
			type: "POST",
			data:
			{
				oldPass: pass,
				newPass: newPass
			},
			cache: false,
			success: function(data)
			{

			}
		});
	});
</script>
</body>
</html>