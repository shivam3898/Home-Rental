<?php
	require 'cstd.php';
	require 'core.php';
	if(!isset($_SESSION['user_id'])&&empty($_SESSION['user_id'])){
		header('Location:index.php');
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
<html lang="en">
<head>
<title>YouRoom </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css"/>
  
	
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="countUp.js"></script>
  <script src="countUp-jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>

<!--Toggle -->
<link href="assets/bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
<script src="assets/bootstrap-switch-master/dist/js/bootstrap-switch.js"></script>
<!--Toggle -->


<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->
<!--BUTTON SCRIPT-->
    <script type="text/javascript">
        function disableRoom(id){
        var box = document.getElementById('avai_button'+id);
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				var te = xmlhttp.responseText;
				if(te=='true'){
                    
                }
			}
		}
		xmlhttp.open('GET','disable.php?id='+id,true);
		xmlhttp.send();
        }
        function del(id){
	       if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if(xmlhttp.responseText=='Sucessfully deleted')
					window.location='landlord.php';
			}
		}
		xmlhttp.open('GET','delete.php?id='+id,true);
		xmlhttp.send();
}
        function al(id){
	       if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if(xmlhttp.responseText=='Sucessfully deleted')
					document.getElementById("my"+id).style.visibility = "hidden";
			}
		}
		xmlhttp.open('GET','imgdelete.php?id='+id,true);
		xmlhttp.send();
}
        function save(){
            window.location.reload();
        }
        </script>
