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

<<<<<<< .mine
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class = "active">View Events</li>
          </ol>
          <h1>EVENT NAME HERE</h1>
          <p>Signed in as <?php echo getUser(); ?></p>
          
          <select id ="date" onchange='getDate()'>
              <option value="2015-10-28">2015-10-28</option>
              <option value="2015-10-29">2015-10-29</option>
              <option value="2015-10-30">2015-10-30</option>
          </select>
||||||| .r20
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class = "active">View Events</li>
          </ol>
          <h1>EVENT NAME HERE</h1>
          <p>Signed in as <?php echo getUser(); ?></p>
          
          <select id ="date" onselect="getDate()">
              <option value="2015-10-28">2015-10-28</option>
              <option value="2015-10-29">2015-10-29</option>
              <option value="2015-10-30">2015-10-30</option>
          </select>
=======
			<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
			<li><a href="addevent.php"><i class="fa fa-plus"></i>Add New Event</a></li>
			<li class="active"><a href="allevent.php"><i class="fa fa-map-marker"></i>All Events</a></li>
			<li><a href="staffs.php"><i class="fa fa-users"></i>Staffs</a></li>
			<li><a href="preferences.php"><i class="fa fa-cog"></i>Preferences</a></li>
			<li><a href="bin/session/logout.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
		</ul>
	</div>
>>>>>>> .r25

	<div class="templatemo-content-wrapper">
		<div class="templatemo-content">
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li><a href="allevent.php">All Events</a></li>
				<li class="active">Statistics</li>
			</ol>
			<h1>EVENT NAME HERE</h1>
			<p>Signed in as <?php echo getUser(); ?></p>

<<<<<<< .mine
                <div class="row templatemo-chart-row">
                  <div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                    <canvas id="check-in-chart"></canvas>
                    <h4>Check-in Frequency</h4>
                    <span class="text-muted"></span>  
                  </div>
                
                  <div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                    <canvas id="check-out-chart"></canvas>
                    <h4>Check-out Frequency</h4>
                    <span class="text-muted"></span>  
                  </div>
                </div>
||||||| .r20
                <div class="row templatemo-chart-row">
                  <div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                    <canvas id="check-in-chart"></canvas>
                    <h4>Check-in Frequency</h4>
                    <span class="text-muted">Maecenas non</span>  
                  </div>
                
                  <div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                    <canvas id="check-out-chart"></canvas>
                    <h4>Check-out Frequency</h4>
                    <span class="text-muted">Maecenas non</span>  
                  </div>
                </div>
=======
			<div class="row">
				<div class="col-md-12">
					<form class="form-inline">
						<div class="col-md-3 form-group-sm input-group">
							<div class="input-group-addon">Date:</div>
							<select class="form-control" id="date"></select>
						</div>
					</form>
				</div>
			</div>
			<hr>
			<div class="templatemo-charts">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row templatemo-chart-row">
							<div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<canvas id="check-in-chart"></canvas>
								<h4>Check-in Frequency</h4>
							</div>
							<div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<canvas id="check-out-chart"></canvas>
								<h4>Check-out Frequency</h4>
							</div>
						</div>
						<div class="row templatemo-chart-row">
							<div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<canvas id="guest-amount-chart"></canvas>
								<h4>Guest Amount</h4>
							</div>
							<div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<canvas id="attendance-rate-chart"></canvas>
								<h4>Attendance Rate</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-hover table-bordered">
							<thead><tr>
								<th class="col-md-1">ID</th>
								<th class="col-md-3">Checkpoint</th>
								<th class="col-md-2">Visits</th>
							</tr></thead>
							<tbody id="checkpoints">
