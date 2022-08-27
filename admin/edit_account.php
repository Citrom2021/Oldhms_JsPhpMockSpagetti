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
              <h3 class="box-title">Update Account</h3>
			  <p><?php require_once 'add_query_account.php'?></p>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<?php
					$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
           <form method = "POST" action = "edit_query_account.php?admin_id=<?php echo $fetch['admin_id']?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                 <input type = "text" class = "form-control" value = "<?php echo $fetch['name']?>" name = "name" />
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
                </div>
				
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                 	<input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit"  name="edit_account" class="btn btn-primary">Update</button>
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
	


