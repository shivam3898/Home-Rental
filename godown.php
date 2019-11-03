<?php

?>
<html lang="en">
<head>
<title>YouRoom </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css"/>
  
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
#div1{
    display: none;
}
#group div.current{
    display: block;
}    
#lab{
	text-align:center;
	font-family:Verdana;
}


</style>
</head>

<body>
<body>
    <div id="load"></div>
    <div id="contents">

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
    <span class="pull-right"><a href="#">Home</a> / Add Godown</span>
    <h2>Add Godown</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 " >

		<div id="group">
            <div class="current" id="div1">
				<h3 id="lab">Godown Name</h3>
                <input type="text" class="form-control" placeholder="Godown Name" name="form_name">
			</div>
			<div id="div1">
				<h3 id="lab">Address</h3>
                <input type="text" class="form-control" placeholder="Lane" name="form_lane">
				<input type="text" class="form-control" placeholder="Address" name="form_address">
			</div>
			<div id="div1">
				<h3 id="lab">Rent</h3>
				<input type="number" class="form-control" placeholder="Rent" name="form_rent">
			</div>
			<div id="div1">
				<h3 id="lab">Size</h3>
				<div class="input-group">
					<input type="number" class="form-control" placeholder="Length" name="form_length">
					<div class="input-group-btn"> 
						<div class="form-group">
						<select class="form-control" id="sel1" style="height: 50;width: 100;">
						<option>Meters</option>
						<option>Feet</option>
						<option>Inches</option>
					  </select>
					  </div>
					</div>
				</div>
				<div class="input-group">
					<input type="number" class="form-control" placeholder="Breadth" name="form_breadth">
					<div class="input-group-btn"> 
						<div class="form-group">
						<select class="form-control" id="sel1" style="height: 50;width: 100;">
						<option>Meters</option>
						<option>Feet</option>
						<option>Inches</option>
					  </select>
					  </div>
					</div>
				</div>
				<div class="input-group">
					<input type="number" class="form-control" placeholder="Height" name="form_height">
					<div class="input-group-btn"> 
						<div class="form-group">
						<select class="form-control" id="sel1" style="height: 50;width: 100;">
						<option>Meters</option>
						<option>Feet</option>
						<option>Inches</option>
					  </select>
					  </div>
					</div>
				</div>
			</div>
			<div id="div1">
				<h3 id="lab">Availabitlity Date</h3>
				<div style="margin-left:4">Available From</div>
				<input type="date" class="form-control"  name="form_avail">
				<div style="margin-left:4">Available Till</div>
				<input type="date" class="form-control"  name="form_till">
			</div>
			<div id="div1">
				<h3 id="lab">Description and Condition</h3>
				<input type="text" class="form-control" placeholder="Description" name="form_desc" style="height: 100;">
				<input type="text" class="form-control" placeholder="Condition" name="form_cond" style="height: 100;">
			
				<button type="submit" class="btn btn-success" name="Submit">Register</button>
			</div>
			
		</div>
         <ul class="pager">
			<li style="display:none" id="prev"><a>Prev</a></li>
			<li id="next"><a>Next</a></li>
		</ul> 


                
    </div>
  
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
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>YouHome</b><br>
			<span class="glyphicon glyphicon-map-marker"></span> *Address* <br>
			<span class="glyphicon glyphicon-envelope"></span>*mail*<br>
			<span class="glyphicon glyphicon-earphone"></span> *contact*</p>
            </div>
        </div>
<p class="copyright">Copyright 2019. All rights reserved.	</p>


</div></div> 
</div>
<script>
function updateItems(delta)
{
    var $items = $('#group').children();
    var $current = $items.filter('.current');
    var index = $current.index();
    var newIndex = index+delta;
    // Range check the new index
    newIndex = (newIndex < 0) ? 0 : ((newIndex > $items.length) ? $items.length : newIndex); 
    if (newIndex != index){
        $current.removeClass('current');
        $current = $items.eq(newIndex).addClass('current');
        // Hide/show the next/prev
        $("#prev").toggle(!$current.is($items.first()));    
        $("#next").toggle(!$current.is($items.last()));    
    }
}
$("#next").click(function () {
    updateItems(1);
});
$("#prev").click(function () {
    updateItems(-1);
});
</script>
</body>
</html>