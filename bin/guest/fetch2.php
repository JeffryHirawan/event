<?php

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$query = "SELECT `email`,`name`,`address`,`phone`,DATE_FORMAT(`register_date`,'%d/%c/%Y') FROM `guest` WHERE `id`=?";

$ps = $conn->prepare($query);
$ps->bind_param("i",$_GET['id']);
$ps->execute();
$ps->bind_result($email, $name, $address, $phone, $register_date);


while($ps->fetch())
{
	echo json_encode(array("name" => $name, "email" => $email, "address" => $address, "phone" => $phone, "register" => $register_date));
}

$ps->close();
$conn->close();

?>