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
<link rel="stylesheet" type="text/css" href="styles/test-labrary.css">
<?php if($language_id == 'ar'){ ?><link rel="stylesheet" type="text/css" href="styles/bootstrap-rtl.css"><?php } ?>
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<?php include("header.php"); ?>
	

    <!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" style="background-image:url(images/slide2.jpg);background-position:center; background-repeat:no-repeat; background-size:cover;"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>TEST</span> Labrary</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="#">Home</a></li>
									<li>TEST Library</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- table -->

	
	<div class="container mt-3">
<!--  <h2>Test Menu</h2>-->
<!--  <p>Type something in the input field to search the table for first names, last names or emails:</p>  -->
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Test name</th>
        <th>Sample tybe</th>
        <th>Run/Proces day</th>
         <th>Precautions require</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>CPK - Total</td>
        <td>Serum</td>
        <td>Same day</td>
          <td>Fasting Blood Glucose</td>
      </tr>
      <tr>
        <td>Serum</td>
        <td>Serum</td>
        <td>Same day</td>
          <td>Serum</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Serum</td>
        <td>Same day</td>
          <td>لايشترط الصيام
          </td>
      </tr>
      <tr>
        <td>Same day</td>
        <td>Serum</td>
        <td>Same day</td>
          <td>Same day</td>
      </tr>
    </tbody>
  </table>
        </div>
<!--  page-->
 
  <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
 <br />
</div>


	<!-- footer -->
<?php include("footer.php"); ?>
<!--end container-->
    </div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/financial_custom.js"></script>
<script src="js/services.js"></script>
<script src="js/custom.js"></script>

</body>
</html>