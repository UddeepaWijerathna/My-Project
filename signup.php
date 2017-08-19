

<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#7f8c8d">

	<div id = "main-wrapper">
		<center>
			<h2>SignUP Form</h2>
			<img src = "Images/loginImg.png" class = "LoginImage"/>
		</center>
	
	
	<form class="myform" action="model/signupback.php" method="POST">
		<label><b>First Name</b></label>
		<input name="FirstName" type="text" class="inputvalues"  required/><br>
		<label><b>Last Name</b></label>
		<input name="LastName" type="text" class="inputvalues"  required/><br>
		<label><b>Username</b></label>
		<input name="username" type="text" class="inputvalues"  required/><br>
		<label><b>Password</b></label>
		<input name="password" type="password" class="inputvalues"  required/><br>
		<label><b>Contact No</b></label>
		<input name="Contact_No" type="text" class="inputvalues"  required/><br>
		<label><b>Type</b></label>
		<input name="Type" type="text" class="inputvalues"  required/><br>
		<input name="signup" type="submit" id="signin_btn" value="Sign Up"/><br>
	</form>
	

	</div>
</body>
</html>