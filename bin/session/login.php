<?php

if(empty($_POST['name']) || empty($_POST['password'])) echo json_encode(array("valid" => false,"message" => "Input is empty"));

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$ps = $conn->prepare("SELECT `id`,`username`,`group` FROM `user` WHERE `username`=? AND `password`=?");
$ps->bind_param("ss",$_POST['name'],$_POST['password']);
$ps->execute();

$result = json_encode(array("valid" => false,"message" => "Wrong username or password"));

$ps->bind_result($id,$username,$group);
if($ps->fetch())
{
	session_start();
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $username;
	$_SESSION['group'] = $group;
	$result = json_encode(array("valid" => true));
}

$ps->close();
$conn->close();

echo $result;

?>