>>>>>>> .r25

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<<<<<<< .mine
                <div class="row templatemo-chart-row">
                  <div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                    <canvas id="guest-amount-chart"></canvas>
                    <h4>Guest Amount</h4>
                    <span class="text-muted"></span>  
                  </div>
                
                  <div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                    <canvas id="attendance-rate-chart"></canvas>
                    <h4>Attendance Rate</h4>
                    <span class="text-muted"></span>  
                  </div>
                </div>
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
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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
||||||| .r20
                <div class="row templatemo-chart-row">
                  <div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                    <canvas id="guest-amount-chart"></canvas>
                    <h4>Guest Amount</h4>
                    <span class="text-muted">Maecenas non</span>  
                  </div>
                
                  <div class="templatemo-chart-box col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                    <canvas id="attendance-rate-chart"></canvas>
                    <h4>Attendance Rate</h4>
                    <span class="text-muted">Maecenas non</span>  
                  </div>
                </div>
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
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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
=======
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
>>>>>>> .r25

<footer class="templatemo-footer">
	<div class="templatemo-copyright">
		<p>Copyright &copy; 2015 Your Company Name</p>
	</div>
</footer>
</div>

<<<<<<< .mine
		// Create connection
		$conn = new mysqli($DBservername, $DBusername, $DBpassword, $db);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
                $eventID = $_GET['event'];
                
                //ATTEDANCE
		$sql = "SELECT * FROM guest WHERE event_id=".$eventID;
		$result = mysqli_query($conn, $sql);
		$totalGuest  = mysqli_num_rows($result);
                
                $result->free();
                
                //$date = date("Y-m-d");
                $date = "2015-10-29";
                $sql = "SELECT * FROM `event_attendance` WHERE `event_id`='$eventID' AND `date` ='$date'";
                $result = mysqli_query($conn, $sql);
		$totalAttendance  = mysqli_num_rows($result);
                
                
                $absent = $totalGuest-$totalAttendance;
                $attend = $totalAttendance;
               
                $result->free();
               
                //Check in frequency
                $sql = "SELECT HOUR(enter_time) as hour, COUNT(*) as num_rows FROM `event_attendance` where date = '$date' GROUP BY HOUR(enter_time)";
                $result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)) {
                        $hour[]=$row["hour"];
                        $amount[]=$row["num_rows"];
                    }
                }
                $result->free();
                
                 //Check out frequency
                $sql = "SELECT HOUR(exit_time) as hour, COUNT(*) as num_rows FROM `event_attendance` where date = '$date' GROUP BY HOUR(enter_time)";
                $result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)) {
                        $hourExit[]=$row["hour"];
                        $amountExit[]=$row["num_rows"];
                    }
                }
                $result->free();
                
                 //guest per hour
                $sql = "SELECT HOUR(enter_time) as hour, COUNT(*) as num_rows FROM `event_attendance` where date = '$date' GROUP BY HOUR(enter_time)";
                $result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)) {
                        $hourGuest[]=$row["hour"];
                        $amountGuest[]=0;
                        $amountGuest[]=$row["num_rows"];
                    }
                }
                $result->free();
            
               
              
                        
                
    ?>
        
    function getDate() {
    var value = document.getElementById("date").value;
    alert(value);
    document.cookie="date=2015-10-29;";
    }
    // Line chart
      var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var checkin = {
        labels : <?php echo json_encode($hour) ?>,
        datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : <?php echo json_encode($amount); ?>
        }
        ]

      } 
      var checkout = {
        labels :  <?php echo json_encode($hour) ?>,
        datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : <?php echo json_encode($amountExit); ?>
        }
        ]

      } 
      
      var guestAmount = {
        labels :  <?php echo json_encode($hour) ?>,
        datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : <?php echo json_encode($amountGuest); ?>
        }
        ]

      } 

      var pieChartData = [
      {
        value: <?php echo $absent ?>,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Absent"
      },
      {
        value: <?php echo $attend ?>,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Attend"
      }
      ] // pie chart data


      window.onload = function(){
        var ctx_bar_in = document.getElementById("check-in-chart").getContext("2d");
        var ctx_bar_out = document.getElementById("check-out-chart").getContext("2d");
        var ctx_line = document.getElementById("guest-amount-chart").getContext("2d");
        var ctx_pie = document.getElementById("attendance-rate-chart").getContext("2d");

        window.barIn = new Chart(ctx_bar_in).Bar(checkin, {
          responsive: true
        });
        window.barOut = new Chart(ctx_bar_out).Bar(checkout, {
          responsive: true
        });
        window.myLine = new Chart(ctx_line).Line(checkout, {
          responsive: true
        });
        window.myPieChart = new Chart(ctx_pie).Pie(pieChartData,{
          responsive: true
        });
      }

  </script>
  <?php
   print_r($hour);
   print_r($amount);
   print_r($amountGuest);
  ?>
