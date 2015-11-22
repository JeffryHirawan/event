<?php

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$query = "INSERT INTO guest(event_id, track_code, email, name, address, phone, register_date) VALUES(?,?,?,?,?,?,?)";

$ps = $conn->prepare($query);

$code = md5(uniqid($_POST['id']));

$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));

$ps->bind_param("issssss",$_POST['id'],$code,$_POST['email'],$_POST['name'],$_POST['address'],$_POST['phone'],$date->format(DATE_W3C));
$ps->execute();
$ps->close();
$conn->close();

?>