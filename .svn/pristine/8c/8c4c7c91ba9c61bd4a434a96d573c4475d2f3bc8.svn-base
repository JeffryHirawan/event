<?php
	require_once("../../conf/db.php");
	$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	$id = $conn->real_escape_string(htmlentities($_GET['id']));

	$result = $conn->query("SELECT `username`,`group`,`email` FROM `user` WHERE `id`=$id");

	$output = "";

	if($result->num_rows == 1)
	{
		$row = $result->fetch_array();
		$output .= "<td>$id</td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
		$output .= "<td align='center'><a href='#' onclick='editStaff($id)' class='btn-sm btn-info'><span class='glyphicon glyphicon glyphicon-pencil' aria-hidden='true'></span></a> ";
		$output .= "<a href='#' onclick='deleteStaff($id)' class='btn-sm btn-danger'><span class='glyphicon glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>";
	}

	echo $output;
	$conn->close();
?>