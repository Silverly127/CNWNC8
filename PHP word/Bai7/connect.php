<?php
	$connect = mysqli_connect('localhost','root','','tintuc');
	if (mysqli_connect_errno()!==0) {
		die("Could not connect to database. Error: " . mysqli_connect_error() . ".");
	}
	mysqli_set_charset($connect,'utf8');
?>