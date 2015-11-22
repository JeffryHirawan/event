<?php
require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$query = "SELECT E.`id`,E.`name`,E.`type`,E.`mode`,U.`username`,DATE_FORMAT(E.`date_start`,'%d-%m-%y'),DATE_FORMAT(E.`date_end`,'%d-%m-%y'),E.`status` FROM `event` E LEFT JOIN `user` U ON U.`id`=E.`pic`";

if(!empty($_GET['status']) && ($_GET['status'] != "All"))
{
	$status = $conn->real_escape_string(htmlentities($_GET['status']));
	$query .= " WHERE `status`='$status'";
	if(!empty($_GET['search']))
	{
		$search = $conn->real_escape_string(htmlentities($_GET['search']));
		$query .= " AND `name` LIKE '$search%'";
	}
}
else if(!empty($_GET['search']))
{
	$search = $conn->real_escape_string(htmlentities($_GET['search']));
	$query .= " WHERE `name` LIKE '$search%'";
}

$query .= " ORDER BY `id` ASC";

if(!empty($_GET['limit']))
{
	$limit = $conn->real_escape_string(htmlentities($_GET['limit']));
	$query .= " LIMIT $limit";
}

$ps = $conn->prepare($query);
$ps->execute();
$ps->bind_result($id, $name, $type, $mode, $pic, $start_date, $end_date, $status);

$output = "";

while($ps->fetch())
{
	$row_status = "";
	switch($status)
	{
		case "Upcoming":
		{
			$row_status = "warning";
			break;
		}
		case "Ongoing":
		{
			$row_status = "info";
			break;
		}
		case "Finished":
		{
			$row_status = "success";
			break;
		}
		case "Cancelled":
		{
			$row_status = "danger";
			break;
		}
	}
	$output .= "<tr class='$row_status' hidden><td>$id</td><td>$name</td><td>$type</td><td>$start_date</td><td>$end_date</td><td>$pic</td><td>$mode</td><td align='center'><a class='btn-sm btn-default' href='guestlist.php?event=$id'>View</a></td><td align='center'><a class='btn-sm btn-default' href='cplist.php?event=$id'>View</a></td><td align='center'><a class='btn-sm btn-success' href='trackevent.php?event=$id'>Statistics</a></td></tr>";
}

echo $output;
$ps->close();
$conn->close();
?>