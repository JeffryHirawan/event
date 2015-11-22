<?php

	if(empty($_POST['user']) || empty($_POST['group']) || empty($_POST['email']))
	{
		die;
	}

	require_once("../../conf/db.php");
	$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	$user = $conn->real_escape_string(htmlentities($_POST['user']));
	$email = $conn->real_escape_string(htmlentities($_POST['email']));

	$result = $conn->query("SELECT `id` FROM `user` WHERE `username`='$user' OR `email`='$email'");
	if($result->num_rows == 0)
	{
		$pos = $conn->real_escape_string(htmlentities($_POST['group']));
		$conn->query("INSERT INTO `user` VALUES(0,'$user','test','test','$pos','$email')");
	}

	$conn->close();
?>