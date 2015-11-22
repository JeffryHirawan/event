<?php

require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$query = "DELETE FROM guest WHERE id=?";

$ps = $conn->prepare($query);
$ps->bind_param("i",$_POST['id']);
$ps->execute();
$ps->close();
$conn->close();

?>