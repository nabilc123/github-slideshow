<?php require_once 'database/config.php'; confirm_membership_payment(); if(isset($_GET['tracking_number'])){echo "<script>alert('Thank you for purchasing membership this is your tracking number : ".$_GET['tracking_number']."'); window.location.href = 'membership.php';</script>";} ?>
<html>
<head>
	<meta charset="utf-8">
	<title>FPS</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

<section class="gym">
	<h3 class="m"> Gym and Fitness Memberships</h3>

	<div>
		<img class="i" src="images/t.jpg"></img>
		<h4 class="e">Gym and Group Exercise Class Memberships</h4><br></br>

		<p>With this membership package, you’ll be able to enjoy unlimited use of both the gym and the myriad group exercise classes on offer at your local centre. 
			Whatever you’re in the mood for – be it a gym session, intense exercise class or relaxing Yoga or Pilates session, you’re sure to be able to enjoy it with us.
			Alongside these fantastic benefits, you’ll also be able to use your online profile to map out your exercise regime
			and keep track of your progress through completed activities and challenges. Furthermore, your profile gives you access to 
		our comprehensive library of workouts, training plans and video classes.</p>
		<a href="register.php"><button class="io" onclick="Login.html">Join Today</button></a>
	</div>
</section>
<br>
</br>
<br>
</br>
<section class="gym">

	<img class="w" src="images/gym1.jpg"></img>
	<h4 class="we">Gym and Group Exercise Class Memberships</h4><br></br>

	<p class="section">The ultimate in flexible fitness. Whatever type of exercise you fancy doing, be it going for a swim, enjoying a gym session, or pushing yourself in 
		one of our group exercise classes, you can with a gym, group exercise and swim membership.
		Ideal for people who enjoy a variety of different activities and for those who are in training for triathlons or other multi-sport events.

		Naturally, with this membership, you also get access to your online profile that allows you to keep tabs on your progress through your training regime,
		as well as giving you access to a number of training plans, workouts and video classes. Meanwhile, you can also enter yourself into challenges, competing 
	against other Everyone Active members.</p>
	<a href="register.php"><button class="io" onclick="#">Join Today</button></a>
</section>
<br>
<br>
</br>

<section class="gym">
	<img class="i" src="images/swim.jpg"></img>
	<h4 class="e">Gym, Fitness Class and Swim Memberships</h4><br></br>
	<p class="section">The ultimate in flexible fitness. Whatever type of exercise you fancy doing, be it going for a swim, enjoying a gym session, or pushing yourself in one of our group fitness classes, you can with a Gym, Fitness Class and Swim membership. 
		Ideal for people who enjoy a variety of different activities and for those who are in training for triathlons or other multi-sport events.

		Naturally, with this membership, you also get access to your online profile that allows you to keep tabs on your progress through your training regime,
		as well as giving you access to a number of training plans, fitness workouts and video classes. Meanwhile, you can also enter yourself into challenges,
	competing against other Everyone Active members.</p>

	<button class="io" onclick="#">Join Today</button>
