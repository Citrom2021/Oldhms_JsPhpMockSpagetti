<?php
require_once 'validate.php';
require 'name.php';
include("header.php");
include("connect.php");
error_reporting(0);
//total user
 $query_users_counter=mysqli_query($conn,"select * FROM admin");
 $number_user_counter=mysqli_num_rows($query_users_counter);

//total compign list
 $query_com_counter=mysqli_query($conn,"select * FROM guest");
 $number_counter=mysqli_num_rows($query_com_counter);
 //total tables
 
 $showtables= mysqli_query($conn,"select * FROM room");
 $number_counter_tables=mysqli_num_rows($showtables);
//edit room page in admin
$showtables_transaction= mysqli_query($conn,"select * FROM transaction");
 $number_counter_transaction=mysqli_num_rows($showtables_transaction);
?>
 
 
 
  <?php 
  //code for to show left bar
  include("leftbar.php"); ?>
 <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Accounts</span>
              <span class="info-box-number"><?php echo $number_user_counter;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Guests</span>
              <span class="info-box-number"><?php echo $number_counter?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Rooms</span>
              <span class="info-box-number"><?php echo  $number_counter_tables;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-folder"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Reservations</span>
              <span class="info-box-number"><?php echo $number_counter_transaction;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->
          
          <!-- /.box -->
          
          <!-- /.row -->
		 

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Reservations</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Name</th>
							<th>Contact No</th>
							<th>Room Type</th>
							<th>Check In Date</th>
							<th>Check Out Date</th>
							<th>Room No</th>
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
							<th>Room No</th>
							<th>No Of Days</th>
							<th>No Of  Guests</th>
							<th>Price</th>
							<th>Status</th>
							<th>Action</th>
                </tr>
                </tfoot>
              </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        
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