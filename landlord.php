<html lang="en">
<head>
<title>YouRoom </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
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

<!-- banner -->
<div class="inside-banner">
<div class="container">
<div class="pull-left">
<h2 style="margin-left: 10px;">Profile Name</h2>  
</div>
    <div class="pull-right">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal" style="margin-bottom: 5px;
    margin-top: 5px;"><i class="fas fa-plus"></i>&nbsp Add Room</button>
	<button type="button" class="btn btn-info" onclick=""><i class="fas fa-user-circle"></i>&nbspAccount</button>
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
						<div class="modal-body"><a href=""><div class="well">Hostel</div></a>
						<div><a href=""><div class="well">Apartment</div></a></div>
						<div><a href=""><div class="well">Randikhana</div></a></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- banner -->


     <!-- properties -->
<div class="container">
<div class="row" style="margin-bottom:20px">
      <div class="col-lg-4 col-sm-6" style="margin-top:10px;">
      <div class="properties">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img src="images/properties/1.jpg" alt="img">
			</div>

			<div class="item">
			  <img src="images/properties/2.jpg" alt="img">
			</div>

			<div class="item">
			  <img src="images/properties/3.jpg" alt="img">
			</div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
        </div>
		<div class="row">
		<div style="float:left; margin-left:12">
        <h4 style="color:#b70f0f; font-size:25px"><strong>House Name</strong></h4>
		</div>
		<div style="float:right; margin-right:12; margin-top:10">
		<i class="fas fa-plus fa-2x"></i>
		</div>
		</div>
		<div>
		<div class="pull-left">
		<p style="font-size:20px; padding-top:8px;">Available</p>
		</div>
		<div class="pull-right">
		<input type="checkbox" data-on-color="danger" data-off-color="primary" data-on-text="YES" data-off-text="NO" name="my-checkbox" data-size="mini"  data-size="small">
        </div>
		</div>
		<a class="btn btn-primary" href="" style="margin-bottom:10px">Edit Details</a>
		<a class="btn btn-primary" data-toggle="modal" data-target="#delModal" style="margin-bottom:10px">Delete Room</a>
		<a class="btn btn-primary" data-toggle="modal" data-target="#myModal">View Details</a>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

							</button>
							 <h4 class="modal-title" id="myModalLabel">House Name</h4>

						</div>
						<div class="modal-body">
						<p>House Description................</p>
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
	  
	  
	  <div class="col-lg-4 col-sm-6" style="margin-top:10px;">
      <div class="properties">
        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel2" data-slide-to="1"></li>
			<li data-target="#myCarousel2" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img src="images/properties/1.jpg" alt="img">
			</div>

			<div class="item">
			  <img src="images/properties/2.jpg" alt="img">
			</div>

			<div class="item">
			  <img src="images/properties/3.jpg" alt="img">
			</div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
        </div>
		<div class="row">
		<div style="float:left; margin-left:12">
        <h4 style="color:#b70f0f; font-size:25px"><strong>House Name</strong></h4>
		</div>
		<div style="float:right; margin-right:12; margin-top:10">
		<i class="fas fa-plus fa-2x"></i>
		</div>
		</div>
		<div>
		<div class="pull-left">
		<p style="font-size:20px; padding-top:8px;">Available</p>
		</div>
		<div class="pull-right">
		<input type="checkbox" data-on-color="danger" data-off-color="primary" data-on-text="YES" data-off-text="NO" name="my-checkbox" data-size="mini"  data-size="small">
        </div>
		</div>
		<a class="btn btn-primary" href="" style="margin-bottom:10px">Edit Details</a>
		<a class="btn btn-primary" href="" style="margin-bottom:10px">Delete Room</a>
		<a class="btn btn-primary" data-toggle="modal" data-target="#myModal2">View Details</a>
		<!-- Modal -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

							</button>
							 <h4 class="modal-title" id="myModalLabel">House Name</h4>

						</div>
						<div class="modal-body">
						<p>House ................</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
      </div>
	  
	  <div class="col-lg-4 col-sm-6" style="margin-top:10px;">
      <div class="properties">
        <div id="myCarousel3" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel3" data-slide-to="1"></li>
			<li data-target="#myCarousel3" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img src="images/properties/1.jpg" alt="img">
			</div>

			<div class="item">
			  <img src="images/properties/2.jpg" alt="img">
			</div>

			<div class="item">
			  <img src="images/properties/3.jpg" alt="img">
			</div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel3" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
        </div>
		<div class="row">
		<div style="float:left; margin-left:12">
        <h4 style="color:#b70f0f; font-size:25px"><strong>House Name</strong></h4>
		</div>
		<div style="float:right; margin-right:12; margin-top:10">
		<i class="fas fa-plus fa-2x"></i>
		</div>
		</div>
		<div>
		<div class="pull-left">
		<p style="font-size:20px; padding-top:8px;">Available</p>
		</div>
		<div class="pull-right">
		<input type="checkbox" data-on-color="danger" data-off-color="primary" data-on-text="YES" data-off-text="NO" name="my-checkbox" data-size="mini"  data-size="small">
        </div>
		</div>
		<a class="btn btn-primary" href="" style="margin-bottom:10px">Edit Details</a>
		<a class="btn btn-primary" href="" style="margin-bottom:10px">Delete Room</a>
		<a class="btn btn-primary" data-toggle="modal" data-target="#myModal3">View Details</a>
		<!-- Modal -->
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

							</button>
							 <h4 class="modal-title" id="myModalLabel">House Name</h4>

						</div>
						<div class="modal-body">
						<p>House Description................</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
      </div>
	  
</div>
</div>

<!--Delete Modal-->
<!-- Modal -->
<div id="delModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
	  <h4 class="modal-title">Are you sure?</h4>
	  </div>
		<div class="modal-body" style="text-align:center">
        <button type="button" class="btn btn-success" style="width:80">Yes</button> &nbsp
	  <button type="button" class="btn btn-warning" data-dismiss="modal" style="width:80">No</button>
      </div>
    </div>

  </div>
</div>
<!--Delete-->

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
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>
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