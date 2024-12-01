<?php
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');

try {
	$connect = mysqli_connect($dbHost,$dbName,$dbUser,$dbPass);
	if (!$connect) {
		die("connection failed".mysqli_connect_error());
	} 
	else {
	}
} 
catch (Exception $e) {
	die($e->getMessage());
}
?>