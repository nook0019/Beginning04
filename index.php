	
<?php
	session_start();
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Order เพลินพุง</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style-menu.css">
	</head>
	<body>

	<div class="wrapper-box">

	<div class="login-box">
	<div class="login-head"><h2>Order</h2>
	<div class="Menu-tap">
		<div class="Menu-list">
			<a href="index.php">Menu</a>
		</div>
		<div class="My-order">
			<a href="myorder.php">My Order</a>
		</div>
	</div>

	</div> <!-- login-head -->

	<?php 
				if(isset($_SESSION['member_name'])){
					echo $_SESSION['member_name'];
				}
			?>
	<br>
	<br>
	<br>
		<div class="menu_list">
		<center>
				<ul class="nav-style">
					<li><a href="./food.php">&nbsp;&nbsp;Food&nbsp;&nbsp;</a></li>
					<li><a href="./dessert.php">&nbsp;&nbsp;Dessert&nbsp;&nbsp;</a></li>
					<li><a href="./drink.php">&nbsp;&nbsp;Drink&nbsp;&nbsp;</a></li>
					<li><a href="./logout.php">&nbsp;&nbsp;Log out&nbsp;&nbsp;</a></li>
				</ul>
			</div><!-- End of menu_list-->
			</center>
	

	</div><!-- login-box -->
		

	</div> <!-- End Wrapper -->

	</body>
	</html>