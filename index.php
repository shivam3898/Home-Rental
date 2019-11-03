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
.img-wrapper {
  position: relative;
 }

.img-responsive {
  width: 100%;
  height: auto;
}

.img-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
}

.img-overlay:before {
  content: ' ';
  display: block;
  /* adjust 'height' to position overlay content vertically */
  height: 50%;
}

.xXx{
  position: absolute;
  color: white;
  text-align: center;
  left: 0;
  right: 0;
  top: 10%;
  font-size: 2.9vmax;
}


</style>
</head>
<?php
	require 'cstd.php';
	require 'core.php';
	if(isset($_POST['username'])&&isset($_POST['password'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		if(!empty($username)&&!empty($password)){
			$query ="SELECT `name`,`id` FROM `users` WHERE `phone` = '91".mysqli_real_escape_string($connection,$username)."' AND `password` = '".mysqli_real_escape_string($connection,$password)."' OR `email` = '".mysqli_real_escape_string($connection,$username)."' AND `password` = '".mysqli_real_escape_string($connection,$password)."'";
			if($query_run = mysqli_query($connection,$query)){
			if(mysqli_num_rows($query_run)==1){
				while($user = mysqli_fetch_assoc($query_run)){
				$user_id = $user['id'];
                if($user_id){
                    if(!empty($_POST['remember'])){
                        setcookie("username",$_POST['username'],time() + (86400*30),"/");
                        setcookie("password",$_POST['password'],time() + (86400*30),"/");
                        setcookie("remember",$_POST['remember'],time() + (86400*30),"/");
                    }else{
                        setcookie("username");
                        setcookie("password");
                        setcookie("remember");
                    }
                }
				$_SESSION['user_id'] = $user_id;
				}
				header('Location:landlord.php');
			}
		
			}else{
				$value = "Incorrect Email/Phone or Password";
			}
			
		}
	}
?>
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



<div class="">
<div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
  
              <div class="bg-img bg-img-1"></div>
			  <div class="img-title">
				<h4 class="xXx">YouRoom.<br/> An easy platform to find suitable rooms.</h4>
			  </div>
				<div class="img-overlay" class="col-lg-3 col-sm-3">
				  <button type="button" class="btn btn-danger" onclick="window.location.href='buy.php'">BUY</button>
				  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#loginpop">SELL</button>
				</div>

            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
				<div class="img-title">
				<h4 class="xXx">YouRoom.<br/> An easy platform to find suitable rooms.</h4>
			  </div>
				<div class="img-overlay" class="col-lg-3 col-sm-3">
				  <button type="button" class="btn btn-danger" onclick="window.location.href='buy.php'">BUY</button>
				  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#loginpop">SELL</button>
				</div>

            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
				<div class="img-title">
				<h4 class="xXx">YouRoom.<br/> An easy platform to find suitable rooms.</h4>
			  </div>
				<div class="img-overlay" class="col-lg-3 col-sm-3">
				  <button type="button" class="btn btn-danger" onclick="window.location.href='buy.php'">BUY</button>
				  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#loginpop">SELL</button>
				</div>

            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
				<div class="img-title">
				<h4 class="xXx">YouRoom.<br/> An easy platform to find suitable rooms.</h4>
			  </div>
				<div class="img-overlay" class="col-lg-3 col-sm-3">
				  <button type="button" class="btn btn-danger" onclick="window.location.href='buy.php'">BUY</button>
				  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#loginpop">SELL</button>
				</div>
				
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
				<div class="img-title">
				<h4 class="xXx">YouRoom.<br/> An easy platform to find suitable rooms.</h4>
			  </div>
				<div class="img-overlay" class="col-lg-3 col-sm-3">
				  <button type="button" class="btn btn-danger" onclick="window.location.href='buy.php'">BUY</button>
				  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#loginpop">SELL</button>
				</div>

            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
	
    </div>




<div id="stats" class="statsSection section">

		<div class="containerNew">

			<div class="row">

				
				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">1</h2>
                                <h3>Month Experience</h3>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fas fa-address-book"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">50</h2>
                                <h3>Clients</h3>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fas fa-briefcase"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">4</h2>
                                <h3>Employees</h3>
                            </div>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="squareItem">
						<div class="squareInnerContainer">
							<div class="squareIcon">
								<i class="fas fa-home"></i>
							</div>
							<div class="squareContent">
                                <h2 class="counter">9999</h2>
                                <h3>Houses Sold</h3>
                            </div>
						</div>
					</div>
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

<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" action="<?php echo $current_file;?>" method="POST" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address/phone</label>
          <input type="text" class="form-control" id="exampleInputEmail2" name="username" placeholder="Enter email/phone" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];?>">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" <?php if(isset($_COOKIE['remember'])) echo 'checked'; else echo 'unchecked'?>> Remember me
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
<script>

</script>
</div>
</body>
</html>