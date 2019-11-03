<?php
	require 'cstd.php';
	require 'core.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM `images` WHERE `id` = '$id'";
		if($query_run = mysqli_query($connection,$query)){
			echo 'Sucessfully deleted';
		}else{
			echo 'Try again';
		}
		
	}
?>