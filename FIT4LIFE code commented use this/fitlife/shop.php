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
				<?php genrate_navigation(); ?>
			</div>
		</ul>
	</div>
</nav>
</section>
<br></br>
<br></br>
<br></br>




<section class="sale">
	<div class="container">
		<div class="title-box">
			<h2>Supplements</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="product-top">
					<a href="product_01.php"><img src="images/sh.jpg" height= "250px" width="150px"></a>
					<div class="overlay-right">
						<a href="product_01.php" class="btn btn-secondary" title="Quic Shop"><i class="fa fa-eye"></i></a>
						<a href="cart.php?action=add&id=1&qty=1&price=29.99&name=Diet Whey" title="Add to Cart" class="btn btn-secondary mt-2">
							<i class = "fa fa-shopping-cart"></i>
						</a>

						<a href="favorites.php?action=add&id=1&qty=1&price=29.99&name=Diet Whey" title="Add to Favorite List" class="btn btn-secondary mt-2">
							<i class = "fa fa-heart-o"></i>
						</a>



						<!-- <button type="button" class="btn btn-secondary mt-2" title="Add to Wish List">
							<i class = "fa fa-shopping-cart"></i>		
						</button> -->
					</div>
				</div>
				<div class="product-bottom text-center"> 
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star-half-o"></i>
					<h3>Diet Whey</h3>
					<h5>£29.99</h5>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<a href="product_02.php"><img src="images/n.jpg" height= "250px" width="200px"></a>
					<div class="overlay-right">
						<a href="product_02.php" class="btn btn-secondary" title="Quic Shop"><i class="fa fa-eye"></i></a>
						<!-- <button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class = "fa f fa-heart-o"></i>	
						</button> -->
						<a href="cart.php?action=add&id=2&qty=1&price=9.99&name=U-Fit" title="Add to Cart" class="btn btn-secondary mt-2">
							<i class = "fa fa-shopping-cart"></i>
						</a>

						<a href="favorites.php?action=add&id=2&qty=1&price=9.99&name=U-Fit" title="Add to Favorite List" class="btn btn-secondary mt-2">
							<i class = "fa fa-heart-o"></i>
						</a>



						<!-- <button type="button" class="btn btn-secondary mt-2" title="Add to Wish List">
							<i class = "fa fa-shopping-cart"></i>		
						</button> -->
					</div>
				</div>
				<div class="product-bottom text-center"> 
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star-o"></i>
					<i class = "fa fa-star-o"></i>
					<h3>U-Fit</h3>
					<h5>£9.99</h5>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<a href="product_03.php"><img src="images/whey.jpg" height= "250px" width="150px"></a>
					<div class="overlay-right">
						<a href="product_03.php" class="btn btn-secondary" title="Quic Shop"><i class="fa fa-eye"></i></a>
						<!-- <button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class = "fa fa-heart-o"></i>	
						</button> -->
						<a href="cart.php?action=add&id=3&qty=1&price=19.99&name=Whey Protein" title="Add to Cart" class="btn btn-secondary mt-2">
							<i class = "fa fa-shopping-cart"></i>
						</a>

						<a href="favorites.php?action=add&id=3&qty=1&price=19.99&name=Whey Protein" title="Add to Favorite List" class="btn btn-secondary mt-2">
							<i class = "fa fa-heart-o"></i>
						</a>



						<!-- <button type="button" class="btn btn-secondary mt-2" title="Add to Wish List">
							<i class = "fa fa-shopping-cart"></i>		
						</button> -->
					</div>
				</div>
				<div class="product-bottom text-center"> 
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star-half-o"></i>
					<h3>Whey Protein</h3>
					<h5>£19.99</h5>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<a href="product_04.php"><img src="images/gain.jpg" height= "250px" width="150px"></a>
					<div class="overlay-right">
						<a href="product_04.php" class="btn btn-secondary" title="Quic Shop"><i class="fa fa-eye"></i></a>
						<!-- <button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class = "fa fa-heart-o"></i>	
						</button> -->
						<a href="cart.php?action=add&id=4&qty=1&price=49.99&name=Performance-Muscle gain" title="Add to Cart" class="btn btn-secondary mt-2">
							<i class = "fa fa-shopping-cart"></i>
						</a>

						<a href="favorites.php?action=add&id=4&qty=1&price=49.99&name=Performance-Muscle gain" title="Add to Favorite List" class="btn btn-secondary mt-2">
							<i class = "fa fa-heart-o"></i>
						</a>


						<!-- <button type="button" class="btn btn-secondary mt-2" title="Add to Cart">
							<i class = "fa fa-shopping-cart"></i>		
						</button> -->
					</div>
				</div>
				<div class="product-bottom text-center"> 
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star-half-o"></i>
					<h3>Performance-Muscle gain</h3>
					<h5>£49.99</h5>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<a href="product_05.php"><img src="images/max.png" height= "250px" width="200px"></a>
					<div class="overlay-right">
						<a href="product_05.php" class="btn btn-secondary" title="Quic Shop"><i class="fa fa-eye"></i></a>
						<!-- <button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class = "fa fa-heart-o"></i>	
						</button> -->
						<a href="cart.php?action=add&id=5&qty=1&price=29.99&name=Maxi-Nutrition-Mass" title="Add to Cart" class="btn btn-secondary mt-2">
							<i class = "fa fa-shopping-cart"></i>
						</a>

						<a href="favorites.php?action=add&id=5&qty=1&price=29.99&name=Maxi-Nutrition-Mass" title="Add to Favorite List" class="btn btn-secondary mt-2">
							<i class = "fa fa-heart-o"></i>
						</a>



						<!-- <button type="button" class="btn btn-secondary mt-2" title="Add to Cart">
							<i class = "fa fa-shopping-cart"></i>		
						</button> -->
					</div>
				</div>
				<div class="product-bottom text-center"> 
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<h3>Maxi-Nutrition-Mass</h3>
					<h5>£29.99</h5>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<a href="product_06.php"><img src="images/pills.jpg" height= "250px" width="200px"></a>
					<div class="overlay-right">
						<a href="product_06.php" class="btn btn-secondary" title="Quic Shop"><i class="fa fa-eye"></i></a>
						<!-- <button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class = "fa fa-heart-o"></i>	
						</button> -->
						<a href="cart.php?action=add&id=6&qty=1&price=5.99&name=Burntrex" title="Add to Cart" class="btn btn-secondary mt-2">
							<i class = "fa fa-shopping-cart"></i>
						</a>

						<a href="favorites.php?action=add&id=6&qty=1&price=5.99&name=Burntrex" title="Add to Favorite List" class="btn btn-secondary mt-2">
							<i class = "fa fa-heart-o"></i>
						</a>



						<!-- <button type="button" class="btn btn-secondary mt-2" title="Add to Cart">
							<i class = "fa fa-shopping-cart"></i>		
						</button> -->
					</div>
				</div>
				<div class="product-bottom text-center"> 
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star-o"></i>
					<i class = "fa fa-star-o"></i>
					<i class = "fa fa-star-o"></i>
					<h3>Burntrex</h3>
					<h5>£5.99</h5>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<a href="product_07.php"><img src="images/shake.png" height= "250px" width="300px"></a>
					<div class="overlay-right">
						<a href="product_07.php" class="btn btn-secondary" title="Quic Shop"><i class="fa fa-eye"></i></a>
						<!-- <button type="button" class="btn btn-secondary" title="Add to Wish List">
							<i class = "fa fa-heart-o"></i>	
						</button> -->
						<a href="cart.php?action=add&id=7&qty=1&price=4.99&name=Protein-shaker" title="Add to Cart" class="btn btn-secondary mt-2">
							<i class = "fa fa-shopping-cart"></i>
						</a>

						<a href="favorites.php?action=add&id=7&qty=1&price=4.99&name=Protein-shaker" title="Add to Favorite List" class="btn btn-secondary mt-2">
							<i class = "fa fa-heart-o"></i>
						</a>



						<!-- <button type="button" class="btn btn-secondary mt-2" title="Add to Cart">
							<i class = "fa fa-shopping-cart"></i>		
						</button> -->
					</div>
				</div>
				<div class="product-bottom text-center"> 
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star"></i>
					<i class = "fa fa-star-o"></i>
					<i class = "fa fa-star-o"></i>
					<h3>Protein-shaker</h3>
					<h5>£4.99</h5>
				</div>
			</div>

		</section>



		<section class="website-features">
			<div class="container">
				<div class="row">
					<div class="col md-3 features-box">
						<img src="images/fa.jpg">
						<div class="features-text">
							<p><b>100% Original items </b> are available at the company</P>
							</div>
						</div>
						<div class="col md-3 features-box">
							<img src="images/return.png">
							<div class="features-text">
								<p><b>Return within 30 days </b> of recieving your order</P>
								</div>
							</div>
							<div class="col md-3 features-box">
								<img src="images/d.png">
								<div class="features-text">
									<p><b>Get free delivery for every </b> order on more than the price.</P>
									</div>
								</div>
								<div class="col md-3 features-box">
									<img src="images/pay.png">
									<div class="features-text">
										<p><b>Pay online through mulitple </b> payment option (card payment/Net banking).</P>
										</div>
									</div>
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
										<p>flexible Time</p>
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
									</div>
								</div><hr>
								<p class="copyright">Made <i class="fa-heart-o"></i> by Nabil Chowdhury</p>
								
							</div>
						</section>
						
					</body>
					</html>