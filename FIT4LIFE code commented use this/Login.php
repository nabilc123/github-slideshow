<?php

$host="localhost";
$user="w1552093";
$password="";
$db="w1552093_0";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if (isset (['username' ])){
	
	$uname =$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from loginform where user ".$uname."'AND Pass='".$password."'limit 1'";
	
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==1){
		echo "You have successfully loggin in"
			exit();
	}
	else {
		echo " you have entered the incorrect password";
		exit();
	}
		
	


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FPS</title>
<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" i></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</head>
<body >	

<div class="header">
	<h2>Login</h2>
	
	</div>
	<form method="post" action="Login.php">
		<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter your name"/>	
		</div>
		
		
			
		<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" placeholder="Enter your password">
		</div>
			
		
		<div class="input-group">
		<button type="submit" name="Login" class="btn">
		Login</button>
			
        <p> Not yet a member yet? <a href="register.php">Sign up</a></p>
			</form>


	
</body>
</html>