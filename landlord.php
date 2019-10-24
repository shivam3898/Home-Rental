<?php
	require 'cstd.php';
	require 'core.php';
	include 'common.php';
	if(!isset($_SESSION['user_id'])&&empty($_SESSION['user_id'])){
		header('Location:login.php');
	}
	else{
		$id = $_SESSION['user_id'];
		$get_name = "SELECT `name` FROM `users` WHERE `id` = '$id'";
		$run_get_name = mysqli_query($connection,$get_name);
		while($row = mysqli_fetch_assoc($run_get_name)){
			$name = $row['name'];
		}
	}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="land6.css"/>
	<script type="text/javascript" src="land8.js">
	</script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
	<h1 >YouRoom</h1>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-9">
	</div>
	<div class="col-sm-1">
	<p id="">Logged in as </p>
	</div>
	<div class="col-sm-1">
	<p id="">
	<?php
		if(strlen($name)>=12){
			echo substr($name,0,12).'...';
		}else
			echo $name;
	?>
	</p>
	</div>
	<div class="col-sm-1">
	<input type="button" value="Log out" class="btn btn-danger" onclick="logout();"/>
	</div>
	</div>
	</div>
	<div class="container">
	<div class="col-sm-8">
	<div id="your_rooms">
	<div class="container">
<div class="row">
<div class="col-xs-12">
	<h2 style="margin-top:25px;">Your rooms</h2>
	</div>
	</div>
	</div>
	<div class="container">
	<div class="row">
	<div class="col-xs-12">
		
		<?php
			$query = "SELECT * FROM `room_details` WHERE `owner_id` = '$id'";
			$query_run = mysqli_query($connection,$query);
			if(mysqli_num_rows($query_run)!=0){
				while($row = mysqli_fetch_assoc($query_run)){
				?>
				<div id="rooms">
				<p id="sark"><b>House name:</b>
				<?php
					echo $row['house_name'];
				?>
				</p>
				<p id="mark"><b>Address:</b>
				<?php
					if($row['landmark']=='NULL')
						echo $row['lane'].','.$row['town'].','.$row['city'].','.$row['district'].','.$row['state'];
					else
						echo 'Near '.$row['landmark'].','.$row['lane'].','.$row['town'].','.$row['city'].',<br/>'.$row['district'].','.$row['state'];
				?>
				</p>
			
				
				<p id="mark"><b>Size:</b>
				<?php
					if($row['bedroom']!=0)
						echo $row['bedroom'].' '.'bedroom,';
					if($row['hall']!=0)
						echo $row['hall'].' '.'hall,';
					if($row['kitchen']!=0)
						echo $row['kitchen'].' '.'kitchen,';
					if($row['bathroom']!=0)
						echo $row['bathroom'].' '.'bathroom,';
					if($row['balcony']!=0)
						echo $row['balcony'].' '.'balcony';
				?>
				</p>
				<p id="mark"><b>For:</b>
				<?php
					if($row['fromm']=='years'&&$row['tom']=='years'){
						echo $row['from_date'].' to '.$row['to_date'].' years';
					}
					else if($row['fromm']=='months'&&$row['tom']=='months'){
						echo $row['from_date'].' to '.$row['to_date'].' months';
					}
					else{
						echo $row['from_date'].' '.$row['fromm'].' to '.$row['to_date'].' '.$row['tom'];
					}
				?>
				</p>
				<p id="mark"><b>Available for:</b>
				<?php
					if($row['family']==1)
						echo ' Family,';
					if($row['boy']==1)
						echo ' Boys,';
					if($row['girl']==1)
						echo ' Girls,';
					if($row['indi']==1)
						echo ' Individual,';
					if($row['couple']==1)
						echo ' Couple,';
					if($row['godown']==1)
						echo ' Warehouse/Godown';
				?>
				</p>
				<p id="mark"><b>Rent: </b>
				<?php
					echo $row['rent'].' Rs'.' (per month)';
				?>
				</p>
				
				
				<div id="dis">
				<p id="park">
				<?php
					if($row['description']!='NULL'){
						echo '<br/><b>Description</b><br/>-';
						echo $row['description'];
					}	
				?>
				</p>
				</div>
				
				
				<div id="con">
				<p id="park">
				<?php
					if($row['cond']!=='NULL'){
						echo '<br/><b>Conditions</b><br/>-';
						echo $row['cond'];
					}
				?>
				</p>
				</div>
				<br/>
				<p id="mark">
				<b>Available - </b>
				<input type="button" value="<?php
					if($row['avai']==1)
						echo 'Yes';
					else
						echo 'No';
				?>" id="avai_button<?php echo $row['id'];?>" class="av" style="<?php
				if($row['avai']==1)
						echo 'background:green; border:green;';
					else
						echo 'background:red; border:red;';
				?>" onclick="disableRoom(<?php echo $row['id'];?>);"/>
				<p id="mark">
				<input type="button" value="Add image" class="imgd" id="img_button<?php echo $row['id'];?>" onclick="gop(<?php echo $row['id'];?>);"/>
				<input type="button" value="Edit details" class="btn btn-primary" id="edit_button<?php echo $row['id'];?>" onclick="edit(<?php echo $row['id'];?>);"/>
		
				</p>
				<div id="imgi" style="display:block">
					
				</div>
				<input type="button" value="Delete room" id="delete_button" onclick="shp(<?php echo $row['id']?>)"/>
				<div id="dec<?php echo $row['id']?>" style="display:none;">
				<p id="par">Are you sure you want to delete?</p>
				<input type="button" Value="Yes" id="conf" onclick="del(<?php echo $row['id']?>);"/>
				<input type="button" value="No" id="confi" onclick="nop(<?php echo $row['id']?>);"/> 
				</div>
					<div id="err<?php echo $row['id']?>">	
					
					</div>
				</div>
				
				
				<?php
				}
			}
			else{
				?>
				
				<div id="he"><p><?php echo 'You haven\'t added nothing yet.';
				?></p></div>
				<?php
			}
		?>
		</div>
		</div>
		</div>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="btn btn-group">
			<input type="button" value="Add Room" class="btn btn-success"  onclick="adding(<?php echo $id;?>);"/>
			<input type="button" value="Edit profile"  class="btn btn-primary" onclick="profile(<?php echo $id;?>);"/>
	</div>
		</div>
		
	</div>
	
</body>
</html>