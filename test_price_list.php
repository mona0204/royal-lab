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

<!--======  fonts ======-->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!--======  main STYLESHEETS ======-->
<link rel="stylesheet" type="text/css" href="styles/patient_list.css">
<link rel="stylesheet" type="text/css" href="styles/test-result_responsive.css">



</head>
<body>
<div class="super_container">
	
<!-- Header -->

	<header class="header trans_200">
		
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            
							<div class="d-flex flex-row align-items-center justify-content-start ml-auto"><div class="main_menu_phone"><button type="button" class="btn btn-danger" style="float:right;">Logout</button>
  </div>
                        
                        </div>
							
							</div>
						</div>

					</div>
				</div>
			</div>
		
</header>

<div class="sidebar">
  <br /><br />
 <center>
 <i class="fa fa-user-circle" aria-hidden="true" style="font-size:60px;color:white;"></i>
 <p style="color:white;">Mega Lab</p>
 </center>
 
  
  <a  href="new_patient.php"><i class="fa fa-user-plus" aria-hidden="true"></i> New Patients</a>
 
  <a  href="patient_list.php"><i class="fa fa-users" aria-hidden="true"></i> Patients List</a>
 
  <a class="active" href="test_price_list.php"><i class="fa fa-list-alt" ari""a-hidden="true"></i> Tests Price List</a>
 
  <a href="feedback_lab.php"><i class="fa fa-commenting" aria-hidden="true"></i> feedback</a>
  
</div>


 

 <div class="content">
<div class="container">
 <br><br>
  <h2>
  Test price list
</h2>
 <hr>
  
    
   

  

  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
	    <th>ID</th>
		<th>TEST NAME</th>
        <th>SAMPLE TYPE	</th>
        <th>RUN/ PROCESS DAY</th>
		<th>PRECAUTIONS</th>
		<th>PRICE</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr >
        <td>

	1
        </td>
		<td>CPK - Total	</td>
        <td>Serum</td>
        <td>Same day</td>
		<td></td>
		<td>350 LE</td>
      </tr>
    </tbody>
  </table>
    </div>
    
</div>
    </div>
    </div>
    
<!--    script-->
   <script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>

<script src="js/custom.js"></script>


</body>
</html>