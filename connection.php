<?php

function Connect()
{
	$dbhost = "localhost:3306";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "carrentalp";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>