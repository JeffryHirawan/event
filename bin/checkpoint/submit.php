<?php

if(empty($_POST['id']) || empty($_POST['name'])) die;

require_once("../../conf/db.php");

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$ps = $conn->prepare("INSERT INTO `checkpoint` VALUES(0,?,?)");
$ps->bind_param("is",$_POST['id'],$_POST['name']);
$ps->execute();

if($ps->affected_rows == 1)
{
	echo $ps->insert_id;
}

$ps->close();
$conn->close();
?>