<?php require_once 'database/config.php'; ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Burntrex</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" i></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
	<style>
		form {
			width:unset; 
			margin:unset; 
			padding:unset; 
			border:unset; 
			background:unset;
			border-raduis:unset;
		}
	</style>
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


<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-5"></div>

			<div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/pills.jpg" height="450px" width="700px" class="d-block" >
					</div>
				</div>
				<a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="col-md-7">
			<p class="new-arrival text-center">NEW </p>
			<h2>Burntrex</h2>
			<p>Product Code: WHEY001</p>
			<i class = "fa fa-star"></i>
			<i class = "fa fa-star"></i>
			<i class = "fa fa-star"></i>
			<i class = "fa fa-star"></i>
			<i class = "fa fa-star-half-o"></i>
			<p class="price"> £5.99</p>

			<p><b>Availability:</b>In Stock</p>
			<p><b>Condition:</b>New</p>
			<p><b>Brand:</b>ON Company</p>
			<label>Quantity</label>
			<form action="cart.php" method="GET">
				<input type="hidden" name="action" value="add">
				<input type="hidden" name="id" value="6">
				<input type="hidden" name="name" value="Burntrex">
				<input type="hidden" name="price" value="5.99">
				<input type="number" value="1" min="1" name="qty">
				<button type="submit"  class="btn btn-primary">Add to Cart</button>
			</form>
		</div>
	</div>
</div>
</section>

<section class="product-description">
	<div class="container">
		<h6>Product Description</h6>
		<P>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolorem culpa quo animi fuga id vero, accusamus quia necessitatibus aspernatur obcaecati, dignissimos in. Iure aut unde, mollitia ut voluptates soluta!
		</P><hr>
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