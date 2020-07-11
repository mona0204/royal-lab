
<?php
$language_id = $_GET['id'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>LAB</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="LAB project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<!--======  fonts ======-->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!--======  main STYLESHEETS ======-->
<link rel="stylesheet" type="text/css" href="styles/visit.css">
<?php if($language_id == 'ar'){ ?><link rel="stylesheet" type="text/css" href="styles/bootstrap-rtl.css"><?php } ?>
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
<!-- Header -->
	<?php include("header.php"); ?>
	
<!--HOME	-->
<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"> House  <span>VISIT</span></div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">home</a></li>
									<li> House VISIT</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="section_title"><h2>Booking House Visit</h2></div>
					<div class="about_text">
						<p> For those of you like us, who don’t have time to come and visit one of our branches, and for those who are unable to make the trip, our staff are more than willing to visit you, at home or at your office, or anywhere you please to take your individual samples. If you like, we can even drop off your results anywhere you please as well. Please call our hotline 19014 to set up an appointment.For those of you like us, who don’t have time to come and visit one of our branches, and for those who are unable to make the trip, our staff are more than willing to visit you, at home or at your office, or anywhere you please to take your individual samples.For those of you like us, who don’t have time to come and visit one of our branches, and for those who are unable to make the trip, our staff are more than willing to visit you, at home or at your office.</p>
                            
                        
						
					</div>
                </div>
				
				<!-- Boxes -->
				<div class="col-lg-6 boxes_col">

					<!-- Box -->
					<div class="img working_hour">
						<div class="img d-flex flex-column align-items-start justify-content-center">
						 <div class="section_title"><h2>House visit form</h2></div>
 <div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div class="row">
								<div class="col-md-6 input_col" id="name">
									<div class="input_container input_name"><input type="text" class="contact_input" placeholder="Your Name" required="required"></div>
								</div>
								<div class="col-md-6 input_col">
									<div class="input_container"><input type="email" class="contact_input" placeholder="Your Phone" required="required"></div>
								</div>
							</div>
							<div class="input_container"><input type="text" class="contact_input" placeholder="Your Address" required="required"></div>
                            <h4> Date:</h4><div class="input_container input_name"> <input type="date" name="bday" id="date"></div>
							
						</form>
						<br>
						<div class="form-group">
                        <textarea id="txt_sty" class="contact_input" placeholder="Notes" required="required"></textarea>
					</div>
						<div class="form-group">
    <label for="exampleFormControlFile1">File UPLOAD</label>
    <input type="file" class="form-control-file input_container input_name" id="exampleFormControlFile1">
  </div>

					
	<button class="button contact_button"><a href="#">send</a></button>
						<br>
					
						
  
					</div>
</div>
					</div>
				</div>
			</div>
		</div>
	    </div>
   

	<!-- footer -->
<?php include("footer.php"); ?>
	    
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>