<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel Reservation System | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
			<script language="javascript" type="text/javascript">
       function daysDifference() {
         //define two variables and fetch the input from HTML form
         var dateI1 = document.getElementById("dateInput1").value;
         var dateI2 = document.getElementById("dateInput2").value;
		 var dateI3 = document.getElementById("dateInput3").value;

        //define two date object variables to store the date values
         var date1 = new Date(dateI1);
         var date2 = new Date(dateI2);
		 var date3 = new Date(dateI3);
 
        //calculate time difference
         var time_difference = date2.getTime() - date1.getTime();
		 
		 
		 var time_difference1 = date1.getTime() - date3.getTime();
		 
		 var result1 = time_difference1 / (1000 * 60 * 60 * 24);

         //calculate days difference by dividing total milliseconds in a day
         var result = time_difference / (1000 * 60 * 60 * 24);
          
		  document.getElementById("days").value=result;
		  
		  document.getElementById("days123").value=result1;
		  
		  var billresults=document.getElementById("amount1").value*document.getElementById("days").value;
		  
		  document.getElementById("bill").value=billresults;
        
                    }
      </script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">HOME</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="reservation.php" class="nav-link">Reservations</a></li>
	          <li class="nav-item"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>