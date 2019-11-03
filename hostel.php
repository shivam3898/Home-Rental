<?php
include 'core.php';
if(!isset($_SESSION['user_id']))
    header('Location:index.php');
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

<script type="text/javascript">
    var d =1;
    var r =1;
    function facplus(){
        d = d+1;
        ena();
    }
    function facminus(){
        d = d-1;
        ena();
    }
    function ena(){
        if(d<13){
            document.getElementById('fab').disabled = false;
        }
        else if(d>=13){
            document.getElementById('fab').disabled = true;
        }
    }
    function ruplus(){
        r = r+1;
        ena2();
    }
    function ruminus(){
        r = r-1;
        ena2();
    }
    function ena2(){
        if(r<6){
            document.getElementById('ru').disabled = false;
        }
        else if(r>=6){
            document.getElementById('ru').disabled = true;
        }
    }
    
</script>

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
    <span class="pull-right"><a href="#">Home</a> / Add Hostel</span>
    <h2>Add Hostel</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 " >

 <form action="addhostel.php" method="POST">
				<div id="group">
                <div class="current" id="div1">
					<h3 id="lab">Hostel Name</h3>
					<input type="text" class="form-control" placeholder="Hostel Name" name="form_name" required>
				</div>
                <div id="div1">
					<h3 id="lab">Address</h3>
					<input type="text" class="form-control" placeholder="Lane" name="form_lane"  required>
					<input type="text" class="form-control" placeholder="Landmark(Optional)" name="form_landmark">
					<input type="text" class="form-control" placeholder="Town" name="form_town" required>
					<input type="text" class="form-control" placeholder="City" name="form_city" required>
					<input type="text" class="form-control" placeholder="District" name="form_district" required>
					<input type="text" class="form-control" placeholder="State" name="form_state" required>
				</div>
				<div id="div1">
					<h3 id="lab">Availability</h3>
					<li class="list-group-item" style="margin-bottom:10px; height:50">PG
						<label class="switch ">
						  <input type="checkbox" name="pg" class="danger" >
						  <span class="slider round"></span>
						</label>
					</li>
					<li class="list-group-item" style="margin-bottom:10px; height:50">Boys
						<label class="switch ">
						  <input type="checkbox" name="boys" class="danger" checked>
						  <span class="slider round"></span>
						</label>
					</li>
					<li class="list-group-item" style="margin-bottom:10px; height:50">Girls
						<label class="switch ">
						  <input type="checkbox" name="girls" class="danger" checked>
						  <span class="slider round"></span>
						</label>
					</li>
				</div>
				<div id="div1">
					<h3 id="lab">Rent</h3>
					<input type="number" class="form-control" placeholder="Rent" name="form_rent" required>
				</div>
				<div id="div1">
					<h3 id="lab">Size</h3>
					<input type="number" class="form-control" placeholder="Beds" name="form_bed" required>
					<input type="number" class="form-control" placeholder="Bathrooms" name="form_bath" required>
				</div>
				<div id="div1">
					<h3 id="lab">Facility</h3>
					<input type="text" class="form-control" placeholder="Facility 1" name="facility1" required>
					<input type="text" class="form-control" placeholder="Facility 2" name="facility2" required>
					
					<div class="input-group control-group after-add-more">
					  <input type="text" name="addmore[]" class="form-control" placeholder="Facility3">
					  <div class="input-group-btn"> 
						<button onclick="facplus();" id="fab" class="btn btn-success add-more" type="button" style="height:50"><i class="glyphicon glyphicon-plus"></i> Add</button>
					  </div>
					</div>
					<!-- Copy Fields -->
					<div class="copy hide">
					  <div class="control-group input-group" style="margin-top:10px">
						<input type="text" name="addmore[]"  class="form-control" placeholder="Add Facility">
						<div class="input-group-btn"> 
						  <button onclick="facminus();" class="btn btn-success remove"  type="button" style="height:50"><i class="glyphicon glyphicon-remove"></i> Remove</button>
						</div>
					  </div>
					</div>
				</div>
				
				<div id="div1">
					<h3 id="lab">Rule</h3>
					<div class="input-group control-group2 after-add-more2">
					  <input type="text" name="addmore2[]" class="form-control" placeholder="Rule" style="margin-top:10;" required>
					  <div class="input-group-btn"> 
						<button onclick="ruplus();" id="ru" class="btn btn-success add-more2" type="button" style="height:50; margin-top:10;"><i class="glyphicon glyphicon-plus"></i> Add</button>
					  </div>
					</div>
					<!-- Copy Fields -->
					<div class="copy2 hide">
					  <div class="control-group2 input-group" style="margin-top:10px">
						<input type="text" name="addmore2[]" class="form-control" placeholder="Add Rule">
						<div class="input-group-btn"> 
						  <button onclick="ruminus();" class="btn btn-success remove" type="button" style="height:50"><i class="glyphicon glyphicon-remove"></i> Remove</button>
						</div>
					  </div>
					</div>
				<br/>
					
					
		  <button type="submit" class="btn btn-success" name="Submit">ADD</button>
	  </div>
	  </div>
	  <ul class="pager">
	  <li style="display:none" id="prev"><a>Prev</a></li>
	  <li id="next"><a>Next</a></li>
	  </ul> 
    </form>


                
   
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

<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
	
	$(document).ready(function() {
      $(".add-more2").click(function(){ 
          var html2 = $(".copy2").html();
          $(".after-add-more2").after(html2);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group2").remove();
      });
    });
	
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