<?php
//reservcation code
	require_once 'admin/connect.php';
	if(isset($_POST['add_guest'])){
	    $room_id=$_REQUEST['room_id'];
		$guest=$_REQUEST['guest'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['date'];
		$checkout=$_POST['date1'];
		$days=$_POST['days'];
		$room_no=$_POST['room_no'];
		$guest_no=$_POST['guest_no'];
		//check already book room in the db 
		
		$check_query2=$conn->query("SELECT * FROM `transaction` WHERE `room_id` = '$_REQUEST[room_id]' AND status1='booked'") or die(mysqli_error());
		$featch_check_dates =$check_query2->fetch_array();
		$fetch_checkin=$featch_check_dates['checkin'];
		$fetch_checkout=$featch_check_dates['checkout'];
		if(mysqli_num_rows($check_query2) > 0)
	    {	
		echo "<script>alert('This Room is already Booked from  $fetch_checkin to $fetch_checkout.')</script>";
		header("location:add_reserve.php?&room_id='".$room_id."'&guest='".$guest."'&add_reservation=");
		
		}
		elseif($checkin > $checkout)
		{
		
		
		echo "<script>alert('CheckIn-Date > Checkout-Date please correct')</script>";
		header("location:add_reserve.php?&room_id='".$room_id."'&guest='".$guest."'&add_reservation=");
		
		}
		else
		{
		
		$conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, contactno) VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error());
		$row = $query2->num_rows;
		$guest_id=$fetch['guestid'];
		
						
							$room_id = $_REQUEST['room_id'];
						
							
							$conn->query("INSERT INTO `transaction`(guest_id, room_id, status,checkin,checkout,room_no,guest_no,days) VALUES('$guest_id', '$room_id', 'Pending', '$checkin','$checkout','$room_no','$guest_no','$days')") or die(mysqli_error());
							
							echo "<script LANGUAGE='JavaScript'>
                                window.location.href='reply_reserve.php';
                           </script>";
							
							//header("location:reply_reserve.php");
				
				
	}
	}	
?>