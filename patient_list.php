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
 
  <a class="active" href="patient_list.php"><i class="fa fa-users" aria-hidden="true"></i> Patients List</a>
 
  <a href="test_price_list.php"><i class="fa fa-list-alt" ari""a-hidden="true"></i> Tests Price List</a>
 
  <a href="feedback_lab.php"><i class="fa fa-commenting" aria-hidden="true"></i> feedback</a>
  
</div>



<br />
 <div class="content">
<div class="container">

  <h2>
  patient list
</h2>
 <hr>
  
    
   


  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <div class="table-responsive">
 
  <table class="table table-bordered">
    <thead>
      <tr>
	    <th>Tests Required</th>
		<th>Patient Code</th>
        <th>Patient Name</th>
        <th>Phone</th>
		<th>Gender</th>
		<th>Age</th>
        <th>Date</th>
         <th>Total Coast</th>
		 <th>Settings</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr >
        <td>
          <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Tests List
        </a>
      </h4>

        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body" >
            <span style="font-size:12px;">
			<a href="PowerfulEnglishSpeaking.pdf" target="_blank">Complete Blood Test</a> <br />
			<a href="PowerfulEnglishSpeaking.pdf" target="_blank">Complete Blood Test</a> <br />
			<a href="PowerfulEnglishSpeaking.pdf" target="_blank">Complete Blood Test</a> </span>
            </div>
        </div>
    </div>
        </td>
		<td></td>
        <td>Ahmed Medhat</td>
        <td>0116994007</td>
		<td>Male</td>
		<td>35 years</td>
		<td>13/01/2019</td>
        <td>350 LE</td>
		<td><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-trash" aria-hidden="true"></i></td>
      </tr>
	  <!----------------------------------------------------------------------------------------------------------->
      <tr>
         <td>
          <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tests List
        </a>
      </h4>

        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
            <span style="font-size:12px;">
			<a href="PowerfulEnglishSpeaking.pdf" target="_blank">Complete Blood Test</a> <br />
			<a href="PowerfulEnglishSpeaking.pdf" target="_blank">Complete Blood Test</a> <br />
			<a href="PowerfulEnglishSpeaking.pdf" target="_blank">Complete Blood Test</a> </span>
            </div>
        </div>
    </div>
        </td>
		 <td></td>
        <td>Marwa Ahmed</td>
        <td>0126334227</td>
		<td>Female</td>
		<td>43 years</td>
		<td>13/01/2019</td>
       <td>250 LE</td>
	   <td><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-trash" aria-hidden="true"></i></td>
      </tr>
	  <!----------------------------------------------------------------------------------------------------------->
    </tbody>
  </table>
   </div>
</div>
    </div>
  
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