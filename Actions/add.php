<?php
	if($_SERVER['REQUEST_METHOD'] !== 'PUT')
		die("Invalid Request");

	$data = file_get_contents('php://input');
	$foodItems = json_decode($data);
	
?>