<?php require_once 'database/config.php'; register_user(); ?>
<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Registration</title>
</head>
<body background ="register.jpeg">
	<div id="Mainwrapper">
		<form method="post" enctype="multipart/form-data">
			<table align="center" style="color: white;width:365px;position:relative;top:200px;"border="1">
				<tr>
					<td style="position:relative:left:50px;bottom:5px;background-color:#1D2247;">
						<center><h3>Register Form</h3></center></td>


					</tr>
					<tr>
						<td><center>Username</center></td>
						<td><input type ="text" name="username" placeholder="Type your username" required /> </td>
					</tr><tr>
						<td><center>Password</center></td>
						<td><input type ="password" name="password" placeholder="Type your password" required/> </td>
					</tr>
					<tr>

						<td>
							<center>
								<input type="submit" name="register" value="Register" style="background-color:#EDE613;color:white;width:150px;height:40px;position:relative;top:5px;"/> 
							</center>
						</td>
					</tr>
					<tr>
						<td align="center">Upload image</td>
						<td><input type="file" name="img1" required/></td>

					</tr>
				</table>
			</form>
		</div>
	</body>
	</html>