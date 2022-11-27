<?php 

	$connect = mysqli_connect("localhost", "root", "", "db_schedule");
	$connect->set_charset('utf8'); 

	if(!$connect){  die("Fail: " . mysqli_connect_error()); }