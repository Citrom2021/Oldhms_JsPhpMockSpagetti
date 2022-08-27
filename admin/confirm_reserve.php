<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	include("header.php");
?>
<?php 
  //code for to show left bar
  include("leftbar.php"); 
  ?>
  <div class="content-wrapper">
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Fill up form</h3>
			  <p><?php require_once 'add_query_room.php'?></p>
            </div>
			<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
					
					
					$query_gusts = $conn->query("select * from guest where guestid='".$fetch['guest_id']."'") or die(mysqli_error());
					$query_guest_info = $query_gusts->fetch_array();
					        
							
							//get room info
							
							$query_room_info = $conn->query("select * from room where roomid='".$fetch['room_id']."'") or die(mysqli_error());
					        $feect_room_info= $query_room_info->fetch_array();
							
						
					
				?>
            <!-- /.box-header -->
            <!-- form start -->
            <form method = "POST" enctype = "multipart/form-data" action = "save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
						
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Firstname</label>
                <input type="text" value="<?php echo $query_guest_info['firstname']?>" class="form-control"  disabled="disabled"/>
                </div>
				
				
				
				
				
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Lasttname</label>
                <input type="text" value="<?php echo $query_guest_info['lastname']?>" class="form-control" size ="40" disabled="disabled"/>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Room Type</label>
                <input type="text" value="<?php echo $feect_room_info['room_type']?>" class="form-control" size ="40" disabled="disabled"/>
                </div>
				
					<div class="form-group">
                  <label for="exampleInputEmail1">Room No</label>
				  <input type="number" min="0" max="999" name="room_no" value="<?php echo $fetch['room_no'];?>" class="form-control" required="required"/>
                </div>
				
					<div class="form-group">
                  <label for="exampleInputEmail1">Days</label>
               <input type="number" min="0" max="99" name="days" value="<?php echo $fetch['days'];?>" class="form-control" required="required"/>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Guests</label>
               <input type="number" min="0" max="99" name="guest_no" value="<?php echo $fetch['guest_no'];?>" class="form-control" required="required"/>
                </div>
				
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Extra Beds</label>
                 <input type="number" min="0" max="99" name="extra_bed" class="form-control"/>
                </div>
				
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit"  name="add_form" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
	</div>
	




<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>