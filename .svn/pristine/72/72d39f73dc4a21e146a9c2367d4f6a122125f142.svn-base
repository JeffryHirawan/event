<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ENvite Control Panel</title>
    <?php
        require_once("bin/session/session.php");
        if(!isLoggedIn())
        {
            echo "<meta http-equiv='refresh' content='0; url=sign-in.html'>";
            die;
        }
    ?>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/templatemo_main.css">
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <div class="logo"><h1>ENvite Control Panel</h1></div>
    </div>
</div>
<div class="template-page-wrapper">
    <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
            <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="addevent.php"><i class="fa fa-plus"></i>Add New Event</a></li>
            <li class="active"><a href="allevent.php"><i class="fa fa-map-marker"></i>All Events</a></li>
            <li><a href="staffs.php"><i class="fa fa-users"></i>Staffs</a></li>
            <li><a href="preferences.php"><i class="fa fa-cog"></i>Preferences</a></li>
            <li><a href="bin/session/logout.php"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
    </div>

    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li><a href="index.php">ENvite</a></li>
                <li class="active">All Events</li>
            </ol>
            <h1>Event List</h1>
            <p>Signed in as <?php echo getUser(); ?></p>

            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline">
                        <div class="col-md-3 form-group-sm input-group form-inline">
                            <div class="input-group-addon">Search:</div>
                            <input type="text" class="form-control" id="search" placeholder="Search event...">
                        </div>
                        <div class="col-md-2 form-group-sm input-group">
                            <div class="input-group-addon">Limit:</div>
                            <select class="form-control" id="limit">
                                <option value="10">10</option>
                                <option value="25" selected>25</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group-sm input-group">
                            <div class="input-group-addon">Filter status:</div>
                            <select class="form-control" id="filter">
                                <option value="All" selected>All</option>
                                <option value="Upcoming">Upcoming</option>
                                <option value="Ongoing">Ongoing</option>
                                <option value="Success">Success</option>
                                <option value="Cancelled">Cancelled</option>
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
                                <th class="col-md-1">No.</th>
                                <th class="col-md-2">Event Name</th>
                                <th class="col-md-2">Event Type</th>
                                <th class="col-md-1">Start Date</th>
                                <th class="col-md-1">End Date</th>
                                <th class="col-md-1">PIC</th>
                                <th class="col-md-1">Mode</th>
                                <th class="col-md-1">Guest List</th>
                                <th class="col-md-1">Checkpoints</th>
                                <th class="col-md-1">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="eventList"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Info</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="warning">
                            <td>Upcoming</td>
                        </tr>
                        <tr class="info">
                            <td>Ongoing</td>
                        </tr>
                        <tr class="success">
                            <td>Finished</td>
                        </tr>
                        <tr class="danger">
                            <td>Cancelled</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-10">
                    <div class="btn btn-primary pull-right">
                        <a href="addevent.php">Add New Event</a>
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
</body>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/templatemo_script.js"></script>
<script src="js/event.js"></script>
</html>