||||||| .r20
		// Create connection
		$conn = new mysqli($DBservername, $DBusername, $DBpassword, $db);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
                $eventID = $_GET['event'];
                
                //ATTEDANCE
		$sql = "SELECT * FROM guest WHERE event_id=".$eventID;
		$result = mysqli_query($conn, $sql);
		$totalGuest  = mysqli_num_rows($result);
                
                $result->free();
                
                //$date = date("Y-m-d");
                $date = "2015-10-29";
                $sql = "SELECT * FROM `event_attendance` WHERE `event_id`='$eventID' AND `date` ='$date'";
                $result = mysqli_query($conn, $sql);
		$totalAttendance  = mysqli_num_rows($result);
                
                
                $absent = $totalGuest-$totalAttendance;
                $attend = $totalAttendance;
               
                $result->free();
               
                //Check in frequency
                $sql = "SELECT HOUR(enter_time) as hour, COUNT(*) as num_rows FROM `event_attendance` where date = '$date' GROUP BY HOUR(enter_time)";
                $result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)) {
                        $hour[]=$row["hour"];
                        $amount[]=$row["num_rows"];
                    }
                }
                $result->free();
                
                 //Check out frequency
                $sql = "SELECT HOUR(exit_time) as hour, COUNT(*) as num_rows FROM `event_attendance` where date = '$date' GROUP BY HOUR(enter_time)";
                $result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)) {
                        $hourExit[]=$row["hour"];
                        $amountExit[]=$row["num_rows"];
                    }
                }
                $result->free();
            
               
              
                        
                
    ?>
        
    function getDate() {
    var value = document.getElementById("date").value;
    document.cookie="date=2015-10-29;";
    }
    // Line chart
      var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var checkin = {
        labels : <?php echo json_encode($hour) ?>,
        datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : <?php echo json_encode($amount); ?>
        }
        ]

      } 
      var checkout = {
        labels :  <?php echo json_encode($hour) ?>,
        datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : <?php echo json_encode($amountExit); ?>
        }
        ]

      } 

      var pieChartData = [
      {
        value: <?php echo $absent ?>,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Absent"
      },
      {
        value: <?php echo $attend ?>,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Attend"
      }
      ] // pie chart data


      window.onload = function(){
        var ctx_bar_in = document.getElementById("check-in-chart").getContext("2d");
        var ctx_bar_out = document.getElementById("check-out-chart").getContext("2d");
        var ctx_line = document.getElementById("guest-amount-chart").getContext("2d");
        var ctx_pie = document.getElementById("attendance-rate-chart").getContext("2d");

        window.barIn = new Chart(ctx_bar_in).Bar(checkin, {
          responsive: true
        });
        window.barOut = new Chart(ctx_bar_out).Bar(checkout, {
          responsive: true
        });
        window.myLine = new Chart(ctx_line).Line(checkout, {
          responsive: true
        });
        window.myPieChart = new Chart(ctx_pie).Pie(pieChartData,{
          responsive: true
        });
      }

  </script>
  <?php
   print_r($hour);
   print_r($amount);
   if(!isset($_COOKIE["date"])) {
    echo "Cookie named  date is not set!";
    } else {
    echo "Value is: " . $_COOKIE["date"];
    }
  ?>
=======
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/templatemo_script.js"></script>
<script src="js/statistics.js"></script>
>>>>>>> .r25
</body>
</html>