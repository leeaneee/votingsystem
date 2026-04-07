<?php
	$conn = new mysqli('localhost', 'root', 'Kirsten&kent8', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>