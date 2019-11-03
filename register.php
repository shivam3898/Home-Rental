<html lang="en">
<head>
<title>YouRoom</title>
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

    <script type="text/javascript" src="reg3.js"></script>
    <style type="text/css">
        .ss{
            margin:0px;padding:0px;
        }
    </style>
</head>
<?php
	require 'cstd.php';
	require 'core.php'; 
	if(isset($_POST['name'])&&isset($_POST['num'])&&isset($_POST['pass'])&&isset($_POST['cpass'])&&isset($_POST['terms'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['num'];
		$pass = md5($_POST['pass']);
		$cpass = md5($_POST['cpass']);
        $terms = 'User has accepted all terms and conditions';
		if(!empty($name)&&!empty($phone)&&!empty($pass)&&!empty($cpass)){
			if(empty($email))
				$email = rand(10000000,99999999);
			if($pass==$cpass){
				$email_query = "SELECT `email` FROM `users` WHERE `email` = '".mysqli_real_escape_string($connection,$email)."'";
				$email_query_run = mysqli_query($connection,$email_query);
				if(mysqli_num_rows($email_query_run)==1){
					$email_error = 'Email already exists';
				}
				else{
					$phone_query="SELECT `phone` FROM `users` WHERE `phone` = '".mysqli_real_escape_string($connection,$phone)."'";
					$phone_query_run = mysqli_query($connection,$phone_query);
					if(mysqli_num_rows($phone_query_run)==1){
						$phn_error = 'Phone number exists';
					}
					else{
						$query = "INSERT INTO `users` VALUES('','".mysqli_real_escape_string($connection,$name)."','".mysqli_real_escape_string($connection,$email)."','".mysqli_real_escape_string($connection,$phone)."','".mysqli_real_escape_string($connection,$pass)."','$terms')";
						if($query_run =mysqli_query($connection,$query)){
							header('Location:complete.php');
						}
						
					}
				}

			}else{
				$pass_error = 'Password don\'t match';
			}
		}
		else{
			$empty_error='Fill in all fields';
		}
	}
?>
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
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 " >

			<form action="register.php" method="POST">
                <input type="text" id="name" class="form-control" placeholder="Full Name" name="name" onblur="nameError();">
                <div id="namee" class="ss"></div>
                <input type="email" class="form-control" placeholder="Enter Email(Optional)" name="email">
				<input type="text" class="form-control" style="width:70%" id="num" placeholder="Phone Number(with country code)" name="num" onkeyup="checkuser();"><button type="button" class="btn btn-success" name="verify" id="verify_button" style="position:absolute; width:25%; right:3%; top:140px;" onclick="sendCode();">Verify</button>
               
                <div id="ecode" style="display:none;">
				<input type="text" name="code" style="width:50%" class="form-control" id="code_field" placeholder="Enter code"/>
				<input type="button" value="Confirm" id="confirm_button" class="btn btn-success" onclick="confirmCode();"/>
				<div id="ppw"></div>
				</div>
                <div id="tell" class="ss"></div>
				<input type="password" class="form-control" placeholder="Password" name="pass" id="pass" onkeyup="passRs();">
                <div id="bass" class="ss"></div>
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpass" onkeyup="checkPass();" id="cpass">
                <div id="b" class="ss"></div>
                <div class="checkbox" style="display: inline-block;">
          <label onclick="terms();">
            <input type="checkbox" id="cond" name="terms" style="margin-top:-14px;" > You accept to all <a href="terms.php">Terms and Conditions</a>.
          </label>
        </div>
      <button type="submit" id="submit_button" class="btn btn-success" name="Submit">Register</button>
          
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