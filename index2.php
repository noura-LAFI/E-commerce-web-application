<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css2/style.css">
	</head>

	<body>

		<div class="wrapper" style="">
			<div class="inner">
				<form action="register.php" method=post>
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text"  name=nom class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input name=prenom type="text" class="form-control">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Username</label>
						<input type="text" name=user class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input  type="password" name=pass class="form-control">
					</div>
					
					<input style=' height:50px; width:100px; background-color:#A987A8' type=submit  value=Register Now >
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>