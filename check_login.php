<?php
include_once 'connectdb.php';
session_start();

	$member_phone = $_POST['member_phone'];
	$member_password = $_POST['member_password'];

	$connect=mysql_connect('localhost','root','') or die (mysql_error());
	mysql_select_db('plernplung') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM member WHERE member_phone = '".$member_phone."' AND member_password = '".$member_password."'");
	$sqlUpdate="UPDATE member SET login_time = NOW() WHERE member_phone = '$member_phone' ";
		$result=mysql_query($sqlUpdate);
	$numrows = mysql_num_rows($query);
	$row = mysql_fetch_assoc($query);
	
	if (!$row) {
		echo "";
	}else{

		$_SESSION['member_phone'] = $row['member_phone'];
		$_SESSION['member_password'] = $row['member_password'];
		$_SESSION['status']= $row['status'];
		session_write_close();
		if ($row['status'] == 0) {
			header('location:index-admin.php');
		}else{
			header('location:index.php');
	?>
	

		<script type="text/javasctipt">
			alert("Phone number or password ผิด");
		</script>

		<?php
	}



	}
?>
