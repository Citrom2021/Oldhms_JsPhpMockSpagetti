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
              <h3 class="box-title">Update Room</h3>
			  <p><?php require_once 'edit_query_room.php'?></p>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method = "POST" enctype = "multipart/form-data">
							<?php
						$query = $conn->query("SELECT * FROM `room` WHERE `roomid` = '$_REQUEST[room_id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Room Type </label>
                 <select class = "form-control" required = required name = "room_type">
								<option value="">Choose an option</option>
								<option value="Standard" <?php if($fetch['room_type'] == "Standard"){echo "selected";}?>>Standard</option>
								<option value="Superior" <?php if($fetch['room_type'] == "Superior"){echo "selected";}?>>Superior</option>
								<option value="Super Deluxe" <?php if($fetch['room_type'] == "Super Deluxe"){echo "selected";}?>>Super Deluxe</option>
								<option value="Jr. Suite" <?php if($fetch['room_type'] == "Jr. Suite"){echo "selected";}?>>Jr. Suite</option>
								<option value="Executive Suite" <?php if($fetch['room_type'] == "Executive Suite"){echo "selected";}?>>Executive Suite</option>
								<option value="Luxury" <?php if($fetch['room_type'] == "Luxury"){echo "selected";}?>>Luxury</option>
							</select>
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                 
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['price']?>" class = "form-control" name = "price" />
                </div>
				
                <div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit"  name="edit_room" class="btn btn-primary">Update Room</button>
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