</section>
<br>
<br>
</br>
<section id="membership">
	<h2 >Membership Options</h2>
	<p class="section">With an Everyone Active membership, you have access to over 170 centres we offer a wide range of top fitness class facilities, activities 
		and classes.<br> Our great value memberships are designed to suit your needs.</p>


		<div class="box1">
			<h1 class="adult">Adult Gym Memberships</h1>
			<P class="infor">Price Per Month:<br>

				FROM<br>

				£25.00<br>
			</p>
			<p>Find your nearest centre to explore the facilities & offers</P>
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="business" value="sb-m47n9g609507@business.example.com">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="upload" value="1">
					<input type="hidden" name="item_name_1" value="Adult Gym Memberships" >
					<input type="hidden" name="item_number_1" value="1" >
					<input type="hidden" name="amount_1" value="25.00" >
					<input type="hidden" name="quantity_1" value="1" >
					<input type="hidden" name="on0_1" value="New">
					<input type="hidden" name="os0_1" value="10.0">
					<input type="hidden" name="on1_1" value="10.0">
					<input type="hidden" name="os1_1" value="10.0">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="return" value="http://vitaleducators.com/ecom_1/membership.php?action=confirm_purchase">
					<input class="paypal-button" type="image" style="width: 200px; display: none;" name="upload" border="0" src="images/paypal_button.png" alt="PayPal - The safer, easier way to pay online">
					<button type="button" class="io purchase_mem" data-name="Adult Gym Memberships" data-price="25.00" data-id="1">Join Today</button>
				</form>
			</div>
			<div class="box2">
				<h1 class="adult">Adult Gym, Swim & Classes Memberships</h1>
				<P class="infor">Price Per Month:<br>

					FROM<br>
					£35.00<br>

				</p>
				<p>Find your nearest centre to explore the facilities & offers</P>
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="business" value="sb-m47n9g609507@business.example.com">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="upload" value="1">
						<input type="hidden" name="item_name_1" value="Adult Gym, Swim & Classes Memberships" >
						<input type="hidden" name="item_number_1" value="1" >
						<input type="hidden" name="amount_1" value="35.00" >
						<input type="hidden" name="quantity_1" value="1" >
						<input type="hidden" name="on0_1" value="New">
						<input type="hidden" name="os0_1" value="10.0">
						<input type="hidden" name="on1_1" value="10.0">
						<input type="hidden" name="os1_1" value="10.0">
						<input type="hidden" name="currency_code" value="GBP">
						<input type="hidden" name="return" value="http://vitaleducators.com/ecom_1/membership.php?action=confirm_purchase">
						<input class="paypal-button" type="image" style="width: 200px; display: none;" name="upload" border="0" src="images/paypal_button.png" alt="PayPal - The safer, easier way to pay online">
						<button type="button" class="io purchase_mem" data-name="Adult Gym, Swim & Classes Memberships" data-price="35.00" data-id="2">Join Today</button>
					</form>
				</div>
				<div class="box1">
					<h1 class="adult">Concession Gym Memberships</h1>
					<P class="infor">Price Per Month:<br>

						FROM<br>
						£19.95<br>

					</p>
					<p>Find your nearest centre to explore the facilities & offers</P>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="business" value="sb-m47n9g609507@business.example.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="upload" value="1">
							<input type="hidden" name="item_name_1" value="Concession Gym Memberships" >
							<input type="hidden" name="item_number_1" value="1" >
							<input type="hidden" name="amount_1" value="19.95" >
							<input type="hidden" name="quantity_1" value="1" >
							<input type="hidden" name="on0_1" value="New">
							<input type="hidden" name="os0_1" value="10.0">
							<input type="hidden" name="on1_1" value="10.0">
							<input type="hidden" name="os1_1" value="10.0">
							<input type="hidden" name="currency_code" value="GBP">
							<input type="hidden" name="return" value="http://vitaleducators.com/ecom_1/membership.php?action=confirm_purchase">
							<input class="paypal-button" type="image" style="width: 200px; display: none;" name="upload" border="0" src="images/paypal_button.png" alt="PayPal - The safer, easier way to pay online">
							<button type="button" class="io purchase_mem" data-name="Concession Gym Memberships" data-price="19.95" data-id="3">Join Today</button>
						</form>
					</div>


				</section>



				<section id="m">

					<h2 >Membership Benefits</h2><br>
					<ul class="e">
						<li>  &#10004; Access to over 150 centres</li>
						<li> &#10004;Unlimited gym and swim with fitness memberships (swim and gym membership)</li>
						<li>&#10004; Enjoy fun challenges and see how high up the leaderboard you come</li>
						<li> &#10004;Activity Planner - record your activities and connect your tracking devices</li>
						<li> &#10004;Unlimited access to online training plans, exercise workouts and video classes</li>
					</ul>

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
							</div></div><hr>
							<p class="copyright">Made <i class="fa-heart-o"></i> by Nabil Chowdhury</p>

						</div>
					</section>

					<script type="text/javascript">
						$(".purchase_mem").click(function() {
							var element = $(this);
							var name = element.attr("data-name");
							var price = element.attr("data-price");
							var id = element.attr("data-id");
							$.ajax({
								method: 'POST',
								url: 'membership_session.php',
								data : {
									name : name,
									price : price,
									id : id
								},
								success: function(data){
									element.siblings(".paypal-button").trigger("click");
								},
								error: function(xhr, desc, err){
									console.log(err);
								}
							});
						});
					</script>

				</body>
				</html>