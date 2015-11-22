<?php

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$query = "SELECT `id`,`email`,`name`,`address`,`phone`,DATE_FORMAT(`register_date`,'%d/%c/%Y') FROM `guest` WHERE `event_id`=?";

if(!empty($_GET['search']))
{
	$search = $conn->real_escape_string(htmlentities($_GET['search']));
	$query .= " AND `name` LIKE '$search%'";
}

$limit = $conn->real_escape_string(htmlentities($_GET['limit']));
$query .= " ORDER BY `id` ASC LIMIT $limit";

$ps = $conn->prepare($query);
$ps->bind_param("i",$_GET['id']);
$ps->execute();
$ps->bind_result($id, $email, $name, $address, $phone, $register_date);

$output = "";

while($ps->fetch())
{
	$output .= "<tr id='entry_$id' hidden><td>$id</td><td>$name</td><td><a href='mailto:$email'>$email</a></td><td>$phone</td><td>$address</td><td>$register_date</td><td align='center'><a class='btn-sm btn-success' onclick='printQR($id)' href='#'><span class='glyphicon glyphicon-print' aria-hidden='true'></span></a> <a class='btn-sm btn-info' href='#'><span class='glyphicon glyphicon-pencil' onclick='editGuest($id)' aria-hidden='true'></span></a> <a class='btn-sm btn-danger' onclick='deleteGuest($id)' href='#'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td></tr>";
}

echo $output;
$ps->close();
$conn->close();

?>