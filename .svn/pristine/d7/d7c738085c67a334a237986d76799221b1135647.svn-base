<?php
require_once("../../conf/db.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$result = $conn->query("SELECT username FROM `user` WHERE `group`='Moderator'");

$output = "";

if ($result->num_rows != 0)
{
	while ($row = $result->fetch_array(MYSQLI_NUM))
	{
		$output .= "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
	}
}

echo $output;

$result->close();
$conn->close();
?>