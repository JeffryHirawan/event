<?php
if(empty($_GET['id'])) die;

require_once("../../conf/db.php");

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$ps = $conn->prepare("SELECT COUNT(`id`) FROM `guest` WHERE `event_id`=?");
$ps2 = $conn->prepare("SELECT COUNT(`guest_id`) FROM `event_attendance` WHERE `event_id`=?".((empty($_GET['date'])) ? "" : " AND `date`=?")." GROUP BY `guest_id`");
$ps3 = $conn->prepare("SELECT TIME_FORMAT(`enter_time`,'%H'),COUNT(`guest_id`) FROM `event_attendance` WHERE `event_id`=?".((empty($_GET['date'])) ? "" : " AND `date`=?")." GROUP BY TIME_FORMAT(`enter_time`,'%H') ORDER BY TIME_FORMAT(`enter_time`,'%H') ASC");
$ps4 = $conn->prepare("SELECT TIME_FORMAT(`exit_time`,'%H'),COUNT(`guest_id`) FROM `event_attendance` WHERE `event_id`=?".((empty($_GET['date'])) ? "" : " AND `date`=?")." GROUP BY TIME_FORMAT(`exit_time`,'%H') ORDER BY TIME_FORMAT(`exit_time`,'%H') ASC");

if(empty($_GET['date']))
{
	$ps->bind_param("i",$_GET['id']);
	$ps2->bind_param("i",$_GET['id']);
	$ps3->bind_param("i",$_GET['id']);
	$ps4->bind_param("i",$_GET['id']);
}
else
{
	$ps->bind_param("i",$_GET['id']);
	$ps2->bind_param("is",$_GET['id'],$_GET['date']);
	$ps3->bind_param("is",$_GET['id'],$_GET['date']);
	$ps4->bind_param("is",$_GET['id'],$_GET['date']);
}


$ps->bind_result($totalGuest);
$ps2->bind_result($totalAttend);
$ps3->bind_result($time,$count);
$ps4->bind_result($time,$count);

$ps->execute();
$ps->store_result();
$ps->fetch();
$ps->free_result();

$ps2->execute();
$ps2->store_result();
$ps2->fetch();
$totalAttend = $ps2->num_rows;
$ps2->free_result();

$attendance = array("count" => $totalAttend, "total" => $totalGuest);

$enterHour = array();
$enterCount = array();
$exitHour = array();
$exitCount = array();

$ps3->execute();
$ps3->store_result();
while($ps3->fetch())
{
	$enterHour[] = $time.":00";
	$enterCount[] = $count;
}
$ps3->free_result();

$ps4->execute();
$ps4->store_result();
while($ps4->fetch())
{
	$exitHour[] = $time.":00";
	$exitCount[] = $count;
}
$ps4->free_result();

$result = array("attendance" => $attendance, "enterHour" => $enterHour, "enterCount" => $enterCount, "exitHour" => $exitHour, "exitCount" => $exitCount);
echo json_encode($result);

$ps2->close();
$ps->close();
$conn->close();
?>