<?php require_once 'database/config.php'; ?>
<html>
<head>
	<meta charset="utf-8">
	<title>FPS</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" i></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</head>
<body>	


	<section id="header">

		<nav class="navbar  navbar-light ">
			<a class="navbar-brand" href="index.php"><img src="images/logo1.png"></img></a>
			
			<ul class="nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutus.php">ABOUT US</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="shop.php">SHOP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="membership.php">MEMBERSHIP</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contactus.php">CONTACT US</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="cart.php">CART</a>
				</li>
				<?php genrate_navigation(); ?>
			</div>
		</ul>
	</div>
</nav>
</section>
<center><h2>Where to find Us</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.049736849928!2d-0.21853268422916075!3d51.530647579638995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876103ea6ea886d%3A0x3b235755a243a6f4!2sMoberly+Sports+Centre!5e0!3m2!1sen!2suk!4v1551375907807" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	

	
	<h3>Opening Hours</h3><br>
	
	<ul class="ew" >
		<li >Monday-6.30-22.00 </li>	
		<li>Tuesday-6.30-22.00 </li>	
		<li>Wednesday-6.30-22.00 </li>	
		<li>Thursday-6.30-22.00 </li>	
		<li>Friday-6.30-22.00 </li>	
		<li>Saturday-8.00-20.00 </li>	
		<li>Sunday-8.00-20.00 </li>	
	</ul>
</center>

<section id="footer">
	<div class="container">
		<div class="row">
			
			<div class="col-md-3">
				<img src="images/logo1.png" class="footer-logo"></img>
				<p>We are delighted to announce the merger of DW Sports, DW Fitness and Fitness First to create DW Fitness First.
				The combined business, consisting of 90 retail stores and over 120 gyms, is uniquely placed to provide serious athletes.</p>
			</div>
			
			
			<div class="col-md-3">
				<h1>Features</h1>
				<p>Certified trainers</p>
				<p>Free consultation</p>
				<p>Flexible Time</p>
				<p>30 days Free trial</p>
			</div>
			
			<div class="col-md-3">
				<h1>Quick contact</h1>
				<p><i class="fa fa-phone square"></i> 0741 582 3046</p>
				<p><i class="fa fa-envelope"></i> nabilchowdhury@hotmail.co.uk</p>
				<p><i class="fa fa-home"></i> W9 2JN</p>
				<p class="city">London,England</p>
			</div>
			<div class="col-md-3">
				<h1>Follow Us</h1>
				<p><i class="fa fa-facebook-official"></i> Facebook</p>
				<p><i class="fa fa-youtube-play"></i> Youtube</p>
				<p><i class="fa fa-linkedin"></i> Linkedin</p>
				<p><i class="fa fa-twitter"></i> Twitter</p>
			</div></div><hr>
			<p class="copyright">Made <i class="fa-heart-o"></i> by Nabil Chowdhury</p>
			
		</div>
	</section>
	
</body>
</html>
