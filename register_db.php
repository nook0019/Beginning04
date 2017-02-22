<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8"> 
	<title></title>
</head>
<body>

<?php

if(isset($_POST['register'])){
	
	include_once 'connectdb.php';
	$objConnect -> query("set names utf8");
	$member_name = $_POST['name'];
	$member_phone = $_POST['phone'];
	$member_password= $_POST['password'];
	$status = $_POST['status'];


	$sql ="INSERT INTO member (member_name,member_phone,member_password,status) 
	VALUES ('$member_name','$member_phone','$member_password','$status')";


	$query = mysqli_query($objConnect,$sql);


	if (!$query) {

		echo "error";

	}else{

    	//header('location:log_in.php');

	}
}

?>

</body>
</html>