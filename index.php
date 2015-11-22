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

			<li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
			<li><a href="addevent.php"><i class="fa fa-plus"></i>Add New Event</a></li>
			<li><a href="allevent.php"><i class="fa fa-map-marker"></i>All Events</a></li>
			<li><a href="staffs.php"><i class="fa fa-users"></i>Staffs</a></li>
			<li><a href="preferences.php"><i class="fa fa-cog"></i>Preferences</a></li>
			<li><a href="bin/session/logout.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
		</ul>
	</div>

	<div class="templatemo-content-wrapper">
		<div class="templatemo-content">
			<ol class="breadcrumb">
				<li class="active">ENvite</li>
			</ol>
			<h1>Welcome</h1>

			<p>Signed in as <?php echo getUser(); ?></p>

			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
							<thead>
							<tr>
								<th class="col-md-1">No.</th>
								<th class="col-md-3">Event Name</th>
								<th class="col-md-2">Event Type</th>
								<th class="col-md-2">Start Date</th>
								<th class="col-md-2">End Date</th>
								<th class="col-md-1">PIC</th>
								<th class="col-md-1">Mode</th>
							</tr>
							</thead>
							<tbody id="eventList"></tbody>
						</table>
					</div>
				</div>
			</div>
			<!--end of contents-->
		</div>
	</div>
</div>
<!-- Modal -->
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
<script src="js/index.js"></script>
</body>
</html>