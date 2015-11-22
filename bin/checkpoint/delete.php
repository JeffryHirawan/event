<?php

if(empty($_GET['id'])) die;

require_once("../../conf/db.php");

$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$ps = $conn->prepare("DELETE FROM `checkpoint` WHERE `id`=?");
$ps->bind_param("i",$_GET['id']);
$ps->execute();
$ps->close();
$conn->close();
?>