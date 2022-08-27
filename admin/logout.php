<?php
   //logout code
	session_start();
	unset($_SESSION['admin_id']);
	header("location:index.php");
?>