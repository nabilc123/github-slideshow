<?php require_once 'database/config.php'; ?>
<html>
<head>
	<meta charset="utf-8">
	<title>FIT4LIFE</title>
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
				<?php genrate_navigation(); ?>
			</div>
		</ul>
	</div>
</nav>
</section>

<section id="info">
	<div class="container"> 
		<div class="col-md-6 text center">
			<img src="images/m.jpg" class="img-fluid" width="450px" height="250px">
		</div>
		
		<div class="col-md-6 text justify">
			<h1>Welcome to FIT4LIFE</h1>
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
			<h3>Knowledge and Skills</h3>
			<p> Our website will help you build knowledge about health and fitness. Our video will
				enable you to know what exercises to use to target what area of body to work on.You can browse through our website to
				check out what type of exercises you are looking for whether cadio based,weight training or toning.Our video will 
				help to reach your fitness goals.
			</p>
		</div>
		<div class="col-md-6 text justify">
			<h4>Work hard in silence</h4>
			<p> 
			“The difference between the impossible and the possible lies in a person’s determination” !</p>
		</div>
		<div class="col-md-6">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Kv_lisyAxEs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
</section>

<section id="services">
	<div class="container"> 
		<div class="row">
			<div class="col-md-4">
				<img src="images/mma.png" height="100px" width="100px">
				<h4>Mixed Martial Arts</h4>
				<p> Fit4less provides training and mechanised for Athletes. There are video that will specialise training for mma fighters. 
					Our video will help you train different aspects of the body enabling you to have better performance and fitness level when competiting.
				</p>
			</div>
			<div class="col-md-4">
				<img src="images/gym.png" height="100px" width="100px">
				<h4>GYM</h4>
				<p> FITF4LIFE offers different gym membership prices for our customers. Our website have the best value for our membership prices for our customers. It will Our  help you build knowledge about health and fitness. Our video will
					enable you to know what exercises to use to target what area of body to work on.You can browse through our website to
					check out what type of exercises you are looking for whether cardio based,weight training or toning.Our video will 
				help to reach your fitness goals.</p>
			</div>
			<div class="col-md-4">
				<img src="images/boxing.png" height="100px" width="100px">
				<h4>Boxing</h4>
				<p> We offer boxing training in the gym for client who are competing or for people who want to get fit. We also offer videos for customer who want to learn the sport in self and give diet plan on how to get fighting fit.</p>
			</div>
		</div>
	</div>
</div>
</section>

<section id="features" >
	<div class ="container">
		<div class ="row">
			<div class="col-md-6">
				<img src="images/fit.png" class="img-fluid"></img>
			</div>
			<div class="col-md-6">
				<div class="feature-box">
					<div class="feature-left">
						<i class="fa fa-trophy"> </i>
					</div>
					<div class="feature-right">
						<h4>Certified Trainers<h4>
							<p>Our certified trainer will be assigned to you to help you produce maximum results </p>
						</div>
					</div>
					
					<div class="feature-box">
						<div class="feature-left">
							<i class="fa fa-heartbeat"> </i>
						</div>
						<div class="feature-right">
							<h4>Free Consultation<h4>
								<p>Book your free consultation session with our personal trainer</p>
							</div>
						</div>
						
						<div class="feature-box">
							<div class="feature-left">
								<i class="fa fa-clock-o"> </i>
							</div>
							<div class="feature-right">
								<h4>Flexible<h4>
									<p>Book your session according to your time of day.</p>
								</div>
							</div>
						</section>
						
						
						<section id="test">
							<div class="container">
								<h1 class="text-center">Meet our User</h1>
								<p class="text-center">The Gym at Bexleyheath have gone out of there way to look after us attending with a blind person</p>
								
								
								<div class="row">
									<div class ="col-md-4">
										<p class="review">
											FIT4LIFE have gone out of there way to look after us attending with a blind person
											The cleanness is second to none well looked after equipment<br><i class="fa fa-twitter"></i><span>@Richard_94</span>
										</p>
										<img src="images/guy.jpg">
									</div>
									<div class ="col-md-4 middle">
										<p class="review">
											I have been to this gym for a few months membership, but I absolutely love the classes they offer. There's a variety to choose from, from yoga, to cardio, or...<br><i class="fa fa-twitter"></i><span>@Tom_little95</span>
										</p>
										<img src="images/io.jpg">
									</div>
									
									<div class ="col-md-4">
										<p class="review">
											Fit4Life is a business that has the best value for money. The product they offer is the best in the business and the service benefit alot user int rerm of achieving their body goals. I highly recommend FIT4LIFE for all users.
											<br><i class="fa fa-twitter"></i><span>@Nabilc1234</span>
										</p>
										<img src="images/Nabil.jpg">
									</div>
								</div>
							</div>
						</section>
						
						<section id="subscribe">
							<div class="container">
								<div class="subscribe text-center">
									<h3>Sign up/login</h3>
									<p>sign up to our website</p>
									<button class="y"><a href="register.php">Register</button>
										<button class="c" ><a href="login.php">Login</a></button>
									</div>
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
