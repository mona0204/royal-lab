
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
<link rel="stylesheet" type="text/css" href="styles/sub_page.css">
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
							<div class="home_title">Read <span>more</span></div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>GO lab</li>
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
				<div class="col-lg-12">
					<div class="section_title"><h2>A great medical team to help your needs</h2></div>
					<div class="about_text">
						<p> Lab MED is the largest private medical laboratory testing company in the Middle East, providing diagnostic laboratory services, pathological and clinical tests for medical communities in Egypt. The company offers a portfolio of over than 1,200 clinical analysis in the areas of immunology, hematology/coagulation, clinical chemistry, parasitology, microbiology/infectious diseases, toxicology, cytology, surgical pathology, flowcytometry, molecular biology and cytogenetics Lab MED is the largest private medical laboratory testing company in the Middle East, providing diagnostic laboratory services, pathological and clinical tests for medical communities in Egypt. The company offers</p>
						
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