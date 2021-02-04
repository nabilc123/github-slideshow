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
<h2>Responsive Checkout Form</h2>
<div class="col-75">
  <div class="container">
    <form action="/action_page.php">

      <div class="row">
        <div class="container">
          <form action= "action_page.php">

            <div class="row">
              <div class="col-58">

                <h3>Billing address</h3>
                <label for="fname"><i class="fa fa-user"></i>Full name</label>
                <input type ="text" id="fname" name="firstname" placeholder="Place text">

                <label for="email"><i class="fa fa-envelope"></i>Email</label>
                <input type ="text" id="email" name="email" placeholder="Place text">

                <label for="adr"><i class="fa fa-address-caed"></i>Address</label>
                <input type ="text" id="fname" name="Address" placeholder="Place text">

                <label for="city"><i class="fa fa-institution"></i>City</label>
                <input type ="text" id="city" name="city" placeholder="Place text">

                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>

                  </form>
                </div>
              </div>
            </div>


          </body>
          </html>