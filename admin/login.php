<?php
//login admin code
session_start();
	if(isset ($_POST['login']))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			$_SESSION['admin_id']=$fetch['admin_id'];
			header('location:dashboard.php');
		}else{
			echo "<center><labe style = 'color:red;'>Invalid username or password</label></center>";
		}
	}
?>