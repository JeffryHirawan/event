<?php
require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$ps = $conn->prepare("SELECT E.`id`,E.`name`,E.`type`,E.`mode`,U.`username`,DATE_FORMAT(E.`date_start`,'%d-%m-%y'),DATE_FORMAT(E.`date_end`,'%d-%m-%y') FROM `event` E LEFT JOIN `user` U ON U.`id`=E.`pic` ORDER BY E.`id` DESC LIMIT 10");
$ps->execute();
$ps->bind_result($id, $name, $type, $mode, $pic, $start_date, $end_date);

$output = array();
while($ps->fetch())
{
	$output[] = array("id" => $id, "name" => $name, "type" => $type, "mode" => $mode, "pic" => $pic, "start_date" => $start_date, "end_date" => $end_date);
}
echo json_encode($output);

$ps->close();
$conn->close();
?>