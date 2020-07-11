
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
<link rel="stylesheet" type="text/css" href="styles/login.css">
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
							<div class="home_title"> Test  <span>Result</span></div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">home</a></li>
									<li> Test Result</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About -->

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="section_title"><h2>Test Results</h2></div>
					<div class="about_text">
						<p> 
						
If you’re like the rest of us, where you don’t have much time on your hands to come to one of our branches and pick up your test results... you must login first
						</p>
                            
                        
						
					</div>
                </div>
				
				<!-- Boxes -->
				<div class="col-lg-6 boxes_col">

					<!-- Box -->
					<div class="img working_hours">
						<div class="img d-flex flex-column align-items-start justify-content-center">
						 <div class="section_title"><h2>LOGIN FORM</h2></div>
 <div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div class="input_container"><input type="text" class="contact_input" placeholder="Your Username" required="required"></div>
							<div class="input_container"><input type="password" class="contact_input" placeholder="Your Password" required="required"></div>
						
						<button class="button contact_button"><a href="#">LOG IN</a></button>
						</form>
						<br><br>
					</div>
</div>
					</div>
				</div>
			</div>
		</div>
	    </div>
   
	
	
	<!-- footer -->
<?php include("footer.php"); ?>
	
<!--	end container-->
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