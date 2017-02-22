
	<?php
		session_start();
	?>

	<!DOCTYPE html>
		<html>
		<head>
			<title>Order เพลินพุง</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="style-index.css">
			<meta http-equiv=Content-Type content="text/html; charset=utf-8"> 
		</head>
		<body>



		<div class="wrapper-box">
		<div class="login-box">
		<div class="login-head"><h2>Food</h2>
		</div> <!-- login-head -->
		<div class="piece1_box">สเต็ก </div>
		<div class="piece_box">ชิ้นที่ 1 </div>
		<br>
		<br>
		<form action="?" method="POST">

	<?php

if(isset($_POST['okay_btn'])){
	
	include_once 'connectdb.php';
	$objConnect ->query("set names utf8");
	$meat_type = $_POST['meat_type'];
	$sauce_type = $_POST['sauce_type'];
	


	$sql ="INSERT INTO food (meat_type,sauce_type) 
	VALUES ('$meat_type','$sauce_type')";

	$query = mysqli_query($objConnect,$sql);


	if (!$query) {

		echo "error";

	}else{

		$message = "Success";
    	echo "<script type='text/javascript'>alert('$message');</script>";
	}
}

?>


		<input type="radio" name="meat_type" value="pork">เนื้อหมู
		<input type="radio" name="meat_type" value="meat">เนื้อวัว	
		<input type="radio" name="meat_type" value="fish">ปลา
			
		
		
		<div class="head_sauce">ซอส</div>

		

		<input type="radio" name="sauce_type" value="spicy">สไปร์ซี่
		<input type="radio" name="sauce_type" value="pepper">พริกไทยดำ	
		<input type="radio" name="sauce_type" value="gravy">เกรย์วี่
		
		<button type="submit" name="okay_btn">ตกลง</button>
		
		</form>

		

		</div><!-- login-box -->
			

		</div> <!-- End Wrapper -->

		</body>
		</html>