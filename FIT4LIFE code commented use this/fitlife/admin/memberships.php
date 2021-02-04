<?php require_once '../database/config.php';?>
<html>
<head>
	<meta charset="utf-8">
	<title>All Memberships</title>
	<link rel="stylesheet" href="../style.css">
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
			<a class="navbar-brand" href="../index.php"><img src="../images/logo1.png"></img></a>
			
			<ul class="nav">
				<li class="nav-item active">
					<a class="nav-link" href="../index.php">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="users.php">USERS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="memberships.php">MEMBER SHIPS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../logout.php">LOG OUT</a>
				</li>
			</div>
		</ul>
	</div>
</nav>
</section>

<section class="p-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-9">
				<div class="order-div">
					<div class="card shadow p-3">
						<div class="card-heading">
							<h4 class="text-center text-info">All Purchased Memberships</h4>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Sr#</th>
											<th>Name</th>
											<th>Username</th>
											<th>Price</th>
											<th>Status</th>
											<th>Created At</th>
										</tr>
									</thead>
									<tbody>
										<?php get_all_memberships(); ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<img src="../images/logo1.png" class="footer-logo"></img>
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