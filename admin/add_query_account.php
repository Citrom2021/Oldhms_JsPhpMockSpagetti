<?php
error_reporting(0);
//user add account info
	if(isset($_POST['add_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$query =mysqli_query($conn,"SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
		$valid = $conn->num_rows;
		if($valid > 0){
		echo '<script>
			alert("Username already taken");
			window.location.replace("add_account.php");</script>';
		}else{
			$conn->query("INSERT INTO `admin` (name, username, password) VALUES('$name', '$username', '$password')") or die(mysqli_error());
			header("location:account.php");
			echo '<script>
			alert("User Added Successfully");
			window.location.replace("account.php");</script>';
		}
	}
?>