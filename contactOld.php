<?php
//code for header
	include("header.php");
//code for contact
error_reporting(0);
require_once 'admin/connect.php';
if(isset($_POST['contact_us'])!='')
{
$sel_admin_email= mysqli_query($conn,"select * from admin where admin_id='1'");
$res_adminemails=mysqli_fetch_array($sel_admin_email);
$to=$res_adminemails['email'];
$name=$_POST['name'];
$message=$_POST['message'];
$subject=$_POST['subject'];
$name=$_POST['name'];
$from =$_POST['email'];
     
  $body = "Dear Admin<br>".
  "Here Is Contact info<br>".
  "Name: $name <br>".
  "Email: $from  <br>".
  "Message: $message <br>".
  "Best Regards<br>".
  "$name<br>"; 
  $headers = "From: " . strip_tags($from) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $mail=mail($to, $subject, $body,$headers); 
}	
	?>
	<!--slider section-->
<div class="hero-wrap" style="background-image: url('images/bg_1_new.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
	            <h1 class="mb-4 bread">Contact us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--Contact section-->
		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4" style="border:1px solid grey">
	            <p><span>Address:</span> 1012 Budapest, Képzelet utca 66, Hungary</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4" style="border:1px solid grey">
	            <p><span>Phone:</span> <a href="tel://1234567920">+36 392 3929 210</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex" >
          	<div class="info bg-white p-4" style="border:1px solid grey">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@budapesthotel.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4" style="border:1px solid grey">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
		<!--Contact Form section-->
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="" class="bg-white p-5 contact-form" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required="required">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email"  required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject"  required="required">
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" class="form-control" name="message" placeholder="Message"  required="required"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="contact_us" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
 <!--image section-->
          <div class="col-md-6 d-flex">
          	<img src="images/contact/kontakt_us.jpg" width="540" height="560">
          </div>
        </div>
      </div>
    </section>	
	
	
	
	
	
	
	
	
<?php
	//code for footer
	include("footer.php");
	?>	
	