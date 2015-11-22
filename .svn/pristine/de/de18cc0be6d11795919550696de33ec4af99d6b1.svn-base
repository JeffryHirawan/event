<?php

if(empty($_POST['name']) || empty($_POST['type']) || empty($_POST['mode']) || empty($_POST['pic']) || empty($_POST['startdate']) || empty($_POST['enddate']) || empty($_POST['starttime']) || empty($_POST['endtime'])) die;

require_once("../../conf/db.php");

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$ps = $conn->prepare("INSERT INTO event VALUES(0,?,?,?,?,?,?,?,?,'Upcoming')");
$ps->bind_param("ssssssss",$_POST['name'],$_POST['type'],$_POST['mode'],$_POST['pic'],$_POST['startdate'],$_POST['enddate'],$_POST['starttime'],$_POST['endtime']);
$ps->execute();
$ps->close();
$conn->close();

?>