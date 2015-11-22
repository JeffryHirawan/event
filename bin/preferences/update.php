<?php

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$ps = $conn->prepare("UPDATE guest SET name=?,email=?,phone=?,address=? WHERE id=?");
$ps->bind_param("ssssi",$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['address'],$_POST['id']);
$ps->execute();
$ps->close();

$ps = $conn->prepare("SELECT `id`,`email`,`name`,`address`,`phone`,DATE_FORMAT(`register_date`,'%d/%c/%Y') FROM `guest` WHERE `id`=?");
$ps->bind_param("i",$_POST['id']);
$ps->execute();
$ps->bind_result($id, $email, $name, $address, $phone, $register_date);

while($ps->fetch())
{
	echo "<td>$id</td><td>$name</td><td><a href='mailto:$email'>$email</a></td><td>$phone</td><td>$address</td><td>$register_date</td><td align='center'><a class='btn-sm btn-success' href='#'><span class='glyphicon glyphicon-print' aria-hidden='true'></span></a> <a class='btn-sm btn-info' href='#'><span class='glyphicon glyphicon-pencil' onclick='editGuest($id)' aria-hidden='true'></span></a> <a class='btn-sm btn-danger' onclick='deleteGuest($id)' href='#'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>";
}

$ps->close();
$conn->close();

?>