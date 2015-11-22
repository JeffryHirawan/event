<?php
	require_once("../../conf/db.php");
	$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	$userid = $conn->real_escape_string(htmlentities($_POST['id']));

	$conn->query("DELETE FROM `user` WHERE `id`='$userid'");

	$conn->close();
?>