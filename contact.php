
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
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<?php if($language_id == 'ar'){ ?><link rel="stylesheet" type="text/css" href="styles/bootstrap-rtl.css"><?php } ?>
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<?php include("header.php"); ?>
	
<!--HOME	-->
<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-6 col">
            
            <div class="boxes working_hour" >
							<div class="section_title">
            <h2>Contact Info</h2>
          </div>
						
            <div class="contact_text">
            <h4> Head Office</h4>	
            </div>
            <ul class="contact_about_list">
                <li>PHONE:19600 </li><br>
                <li>Email: info@LAB MED.com</li><br>
                <li>Address:ELHARM Street</li><br>
            </ul>

						</div>

            
        </div>      
				<!-- Contact Form -->
				<div class="col-lg-6 form_col col">
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div class="row">
								<div class="col-md-6 input_col">
									<div class="input_container input_name" id="name"><input type="text" class="contact_input" placeholder="Name" required="required"></div>
								</div>
								<div class="col-md-6 input_col">
									<div class="input_container"><input type="email" class="contact_input" placeholder="Email" required="required"></div>
								</div>
							</div>
							<div class="input_container"><input type="text" class="contact_input" placeholder="Subject" required="required"></div>
							<div class="input_container"><textarea class="contact_input contact_text_area" placeholder="Message" required="required"></textarea></div>
							<button class="button contact_button"><a href="#">send</a></button>
						</form>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13820.229010308805!2d31.18398866977539!3d30.00651240000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458468b02f560b1%3A0x6b58810eefaa4f36!2sAl+Mokhtabar+-+Moamena+Kamel+Laboratories!5e0!3m2!1sen!2seg!4v1545772017136" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                                </div>
								</div>
							</div>
						</div>

						<!-- Working Hours -->
						<div class="box working_hours">
							<div><i class="fa fa-map-marker fa-5x" id="mark"></i></div>
							<div class="box_title"><span class="btn btn-success" data-toggle="modal" data-target="#myModal">Branch contact </span></div>

							<div class="working_hours_list">
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										
										<select class="form-control">
                                          <option>Contury</option>
                                          <option>EGYPT</option>
                                        </select>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<select class="form-control">
                                          <option>Branch</option>
                                           <option>HARM</option>
                                            <option>FAYSAL</option>
                                             <option>Branch</option>
                                        </select>

									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div></div>
										<div class="ml-auto"></div>
									</li>
								</ul>
							</div>
						</div>
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">branch details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <ul class="branch">
                <li>PHONE:19600 </li><br>
                <li>Email: info@LAB MED.com</li><br>
                <li>Address:ELHARM Street</li><br>
            </ul>

        </div>
        
       
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