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
	<meta name="keywords" content="" />
	<meta name="description" content="" />
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
			<li class="active"><a href="staffs.php"><i class="fa fa-users"></i>Staffs</a></li>
			<li><a href="#"><i class="fa fa-cog"></i>Preferences</a></li>
			<li><a href="bin/session/logout.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
		</ul>
	</div>

	<div class="templatemo-content-wrapper">
		<div class="templatemo-content">
			<ol class="breadcrumb">
				<li><a href="index.php">ENvite</a></li>
				<li class="active">Staffs</li>
			</ol>
			<h1>Staff List</h1>

			<p>Signed in as <?php echo getUser(); ?></p>

			<div class="row">
				<div class="col-md-12">
					<form class="form-inline">
						<div class="col-md-3 form-group-sm input-group form-inline">
							<div class="input-group-addon">Search:</div>
							<input type="text" class="form-control" id="search" placeholder="Search name...">
						</div>
						<div class="col-md-2 form-group-sm input-group">
							<div class="input-group-addon">Limit:</div>
							<select class="form-control" id="limit">
								<option value="10">10 Users</option>
								<option value="25">25 Users</option>
								<option value="50">50 Users</option>
							</select>
						</div>
					</form>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
							<thead>
							<tr>
								<th class="col-md-1" align="" id='colId'>No.</th>
								<th class="col-md-3" id='colName'>Staff Username</th>
								<th class="col-md-3" id='colGroup'>Position</th>
								<th class="col-md-3">Email</th>
								<th class="col-md-1">Actions</th>
							</tr>
							</thead>
							<tbody id='staffList'>
							</tbody>
							<tfoot>
							<tr>
								<td></td>
								<td><input type='text' class='form-control input-sm' id='newname' placeholder='username'
								           required></td>
								<td><select class="form-control input-sm" id="newgroup">
										<option value="User">User</option>
										<option value="Operator">Operator</option>
										<option value="Moderator">Moderator</option>
									</select></td>
								<td><input type='email' class='form-control input-sm' id='newemail'
								           placeholder='user@example.com' required></td>
								<td align='center'><a href='#' onclick='addStaff()' class='btn-sm btn-success'><span
											class='glyphicon glyphicon glyphicon-plus' aria-hidden='true'></span></a>
								</td>
							</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
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

<script src="js/jquery/jquery.min.js"></script>
<script src="js/boostrap/bootstrap.min.js"></script>
<script src="js/staffs.js"></script>
</body>
</html>