<!--BUTTON SCRIPT-->
<style>
.vertical-alignment-helper {
    display:table;
    height: 100%;
    width: 100%;
}
.vertical-align-center {
    /* To center vertically */
    display: table-cell;
    vertical-align: middle;
}
.modal-content {
    /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
    width:inherit;
    height:inherit;
    /* To center horizontally */
    margin: 0 auto;
}
.carousel-inner > .item > img {
  width:640px;
  height:230px;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
    [hidden]{
        display: none !important;
    }
    .gallery_product{
        margin-bottom: 30px;
    }
</style>
</head>

<body>


<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="logo.png" alt="Realestate"></a>
</div>
<!-- #Header Starts -->
</div>

<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			<a class="navbar-brand" style="color: #ffffff;"><?php echo $name;?></a>
            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Room</a></li>
                <li><a href="account.php"><span class="glyphicon glyphicon-user"></span>&nbsp Account</a></li>         
                <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>&nbsp Log Out</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>
		<!-- Modal -->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

							</button>
							 <h4 class="modal-title" id="myModalLabel">Add Room</h4>

						</div>
						<div class="modal-body">
                            <div><a href="addroom.php"><div class="well">Room</div></a></div>
                            <a href="hostel.php"><div class="well">Hostel</div></a>
						<div><a href=""><div class="well">Apartment</div></a></div>
						
                            <div><a href="addflat.php"><div class="well">Flat</div></a></div>
                            <div><a href="godown.php"><div class="well">Godown</div></a></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>

</div>
	
	


<!-- properties -->
<div class="container">
<div class="row" style="margin-bottom:20px">
    <!--ONE PROPERTY-->
    <?php
        $room_query = "SELECT * FROM `room_details` WHERE `owner_id` = '$id'";
        if($room_query_run = mysqli_query($connection,$room_query)){
            while($row = mysqli_fetch_assoc($room_query_run)){
                $room_id = $row['id'];
                $house_name = $row['house_name'];
    ?>
    <div class="col-lg-4 col-sm-6" style="margin-top:10px;">
        <!--IMAGES-->
      <div class="properties">
          <?php 
            $image_query = "SELECT * FROM `images` WHERE `room_id` = '$room_id'";
            if($image_query_run = mysqli_query($connection,$image_query)){   
                
          ?>
        <div id="myCarousel<?php echo $room_id;?>" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  
            
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
              <?php
              if($row1 = mysqli_fetch_assoc($image_query_run)){
                ?>
			<div class="item active">
			  <img src="uploads/<?php echo $row1['name'];?>" alt="img">
			</div>
            <?php
                while($row2 =mysqli_fetch_assoc($image_query_run)){
                ?>
			<div class="item">
			  <img  src="uploads/<?php echo $row2['name'];?>" alt="img">
			</div>
            <?php
                }
              }else{
                  ?>
              <div class="item active">
			  <img src="uploads/default.jpg" alt="img">
			</div>
              <?php
              }
			?>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel<?php echo $room_id;?>" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel<?php echo $room_id;?>" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
          <?php
            }
          ?>
        </div>
        <!--#IMAGES-->
		<div class="row">
		<div style="float:left; margin-left:12">
        <h4 style="color:#b70f0f; font-size:25px"><strong><?php echo $house_name;?></strong></h4>
		</div>
		<div style="float:right; margin-right:12; margin-top:10">
		<i class="fas fa-plus fa-2x" data-toggle="modal" data-target="#imgModal<?php echo $room_id;?>"></i>
		<!-- Modal -->
			<div class="modal fade" id="imgModal<?php echo $room_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="vertical-alignment-helper">
					<div class="modal-dialog vertical-align-center">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

								</button>
								 <form action="upload.php?room_id=<?php echo $room_id?>" method="POST" enctype="multipart/form-data">
									<label class="btn btn-default">
										Browse <input id="file" class="inputfile" type="file" name="files[]" multiple hidden>
									</label>
									<label class="btn btn-success">
										Upload <input type="submit" name="submit" hidden>
									</label>
                                     <label>Not more than 15.</label>
								</form>

							</div>
                            <?php
                             $imga = "SELECT * FROM `images` WHERE `room_id` = '$room_id'";
                            if($imga_run = mysqli_query($connection,$imga)){
                                
                            ?>
							<div class="modal-body" style="overflow-y: scroll; height:350">
							<div class="row">
                                <?php
                                while($row3 = mysqli_fetch_assoc($imga_run)){
                                ?>
								<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
								<div class="img-wrap">
								<span class="close" onclick="al(<?php echo $row3['id'];?>);">&times;</span>
									<img src="uploads/<?php echo $row3['name'];?>" class="img-responsive" id="my<?php echo $row3['id'];?>">
								</div>
								</div>
                                <?php
                                }
                                ?>
							</div>
							</div>
                            <?php
                                }else{
                                    ?>
                                <div class="modal-body" style="overflow-y: scroll; height:350">
							<div class="row">
								<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
								<div class="img-wrap">
									<img src="http://fakeimg.pl/365x365/" class="img-responsive">
								</div>
								</div>
							</div>
							</div>
                            <?php
                                }
                            ?>
							<div class="modal-footer">
                                <button type="button" class="btn btn-success" onclick="save();" >Show Changes</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!--image-->
		</div>
		</div>
		<div>
		<div class="pull-left">
		<p style="font-size:20px; padding-top:8px;">Available</p>
		</div>
		<div class="pull-right">
		<label class="switch">
        <input type="checkbox"
               <?php if($row['avai']==1) echo 'checked'; else echo 'unchecked';?> onclick="disableRoom(<?php echo $row['id'];?>)" id="avai_button<?php echo $row['id']?>">
        <span class="slider round"></span>
            </label>
        </div>
		</div>
		<a class="btn btn-primary" href="seteditses.php?id=<?php echo $row['id'];?>" style="margin-bottom:10px">Edit Details</a>
		<a class="btn btn-primary" data-toggle="modal" data-target="#delModal<?php echo $row['id'];?>" style="margin-bottom:10px" >Delete Room</a>
		<a class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $room_id;?>">View Details</a>
		<!-- Modal -->
		<div class="modal fade" id="myModal<?php echo $room_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

							</button>
							 <h4 class="modal-title" id="myModalLabel"><?php echo $house_name;?></h4>

						</div>
						<div class="modal-body">
                        <label>Address</label>
						<p><?php echo $row['lane'].','.$row['town'].','.$row['city'].','.$row['district'].','.$row['state'];?></p>
                            <label>Time</label>
                        <p><?php echo $row['from_date'].' '.$row['fromm'].' to '.$row['to_date'].' '.$row['tom'];?></p>
                            <label>Rent</label>
                            <p><?php echo $row['rent'];?></p>
                            <label>Size</label>
                            <p><?php if($row['bedroom']!=0) echo $row['bedroom'].' bedroom,';?>
                            <?php if($row['hall']!=0) echo $row['hall'].' hall,';?>
                            <?php if($row['kitchen']!=0) echo $row['kitchen'].' kitchen,';?>
                            <?php if($row['bathroom']!=0) echo $row['bathroom'].' bathroom,';?>
                            <?php if($row['balcony']!=0) echo $row['balcony'].' balcony,';?></p>
                            <label>Avaliable for</label>
                            <p>
                            <?php
                                if($row['family']==1)
                                    echo 'Family,';
                                if($row['boy']==1)
                                    echo 'Boys,';
                if($row['girl']==1)
                    echo 'Girls,';
                if($row['indi']==1)
                    echo 'Individual,';
                if($row['couple']==1)
                    echo 'Couple,';
                                ?>
                            </p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--Delete Modal-->
<!-- Modal -->
<div id="delModal<?php echo $row['id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
	  <h4 class="modal-title">Are you sure?</h4>
	  </div>
		<div class="modal-body" style="text-align:center">
        <button type="button" class="btn btn-success" style="width:80" onclick="del(<?php echo $row['id']?>)">Yes</button> &nbsp
	  <button type="button" class="btn btn-warning" data-dismiss="modal" style="width:80">No</button>
      </div>
    </div>

  </div>
</div>
<!--Delete-->
      </div>
    <?php
            }
        }
    else{
        ?>
            <h2>No room added.</h2>
        <?php
    }
    ?>
    <!--ONE PROPERTY-->
      
	  
</div>
</div>
<!-- properties -->


<script>
$("[name='my-checkbox']").bootstrapSwitch();

</script>
<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
			  
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="https://www.facebook.com/YouRoom-110992356987909/"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="https://twitter.com/YouRoom5?s=08"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="https://www.instagram.com/youroom5?r=nametag"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>YouRoom</b><br>
<span class="glyphicon glyphicon-map-marker"></span> Haripur, Selaqui, Dehradun <br>
<span class="glyphicon glyphicon-envelope"></span> support@youroom1.in<br>
<span class="glyphicon glyphicon-earphone"></span> 919557904724</p>
            </div>
        </div>
<p class="copyright">Copyright 2019. All rights reserved.	</p>


</div></div>

</body>
</html>