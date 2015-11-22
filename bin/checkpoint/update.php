<?php

if(empty($_POST['id']) || empty($_POST['name'])) die;

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

$ps = $conn->prepare("UPDATE `checkpoint` SET `name`=? WHERE `id`=?");
$ps->bind_param("si",$_POST['name'],$_POST['id']);
$ps->execute();
$ps->close();
$conn->close();
?>