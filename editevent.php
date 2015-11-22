<!DOCTYPE html>
<head>
  <meta charset="utf-8">
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
          
          <li class="active"><a href="addevent.php"><i class="fa fa-plus"></i>Add New Event</a></li>
          <li><a href="allevent.php"><i class="fa fa-map-marker"></i>All Events</a></li>
          <li><a href="staffs.php"><i class="fa fa-users"></i>Staffs</a></li>
          <li><a href="preferences.php"><i class="fa fa-cog"></i>Preferences</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
              <li><a href="allevent.php">All Events</a></li>
            <li class = "active">Edit Event</li>
          </ol>
          <h1>Edit Event</h1>
          <p>Signed in as Administrator</p>
          
          <!--contents-->
            <div class="row">
                <div class="col-md-12">
                    <form role="form">
                        <div class="row">
                            <div class="col-md-6 margin-bottom-15">
                                <label for="eventName" class="control-label">Event Name</label>
                                <input type="text" class="form-control" id="eventName" placeholder="E.g.: Event Expo 20xx">   
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                                <label for="eventType" class="control-label">Event Type</label>
                                <input type="text" class="form-control" id="eventType" placeholder="E.g.: Seminar">
                            </div>
                            <div class="col-md-3 margin-bottom-15">
                                <label for="eventMode" class="control-label">Event Mode</label>
                                <select class="form-control" id="eventMode">
                                    <option>Registration</option>
                                    <option>Invitation</option>
                                </select>
                            </div>
                            <div class="col-md-3 margin-bottom-15">
                                <label for="pic" class="control-label">PIC</label>
                                <select class="form-control" id="pic">
                                    <option>Budi</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Start Time</label>
                            </div>
                            <div class="col-md-6">
                                <label>End Time</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 margin-bottom-15">
                                <div class="form-group" id="starttime">
                                </div>
                                <!--
                                <label for="startTime" class="control-label">Start Time</label>
                                <div class="input-group date" id="starttime">
                                    <input type="text" class="form-control" id="starttime" placeholder="Start Time">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                -->
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                                <div class="form-group" id="endtime">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="btn btn-primary pull-right">
                                  <a href="#">Create Event</a>
                                </div>
                            </div>
                        </div>
                    </form>
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
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap/collapse.js"></script>
    <script src="js/bootstrap/transition.js"></script>
    <script src="js/moment/moment.js"></script>
    <script src="js/moment/id.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/templatemo_script.js"></script>
    <script type="text/javascript">

    window.onload = function(){
        $('#starttime').datetimepicker({
            inline:true,
            sideBySide:true
        });
        $('#endtime').datetimepicker({
            inline:true,
            sideBySide:true
        });
        $("#starttime").on("dp.change", function (e) {
            $('#endtime').data("DateTimePicker").minDate(e.date);
        });
        $("#endtime").on("dp.change", function (e) {
            $('#starttime').data("DateTimePicker").maxDate(e.date);
        });
    };
    
    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
      // $.ajax(...).always(function () {
      //   btn.button('reset');
      // });
  });
  </script>
</body>
</html>