<?php
//code for header
	include("header.php");
//code for contact
error_reporting(0);
require_once 'admin/connect.php';	
	?><head>
 
<style>
.hero-wrap .slider-text .bread
{
font-size: 40px!important;
}

</style>	
	<!--slider section-->	 
  
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="#"></a></span> <span></span></p>
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
            <h2 class="h3">Book your room now</h2>
			<p><?php require_once 'add_query_reserve.php'?></p>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4" style= "border: 1px solid grey;margin: 1px;">
	            <p><span><?php echo "Room type: <br> {$fetch['room_type']}" ?></span></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4" style= "border: 1px solid grey;margin: 1px;">
	            <p><?php echo "Price per night: <br> HUF".$fetch['price'].".00";?></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
			  <label>First name</label>
				<input type="text" class="form-control" name="firstname" required="required" />
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
			   <label>Contact number</label>
              <input type="number" class="form-control" name="contactno" placeholder="format: +36304568971" required="required" />
			    <input type="hidden" min="0" max="999999999" class="form-control" name="room_no" placeholder="Number of rooms to book"  value="1" required="required" />
              </div>
			  		  
			 
			  
			  <div class="form-group">
			   <label>How many guests are coimg?</label>
              <input type="number" min="0" max="999999999" class="form-control" name="guest_no" value="<?php echo $_GET['guest'];?>" placeholder="Number of guests to book for" required="required" />
              </div>
			  
			  
			  <div class="form-group">
			   <label>Check in</label>
              <input type="date" class="form-control" name="date" id="dateInput1" required="required" />
              
              </div>
			  
			  
			  <div class="form-group">
			   <label>Check out</label>
              <input type="date" class="form-control" name="date1" id="dateInput2" required="required" onchange="daysDifference()"/>
			   <input type="hidden" class="form-control" name="dateInput3" id="dateInput3" required="required"  value="<?php echo $checkoutdate;?>"/>
			   <input type="hidden" name="amount1" value="<?php echo $fetch['price'];?>"  id="amount1"/>
			   
			   <input type="hidden" class="form-control" name="days123" id="days123" required="required" />
              </div>
        <div class="form-group">
			   <label>Days staying</label>
              <input type="number" min="0" max="999999999" class="form-control" name="days" id="days" readonly="readonly" placeholder="Calculated from dates picked" required="required" />
              </div>
			  
			  
			     <div class="form-group">
			   <label>Total Bill:HUF</label>
              <input type="number" min="0" max="999999999" class="form-control" name="bill" id="bill" readonly="readonly" placeholder="Total Bill" required="required" />
              </div>
			  
              <div class="form-group">
                <input type="submit" name="add_guest" value="Save" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
         <!--image Form section-->
          <div class="col-md-6 d-flex">
          
			<img src="photo/<?php echo $fetch['photo']?>" style="width:100%;height:320px;">
          </div>
        </div>
      </div>
    </section>	
	
<?php
	//code for footer
	include("footer.php");
	?>	

