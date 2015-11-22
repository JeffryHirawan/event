<?php
	require_once("../../conf/db.php");
	$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	$id = $conn->real_escape_string(htmlentities($_GET['id']));

	$query = "SELECT `username`,`group`,`email` FROM `user` WHERE `id`=$id";
	$result = $conn->query($query);

	$output = "";

	if($result->num_rows == 1)
	{
		$row = $result->fetch_array();

		$output = json_encode(array("name" => $row[0],"group" => $row[1],"email" => $row[2]));
	}
	echo $output;
	$conn->close();
?>