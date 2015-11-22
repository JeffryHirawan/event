<?php
	require_once("../../conf/db.php");
	$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	$field = $conn->real_escape_string(htmlentities($_GET['field']));
	$order = $conn->real_escape_string(htmlentities($_GET['order']));
	$limit = $conn->real_escape_string(htmlentities($_GET['limit']));

	$output = "";

	$query = "SELECT `id`,`username`,`group`,`email` FROM `user` ORDER BY `$field` $order LIMIT $limit";
	if(isset($_GET['search']))
	{
		$search = $conn->real_escape_string(htmlentities($_GET['search']));
		$query = "SELECT `id`,`username`,`group`,`email` FROM `user` WHERE `username` LIKE '".$search."%' ORDER BY `$field` $order LIMIT $limit";
	}
	$result = $conn->query($query);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_array())
		{
			$output .= "<tr id='entry_".$row[0]."' hidden=true><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td>";
			$output .= "<td align='center'><a href='#' onclick='editStaff(".$row[0].")' class='btn-sm btn-info'><span class='glyphicon glyphicon glyphicon-pencil' aria-hidden='true'></span></a> ";
			$output .= "<a href='#' onclick='deleteStaff(".$row[0].")' class='btn-sm btn-danger'><span class='glyphicon glyphicon glyphicon-remove' aria-hidden='true'></span></a></td></tr>";
		}
	}
	echo $output;
	$conn->close();
?>