<?php

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$query = "SELECT `track_code`,`name` FROM `guest` WHERE `id`=?";

$ps = $conn->prepare($query);
$ps->bind_param("i",$_GET['id']);
$ps->execute();
$ps->bind_result($code, $name);


while($ps->fetch())
{
	echo json_encode(array("code" => $code, "name" => $name));
}

$ps->close();
$conn->close();

?>