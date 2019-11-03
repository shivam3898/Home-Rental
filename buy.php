<?php
    include 'cstd.php';
    include 'core.php';
?>
<html lang="en">
<head>
<title>YouRoom </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



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

</style>
</head>

<body>


<!-- Header Starts -->
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

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="agents.php">Agents</a></li>         
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="logo.png" alt="Realestate"></a>
</div>
<!-- #Header Starts -->
</div>


<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Search rooms around</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-12 col-sm-11">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <input type="text" class="form-control" placeholder="Search for Properties">
            </div>
            <div class="col-lg-2 col-sm-4">
              <select class="form-control">
                <option value="Uttarakhand">Uttarakhand</option>
              <!--  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
				<option value="Andhra Pradesh">Andhra Pradesh</option>
				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
				<option value="Assam">Assam</option>
				<option value="Bihar">Bihar</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Chhattisgarh">Chhattisgarh</option>
				<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
				<option value="Daman and Diu">Daman and Diu</option>
				<option value="Delhi">Delhi</option>
				<option value="Goa">Goa</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Haryana">Haryana</option>
				<option value="Himachal Pradesh">Himachal Pradesh</option>
				<option value="Jammu and Kashmir">Jammu and Kashmir</option>
				<option value="Jharkhand">Jharkhand</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kerala">Kerala</option>
				<option value="Lakshadweep">Lakshadweep</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Manipur">Manipur</option>
				<option value="Meghalaya">Meghalaya</option>
				<option value="Mizoram">Mizoram</option>
				<option value="Nagaland">Nagaland</option>
				<option value="Orissa">Orissa</option>
				<option value="Pondicherry">Pondicherry</option>
				<option value="Punjab">Punjab</option>
				<option value="Rajasthan">Rajasthan</option>
				<option value="Sikkim">Sikkim</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Tripura">Tripura</option>
				<option value="Uttaranchal">Uttaranchal</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="West Bengal">West Bengal</option> -->
              </select>
            </div>
            <div class="col-lg-2 col-sm-4">
            <select class="form-control">
                <option>City</option>
                <option></option>
                <option></option>
                <option></option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Find Now</button>
              </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->





<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">View All Listing</a>
    <h2>Latest rooms on rent</h2>
     
    <div id="owl-example" class="owl-carousel">
        <?php
    $query = "SELECT * FROM `room_details` ORDER BY `id` DESC LIMIT 10";
    $query_run =  mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
?>
      <div class="properties">
           
        <div class="image-holder"><img src="images/properties/1.jpg" class="img-responsive" alt="properties"/>
        </div>
        <h4><a href="property-detail.php"><?php echo $row['house_name'];?></a></h4>
        <p class="price">Rent: <?php echo $row['rent'];?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $row['bedroom'];?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Hall"><?php echo $row['hall']?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bathroom"><?php echo $row['bathroom'];?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $row['kitchen']?></span></div>
        <a class="btn btn-primary" href="property-detail.php">View Details</a>
         
      </div>
     
       <?php
        }
        ?>
    </div>
  </div>
</div>


         


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

<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-danger"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->

</body>
</html>