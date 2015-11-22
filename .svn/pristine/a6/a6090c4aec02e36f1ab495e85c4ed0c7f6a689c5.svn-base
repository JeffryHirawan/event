<?php
if(empty($_GET['id'])) die;

require_once("../../conf/db.php");

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$ps = $conn->prepare("SELECT DISTINCT `date` FROM `event_attendance` WHERE `event_id`=?");
$ps->bind_param("i",$_GET['id']);
$ps->bind_result($date);
$ps->execute();
$ps->store_result();

$result = array();
while($ps->fetch())
{
	$result[] = array("date" => $date);
}
echo json_encode($result);

$ps->close();
$conn->close();
?>