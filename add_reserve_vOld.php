<?php
//code for header
	include("header.php");
//code for contact
error_reporting(0);
require_once 'admin/connect.php';	
	?>
	<!--slider section-->	 
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>MAKE A RESERVATION</span></p>
	            <h1 class="mb-4 bread">MAKE A RESERVATION</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--RESERVATION Form section-->
		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
		  <?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `roomid` = '$_REQUEST[room_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
            <h2 class="h3">MAKE A RESERVATION</h2>
			<p><?php require_once 'add_query_reserve.php'?></p>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span><?php echo $fetch['room_type']?></span></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><?php echo "HUF".$fetch['price'].".00";?></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
			  <label>First name</label>
				<input type="text" class="form-control" name="firstname" required="required" style="width: 440px;"/>
              </div>
              
              <div class="form-group">
			  <label>Last name</label>
               <input type="text" class="form-control" name="lastname" required="required" />
              </div>
              <div class="form-group">
			  <label>Address</label>
                <textarea  id="" cols="30" rows="7" class="form-control" name="address" placeholder="Address"  required="required"></textarea>
              </div>
			  
			  <div class="form-group">
			   <label>Contactno</label>
              <input type="number" class="form-control" name="contactno" placeholder="Format example: 36202434567 (Hungary)" required="required" />
              </div>
			  
			  <div class="form-group">
			   <label>Days</label>
              <input type="number" min="0" max="999999999" class="form-control" name="days" placeholder="Number of days staying" required="required" />
              </div>
			  
			  <div class="form-group">
			   <label>Room No</label>
              <input type="number" min="0" max="999999999" class="form-control" name="room_no" placeholder="How many rooms you want to book"  required="required" />
              </div>
			  
			  <div class="form-group">
			   <label>Guests</label>
              <input type="number" min="0" max="999999999" class="form-control" name="guest_no" value="<?php echo $_GET['guest'];?>" placeholder="For how many guest you would like to book" required="required" />
              </div>
			  
			  
			  <div class="form-group">
			   <label>Check in</label>
              <input type="date" class="form-control" name="date" required="required" />
              </div>
			  
			  
			  <div class="form-group">
			   <label>Check out</label>
              <input type="date" class="form-control" name="date1" required="required" />
              </div>
			  
			  
              <div class="form-group">
                <input type="submit" name="add_guest" value="Save" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
         <!--image Form section-->
          <div class="col-md-6 d-flex">
          
			<img src="photo/<?php echo $fetch['photo']?>" width="540" height="560">
          </div>
        </div>
      </div>
    </section>	
	
<?php
	//code for footer
	include("footer.php");
	?>	

