<?php require_once 'database/config.php'; login_user(); ?>
<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Login Form</title>
</head>
<body background ="blue.png">
	<div id="Mainwrapper">
		<form method="post" enctype="mulitpart/form-data">
			<table align="center" style="color: white;width:365px;position:relative;top:200px;"border="1">
				<tr>
					<td style="position:relative:left:50px;bottom:5px;background-color:#1D2247;">
						<center><h3>Login Form</h3></center></td>


					</tr>
					<tr>
						<td><center>Username</center></td>
						<td><input type ="text" name="username" placeholder="Type your username"/> </td>
					</tr><tr>
						<td><center>Password</center></td>
						<td><input type ="password" name="password" placeholder="Type your password"/> </td>
					</tr>
					<tr>
						<td>    
							<center>
								<input type="submit" name= "signin" value="Login" style="background-color:#42729B;color:white;width:150px;height:40px;position:relative;top:5px;"/>
							</center>
						</td>
						<td>
							<center>
								<a href="register.php" style="background-color:#EDE613;color:white;width:150px;height:40px;position:relative;top:5px;padding: 10px;"/>Register</a>
								<!-- <input type="button" name="Register" value="Register" style="background-color:#EDE613;color:white;width:150px;height:40px;position:relative;top:5px;"/>  -->
							</center>
						</td>
					</tr>
				</table>
			</form>
		</body>
		</html>