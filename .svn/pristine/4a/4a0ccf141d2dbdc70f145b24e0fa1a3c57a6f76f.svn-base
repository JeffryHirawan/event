<?php

if(empty($_GET['id'])) die;

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

$query = "SELECT C.`id`,C.`name`,COUNT(V.`guestid`) FROM `checkpoint` C LEFT JOIN `checkpoint_visits` V ON C.`id`=V.`cpid` WHERE C.`eventid`=?";
if(!empty($_GET['search']))
{
	$search = $conn->real_escape_string($_GET['search']);
	$query .= " AND C.`name` LIKE '$search%'";
}
$query .= " GROUP BY C.`id` LIMIT ".((empty($_GET['limit'])) ? 25 : $_GET['limit']);

$ps = $conn->prepare($query);
$ps->bind_param("i",$_GET['id']);
$ps->bind_result($id,$name,$visits);
$ps->execute();

$result = array();

while($ps->fetch())
{
	$result[] = array("id" => $id,"name" => $name,"visits" => $visits);
}

$ps->close();
$conn->close();
echo json_encode($result);
?>