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
				<li class="nav-item">
					<a class="nav-link" href="favorites.php">FAVORITES</a>
				</li>
				<?php genrate_navigation(); // this come from database/function.php ?>
			</div>
		</ul>
	</div>
</nav>
</section>

<section id="info">
	<div class="container"> 
		<div class="col-md-6 text center">
			<img src="images/heart.png" class="img-fluid" width="250px" height="150px">
		</div>
		
		<div class="col-md-6 text justify">
			<h1 text align="center"> FIT4LIFE</h1>
			<p> FIT4LIFE is a company that will save your expenses spending on luxurious product
				to enable to save your money.Our services will enable you to produce the fastest result
			in a short amount of time for less money. Feel free to scroll through and check our website</p>
		</div>
	</div>
</section>

<section id="facts">
	<div class="container"> 
		<div class="col-md-6 text center">
		</div>
		
		<div class="col-md-6 text justify">
			<h3>Our Aims and Objectives</h3>
			<p> Our website will help you build knowledge about health and fitness. Our video will
				enable you to know what exercises to use to target what area of body to work on.You can browse through our website to
				check out what type of exercises you are looking for whether cadio based,weight training or toning.Our video will 
				help to reach your fitness goals.
			</p>
		</div>
		<div class="col-md-6 text justify">
			<h4>Abs workout</h4>
			<p> 
				This video demonstrate an advance ab workout routine for men which will really hit the whole core area.
				This is a freestyle workout from barstars.
				sisscor kicks 
				
				leg raises
				
				
			</p>
		</div>
		<div class="col-md-6">
			<div class="embed-responsive embed-responsive-16by9">
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/BsaD-BadB9M" frameborder="0" 
				allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			
			
			
			<h4>Arm Workout</h4>
			<p>As classic as a peanut butter and jelly sandwich, biceps-and-triceps supersets is a tried-and-tested technique for building serious arms in one workout. 
				Team Bodybuilding.com and MuscleTech-sponsored athlete Abel Albonetti is ready to share his particular brand of supersetting for arms.

				"This workout is probably different from what you're used to," 
			he explains. </P>
			<ul class="e">
				<li>1. Superset - 4 sets
					Barbell Curl - 12, 10, 8, 8 reps
				Triceps Pushdown - Rope Attachment - 12-15 reps</li>

				<li>2. Superset - 4 sets
					Preacher Curl - 10 reps (perform with EZ-Bar)
				Cable Rope Overhead Triceps Extension - 15 reps</li>

				<li>3. Superset - 4 sets
					Incline Dumbbell Curl - 10 reps
				EZ-Bar Skullcrusher - 10, 8, 8, 8 reps</li>

				<li>4. Superset - 4 sets
					Hammer Curls - 12, 10, 10, 10 reps
				Standing Dumbbell Triceps Extension - 10 reps</li>

				<li>5. Superset -  4 sets
					High Cable Curls - 15 reps (with BFR)
				Triceps Pushdown -15 reps (with BFR)</li>

				<li>6. Giant Set - 3 sets
					Reverse Barbell Curl - 12 reps (perform with EZ-Bar)
					Tricep Dumbbell Kickback - 12 reps
				Close-Hands Push-Up - 12 reps</li></ul></div>
				<div class="col-md-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/S5kOK3bxfro" frameborder="0" 
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				
				<h4>Shoulder gains workout</h4>
				<p>This video will help you increase gain and tone your shoulder whilst your at home or at the gym.</p>
				<ul class="e">
					<li>1. Seated Dumbbell Shoulder Press - 4 working sets of 8-12 reps, plus 1 burnout set to failure Seated </li>
					<li>2. Rear-Delt Fly- 4 working sets of 8-12 reps, plus 1 burnout set to failure </li>
					<li>3. Face Pull - 4 working sets of 12-15 reps, plus 1 burnout set to failure</li>
					<li>4. Reverse Pec Deck - 4 working sets of 8-12 reps, plus 1 burnout set to failure</li>
				</ul></div>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/6EqI5V8AUp8" 
				frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
			</div>
			
		</section>
		


		
		
		
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
