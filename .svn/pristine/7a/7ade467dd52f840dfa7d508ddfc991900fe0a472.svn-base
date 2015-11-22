<?php
if(empty($_GET['id'])) die;
require_once("../../conf/db.php");

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$ps = $conn->prepare("SELECT C.`id`,C.`name`,COUNT(V.`guestid`) FROM `checkpoint` C LEFT JOIN `checkpoint_visits` V ON V.`cpid`=C.`id` WHERE C.`eventid`=? GROUP BY C.`id`");
$ps->bind_param("i",$_GET['id']);
$ps->bind_result($id,$name,$count);
$ps->execute();

$result = array();

while($ps->fetch())
{
	$result[] = array("id" => $id, "name" => $name, "count" => $count);
}
echo json_encode($result);

$ps->close();
$conn->close();

?>