<?php
    //delete room code
	require_once 'connect.php';
	mysqli_query($conn,"DELETE FROM `room` WHERE `roomid` = '$_REQUEST[room_id]'") or die(mysqli_error());
	header("location:room.php");
?>