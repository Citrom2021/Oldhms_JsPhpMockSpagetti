<?php
require 'connect.php';
header("Content-Type:application/json");
if (isset($_GET['order_id'])) 
{
$order_id=$_GET['order_id'];
if (isset($_GET['order_id']) && $_GET['order_id']=='all') 
{
$result = mysqli_query($connection,"SELECT * FROM `transaction`");	
}

if ($_GET['order_id']!='all') 
{
$result = mysqli_query(
	$connection,
	"SELECT * FROM `transaction` WHERE transaction_id=$order_id");
}		
	
	
	if(mysqli_num_rows($result)>0)
	{
	while ($row = mysqli_fetch_array($result))
	{
	$transaction_id = $row['transaction_id'];
	$guest_id = $row['guest_id'];
	$room_id = $row['room_id'];
	$room_no = $row['room_no'];
	$guest_no = $row['guest_no'];
	$extra_bed = $row['extra_bed'];
	$days = $row['days'];
	$checkin = $row['checkin'];
	$checkin_time = $row['checkin_time'];
	$checkout = $row['checkout'];
	$status = $row['status'];
	$bill = $row['bill'];
	response($transaction_id,$guest_id,$room_id,$room_no,$guest_no,$extra_bed,$days,$checkin,$checkin_time,$checkout,$status,$bill);
	
	}
	}
	else{
		response(NULL, NULL,NULL, NULL,NULL, NULL,NULL, NULL,NULL, 200,"No Record Found");
		}
}else{
	response(NULL, NULL, 400,"Invalid Request");
	}

function response($transaction_id,$guest_id,$room_id,$room_no,$guest_no,$extra_bed,$days,$checkin,$checkin_time,$checkout,$status,$bill){
	$response['transaction_id'] = $transaction_id;
	$response['guest_id'] = $guest_id;
	$response['room_id'] = $room_id;
	$response['room_no'] = $room_no;
	$response['guest_no'] = $guest_no;
	$response['extra_bed'] = $extra_bed;
	$response['days'] = $days;
	$response['checkin'] = $checkin;
	$response['checkin_time'] = $checkin_time;
	$response['checkout'] = $checkout;
	$response['status'] = $status;
	$response['bill'] = $bill;
	$json_response = json_encode($response);
	echo $json_response;
}

?>