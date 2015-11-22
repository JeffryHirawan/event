<?php
session_start();

function isLoggedIn()
{
	return isset($_SESSION['id']);
}
function getUser()
{
	return $_SESSION['name'];
}
function getGroup()
{
	return $_SESSION['group'];
}

?>