<?php
//code for header
	include("header.php");
?>
<!--slider section-->	
<div class="hero-wrap" style="background-image: url('images/bg_1_new.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center fadeInUp ftco-animated">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="#"></a></span> <span></span></p>
	            <h1 class="mb-4 bread">Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </div>	
	<!--RESERVATION section-->	
<section class="ftco-section bg-light ftco-no-pb">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Hotel Budapest </span>
            <h2 class="mb-4">MAKE A RESERVATION</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			
					<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC LIMIT 6") or die(mysql_error());
					while($fetch = $query->fetch_array())
					{
				?>
				
				<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="rooms-single.html" class="img" style="background-image: url(photo/<?php echo $fetch['photo'];?>););"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1"><?php echo "HUF".$fetch['price'].".00"?></span></p>
	    						<h3 class="mb-3"><a href="#"><?php echo $fetch['room_type']?></a></h3>
	    						<p class="pt-1"><a href="add_reserve.php?room_id=<?php echo $fetch['roomid']?>" class="btn-custom px-3 py-2">Reserve<span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			
<?php }?>
    			
    			

    			
    			
    		</div>
    	</div>
    </section>	
	
	
	
<?php
	//code for footer
	include("footer.php");
?>