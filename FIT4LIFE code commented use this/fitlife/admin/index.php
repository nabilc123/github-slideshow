<?php require_once '../database/config.php'; login_admin(); ?>
<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" href="../css/style.css">
	<title>Admin Login</title>
</head>
<body background ="../blue.png">
	<div id="Mainwrapper">
		<form method="post" enctype="mulitpart/form-data">
			<table align="center" style="color: white;width:365px;position:relative;top:200px;"border="1">
				<tr>
					<td style="position:relative:left:50px;bottom:5px;background-color:#1D2247;">
						<center><h3>Admin Login</h3></center></td>


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
					</tr>
				</table>
			</form>
		</body>
		</html>