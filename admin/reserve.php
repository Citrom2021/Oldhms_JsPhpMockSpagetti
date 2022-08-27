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
       Pendinig Reservations
        
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
              <h3 class="box-title">Pendinig Reservations</h3>
            </div>
            <!-- /.box-header -->
			<link rel="stylesheet" href="plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
			
              <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Name</th>
							<th>Contact No</th>
							<th>Room Type</th>
							<th>Check In Date</th>
							<th>Check Out Date</th>
							<th>No Of Rooms</th>
							<th>No Of Days</th>
							<th>No Of  Guests</th>
							<th>Price</th>
							<th>Status</th>
							<th>Action</th>
                </tr>
                </thead>
               <tbody>
						<?php
							$query = $conn->query("SELECT * FROM transaction WHERE status='Pending'") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
							//code for to get guest info
							
							$query_guest_info=mysqli_query($conn,"select * from guest where guestid='".$fetch['guest_id']."'");
							$feect_guest_info=mysqli_fetch_array($query_guest_info);
							//get room info
							$query_room_info=mysqli_query($conn,"select * from room where roomid='".$fetch['room_id']."'");
							$feect_room_info=mysqli_fetch_array($query_room_info);
							
						?>
						<tr>
							<td><?php echo $feect_guest_info['firstname']." ".$feect_guest_info['lastname'];?></td>
							<td><?php echo $feect_guest_info['contactno'];?></td>
							<td><?php echo $feect_room_info['room_type'];?></td>
							<td><strong><?php echo date("M d, Y", strtotime($fetch['checkin']));?></strong></td>
							<td><strong><?php echo date("M d, Y", strtotime($fetch['checkout']));?></strong></td>
							<td><?php echo $fetch['room_no']?></td>
							<td><?php echo $fetch['days']?></td>
							<td><?php echo $fetch['guest_no'];?></td>
							<td><?php echo 'HUF'.$feect_room_info['price'];?></td>
							<td><?php echo $fetch['status']?></td>
							<td><a class = "btn btn-success" href = "confirm_reserve.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-check"></i> Check In</a> <a class = "btn btn-danger" onclick = "confirmationDelete(); return false;" href = "delete_pending.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-trash"></i> Discard</a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
					<tfoot>
                <tr>
                   <th>Name</th>
							<th>Contact No</th>
							<th>Room Type</th>
							<th>Check In Date</th>
							<th>Check Out Date</th>
							<th>No Of Rooms</th>
							<th>No Of Days</th>
							<th>No Of  Guests</th>
							<th>Price</th>
							<th>Status</th>
							<th>Action</th>
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
<script src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.js"></script>
<script src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
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
