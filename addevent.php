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
            <li class="active"><a href="addevent.php"><i class="fa fa-plus"></i>Add New Event</a></li>
            <li><a href="allevent.php"><i class="fa fa-map-marker"></i>All Events</a></li>
            <li><a href="staffs.php"><i class="fa fa-users"></i>Staffs</a></li>
            <li><a href="#"><i class="fa fa-cog"></i>Preferences</a></li>
            <li><a href="bin/session/logout.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
    </div>

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li><a href="index.php">ENvite</a></li>
                <li class="active">Add New Event</li>
            </ol>
            <h1>Add New Event</h1>

            <p>Signed in as <?php echo getUser(); ?></p>

            <div class="row">
                <div class="col-md-12">
                    <form role="form" id="eventForm">
                        <div class="row">
                            <div class="col-md-4 margin-bottom-15">
                                <label for="eventName" class="control-label">Event Name</label>
                                <input type="text" class="form-control" id="eventName"
                                       placeholder="E.g.: Event Expo 20xx">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                                <label for="eventType" class="control-label">Event Type</label>
                                <input type="text" class="form-control" id="eventType" placeholder="E.g.: Seminar">
                            </div>
                            <div class="col-md-2 margin-bottom-15">
                                <label for="eventMode" class="control-label">Event Mode</label>
                                <select class="form-control" id="eventMode">
                                    <option value="Registration">Registration</option>
                                    <option value="Invitation">Invitation</option>
                                </select>
                            </div>
                            <div class="col-md-2 margin-bottom-15">
                                <label for="eventPic" class="control-label">PIC</label>
                                <select class="form-control" id="eventPic">
                                    <option>No PIC</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="startdate">Start Date</label>

                                <div class='input-group date' id='startdate'>
                                    <input type='text' class="form-control" id="eventStartDate"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="enddate">End Date</label>

                                <div class='input-group date' id='enddate'>
                                    <input type='text' class="form-control" id="eventEndDate"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="starttime">Start Time</label>

                                <div class='input-group date' id='starttime'>
                                    <input type='text' class="form-control" id="eventStartTime"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="endtime">End Time</label>

                                <div class='input-group date' id='endtime'>
                                    <input type='text' class="form-control" id="eventEndTime"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary pull-right" value="Create Event">
                            </div>
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
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap/collapse.js"></script>
<script src="js/bootstrap/transition.js"></script>
<script src="js/moment/moment.js"></script>
<script src="js/moment/id.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/addevent.js"></script>
</body>
</html>