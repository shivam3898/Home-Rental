<?php
	require 'core.php';
	require 'cstd.php';
	if(isset($_GET['room_id'])){
	$room_id = $_GET['room_id'];
		if(isset($_FILES['files']['name'][0])){
			
			$files = $_FILES['files'];
			$uploaded = array();
			$failed = array();
			$allowed = array('jpeg','jpg','png','bmp');
			
			foreach($files['name'] as $position => $file_name){
				$file_tmp = $files['tmp_name'][$position];
				$file_size = $files['size'][$position];
				$file_error = $files['error'][$position];
				
				$file_ext = explode('.',$file_name);
				$file_ext = strtolower(end($file_ext));
				print_r($file_ext);
				
				if(in_array($file_ext,$allowed)){
					if($file_error == 0){
						if($file_size <= 6291456){
							
							$file_name_new = uniqid('',true).'.'.$file_ext;
							$file_des = 'uploads/'.$file_name_new;
							
							if(move_uploaded_file($file_tmp,$file_des)){
								$uploaded[$position]= $file_des;
								$query = "INSERT INTO `images` VALUES('','$room_id','$file_name_new')";
								$query_run = mysqli_query($connection,$query);
								header('Location:landlord.php');
							}else{
								echo $failed[$position] = 'failed';
							}
							
						}else{
							echo $failed[$position] = "too large file";
						}
					}else{
						echo $failed[$position] = "can't upload";
					}
				}else{
					echo $failed[$position] = "[{file_name}] file ext '{file_ext}' is not allowed";
				}
			}
			
			
		}
	}
	else{
		die();
	}
	
?> 