<?php
	require 'cstd.php';
	require 'core.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT `avai` FROM `room_details` WHERE `id` = '$id'";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$avai = $row['avai'];
		}
		if($avai == 1)
			$avai = 0;
		else
			$avai = 1;
		$q1 = "UPDATE `room_details` SET `avai` = '$avai' WHERE `id` = '$id'";
		if($q1_run = mysqli_query($connection,$q1)){
			echo 'true';
		}else{
			echo 'false';
		}
	}
?>