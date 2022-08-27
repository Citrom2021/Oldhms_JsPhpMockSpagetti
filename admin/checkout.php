<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	include("header.php");
	error_reporting(0);
?>
<?php 
  //code for to show left bar
  include("leftbar.php"); 
  ?>
<?php
//counter code for pending checkin checkout
$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
$f_p = $q_p->fetch_array();
$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
$f_ci = $q_ci->fetch_array();
?>
   <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Checkout Reservations
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Dashbaord</a></li>
        <li><a href="reserve.php">(<?php echo $f_p['total']?>)Pendings</a></li>
        <li class="active"><a href="checkin.php">(<?php echo $f_ci['total']?>)Checkin</a></li>
		<li class="active"><a href="checkout.php">Checkout</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Checkout Reservations</h3>
            </div>
            <!-- /.box-header -->
			
            <div class="box-body">
			<div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
              <th>Name</th>
							<th>Room Type</th>
							<th>Contact Number</th>
							<th>Room no</th>
							
							<th>Check In</th>
							<th>Days</th>
							<th>Check Out</th>
							<th>No Of Guests</th>
							<th>Status</th>
							<th>Extra Bed</th>
							<th>Bill</th>
							<th></th>
                </tr>
                </thead>
               <tbody>
						<?php
							$total_sum=0;
							$query = $conn->query("SELECT * FROM `transaction` WHERE `status`='Check Out'") or die(mysqli_query());
							while($fetch = $query->fetch_array())
							{
							//code for to get guest info
							$query_guest_info=mysqli_query($conn,"select * from guest where guestid='".$fetch['guest_id']."'");
							$feect_guest_info=mysqli_fetch_array($query_guest_info);
							//get room info
							$query_room_info=mysqli_query($conn,"select * from room where roomid='".$fetch['room_id']."'");
							$feect_room_info=mysqli_fetch_array($query_room_info);
							$total_sum+=$fetch['bill'];
						?>
						<tr>
							<td><?php echo $feect_guest_info['firstname']." ".$feect_guest_info['lastname'];?></td>
							
							<td><?php echo $feect_room_info['room_type'];?></td>
							<td><?php echo $feect_guest_info['contactno'];?></td>
							<td><?php echo $fetch['room_no']?></td>
							<td><?php echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>"." @ "."<label>".date("h:i a", strtotime($fetch['checkin_time']))."</label>"?></td>
							<td><?php echo $fetch['days']?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']."+".$fetch['days']."DAYS"))."</label>"." @ "."<label>".date("h:i A", strtotime($fetch['checkout_time']))."</label>"?></td>
							<td><?php echo $fetch['guest_no']?></td>
							<td><?php echo $fetch['status']?></td>
							<td><?php if($fetch['extra_bed'] == "0"){ echo "None";}else{echo $fetch['extra_bed'];}?></td>
							<td><?php echo "HUF"." ".$fetch['bill'].".00"?></td>
							<td><label class = "">Paid</label></td>
						</tr>
						<?php
							}
						?>
					</tbody>
					<tfoot>
                <tr>
                 <th>Name</th>
							<th>Room Type</th>
							<th>Contact Number</th>
							<th>Room no</th>
							
							<th>Check In</th>
							<th>Days</th>
							<th>Check Out</th>
							<th>No Of Guests</th>
							<th>Status</th>
							<th>Extra Bed</th>
							<th>Total Bill:<?php echo "HUF"." ".$total_sum.".00"?></th>
							<th></th>
                </tr>
                </tfoot>
              </table>
            </div>
			</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Admin for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
  <?php
//include("footer.php");
?> 
