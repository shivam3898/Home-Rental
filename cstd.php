<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'room';

	$connection = mysqli_connect($host,$user,$pass,$db);
	if($connection){
	if(!mysqli_select_db($connection,$db)){
		die(' Could not connect');
	}
	}else
		die('Could not connect');
?>