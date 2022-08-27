<?php
require_once 'connect.php';
if(isset($_POST['add_form'])){
$room_no = $_POST['room_no'];
$days = $_POST['days'];
$extra_bed = $_POST['extra_bed'];
$query = $conn->query("SELECT * FROM transaction WHERE room_no = '$room_no' && status = 'Check In'") or die(mysqli_error());
$row = $query->num_rows;
date_default_timezone_set('Europe/Budapest');
$time = date("H:i:s");
$query2=$conn->query("SELECT * FROM transaction NATURAL JOIN guest NATURAL JOIN room WHERE transaction_id = '$_REQUEST[transaction_id]'") or die(mysqli_error());
$fetch2=$query2->fetch_array();
$query22=$conn->query("SELECT * FROM room WHERE roomid='".$fetch2['room_id']."'") or die(mysqli_error());
$fetch22=$query22->fetch_array();

$ttale_new=$days*$room_no;
$total2 =$extra_bed;
$total3 =$fetch22['price']*$ttale_new;
$conn->query("UPDATE transaction SET room_no = '$room_no', days = '$days', extra_bed = '$extra_bed', status = 'Check In',status1 = 'booked', checkin_time = '$time',bill = '$total3' WHERE transaction_id = '$_REQUEST[transaction_id]'") or die(mysqli_error());
header("location:checkin.php");
}
?>