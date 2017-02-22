<!DOCTYPE html>
<html>
<head>
	<title>Login เพลินพุง</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="wrapper-box">

<div class="login-box">
<div class="login-head"><h2>Login</h2>
<div class="insert-user">

<div class="text-user"></div>
	<form action="check_login.php" method="POST">
	<h3>Phone number</h3>
	<input type="number" name="member_phone">
	<h3>Password</h3>
	<input type="password" name="member_password">
	<br>
	<button type="submit" name="Login"><b>Log in</b></button>
	<h5>I don’t have an account , Let me to Sign up.</h5>
	</form>

</div>


</div> <!-- login-head -->

</div><!-- login-box -->
	

</div> <!-- End Wrapper -->

</body>
</html>