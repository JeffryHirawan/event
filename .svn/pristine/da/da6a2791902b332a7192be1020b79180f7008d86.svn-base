<?php
	require_once("../../conf/db.php");
	$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	$id = $conn->real_escape_string(htmlentities($_POST['id']));
	$name = $conn->real_escape_string(htmlentities($_POST['name']));
	$group = $conn->real_escape_string(htmlentities($_POST['group']));
	$email = $conn->real_escape_string(htmlentities($_POST['email']));

	$result = $conn->query("UPDATE `user` SET `username`='$name',`group`='$group',`email`='$email' WHERE `id`=$id");

	$conn->close();
?>