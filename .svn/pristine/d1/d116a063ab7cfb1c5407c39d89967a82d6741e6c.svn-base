<?php

if(empty($_GET['id'])) die;

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

$ps = $conn->prepare("SELECT C.`id`,C.`name`,COUNT(V.`guestid`) FROM `checkpoint` C LEFT JOIN `checkpoint_visits` V ON C.`id`=V.`cpid` WHERE C.`id`=?");
$ps->bind_param("i",$_GET['id']);
$ps->bind_result($id,$name,$visits);
$ps->execute();

if($ps->fetch())
{
	echo json_encode(array("id" => $id,"name" => $name,"visits" => $visits));
}

$ps->close();
$conn->close();
?>