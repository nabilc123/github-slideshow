<?php require_once 'database/config.php'; genrate_cart(); // this come from database/function.php
 if(isset($_GET['tracking_number'])){echo "<script>alert('Thank you for order this is your tracking number : ".$_GET['tracking_number']."'); window.location.href = 'cart.php';</script>";} // this perameter "tracking_number" will passed into url if the payment is successfully completed ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
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
				<?php genrate_navigation();  // this come from database/function.php  ?>
			</div>
		</ul>
	</div>
</nav>
</section>


<section class="p-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-9">
				<?php if(isset($_GET['action']) && $_GET['action']=="confirm_order"){ // this will show if user completes payment ?>
				<div class="order-div">
					<div class="card shadow p-3">
						<div class="card-heading">
							<h4 class="text-center text-info">Order Detail</h4>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Sr#</th>
											<th>Name</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Sub Total</th>
										</tr>
									</thead>
									<tbody>
										<?php $total=0; get_cart_orders(); ?>
									</tbody>
								</table>
							</div>
							<div class="card-footer text-center">
								<a href="index.php" class="btn btn-success">Continue</a>
							</div>
						</div>
					</div>
				</div>
			<?php }else{ // this will show if user didn't checkout and adding products to cart ?>
				<div class="cart-div">
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="business" value="sb-m47n9g609507@business.example.com">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="upload" value="1">
					<div class="card shadow p-3">
						<div class="card-heading">
							<h4 class="text-center text-info">Cart</h4>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Sr#</th>
											<th>Name</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Sub Total</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $total=0; get_cart(); ?>
									</tbody>
								</table>
							</div>
							<div class="card-footer text-center">
								<?php if (isset($_SESSION['shooping_cart']) && count($_SESSION['shooping_cart']) != 0 ) { echo '<a href="cart.php?action=clear" class="btn btn-danger">Clear Cart</a>'; } ?>
								<a href="shop.php" class="btn btn-success">Continue Shopping</a>

								<?php if (isset($_SESSION['shooping_cart']) && count($_SESSION['shooping_cart']) != 0) {
									if ( isset($_SESSION['user_id'])) {
										echo '<button class="btn btn-primary">Check Out</button>'; 
									} else {
										echo '<button type="button" class="btn btn-danger">Must Login for checkout</button>'; 
									}
								} ?>
							</div>
							<input type="hidden" name="on0_1" value="New">
							<input type="hidden" name="os0_1" value="10.0">
							<input type="hidden" name="on1_1" value="10.0">
							<input type="hidden" name="os1_1" value="10.0">
							<input type="hidden" name="currency_code" value="GBP">
							<input type="hidden" name="return" value="http://vitaleducators.com/ecom_1/cart.php?action=confirm_order">
							<input type="image" style="width: 200px; display: none;" name="upload" border="0" src="images/paypal_button.png" alt="PayPal - The safer, easier way to pay online">
						</div>
					</div>
				</form>
				</div>
			<?php } ?>  
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