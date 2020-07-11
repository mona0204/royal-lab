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
<link rel="stylesheet" type="text/css" href="styles/new_patient.css">
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
 
  
  <a class="active" href="new_patient.php"><i class="fa fa-user-plus" aria-hidden="true"></i> New Patients</a>
 
  <a href="patient_list.php"><i class="fa fa-users" aria-hidden="true"></i> Patients List</a>
 
  <a href="test_price_list.php"><i class="fa fa-list-alt" ari""a-hidden="true"></i> Tests Price List</a>
 
  <a href="feedback_lab.php"><i class="fa fa-commenting" aria-hidden="true"></i> feedback</a>
  
</div>



<div class="content">
<div class="container">

  <h2>New Patients
</h2>
 <hr>
  <div class="card">
    <div class="card-header">Add new patient</div>
    <div class="card-body">
<form action="#">
 <div class="row">
   <div class="col-lg-4">
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" id="email">
  </div>
  </div>
  <div class="col-lg-4">
  <div class="form-group">
    <label for="pwd">Phone:</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  </div>
   <div class="col-lg-4">
  <div class="form-group">
    <label for="pwd">Mobile:</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  </div>
    </div>
    
     <div class="row">
   <div class="col-lg-4">
  <div class="form-group">
    <label for="email">Age:</label>
    <input type="text" class="form-control" id="email">
  </div>
  </div>
  <div class="col-lg-4">
  <div class="form-group">
    <label for="pwd">Age type:</label>
    <select class="form-control" id="pwd">
     <option>days</option>
     <option>Months</option>
     <option>Years</option>
      </select>
  </div>
  </div>
   <div class="col-lg-4">
  <div class="form-group">
    <label for="pwd">Gender:</label>
    <select class="form-control" id="pwd">
     <option>Male</option>
     <option>Female</option>
      </select>
  </div>
  </div>
    </div>
    
    <label for="pwd">Test Name</label><br />
    <input list="browsers" id="test_name">
    <datalist id="browsers">
  <option value="Internet Explorers-320">
  <option value="Firefox-240">
  <option value="Chrome-660">
  <option value="Opera-280">
  <option value="Safari-100">
</datalist>

  <button type="button" class="btn btn-primary" onclick="myFunction()">Add Test</button>
  
  <table id="demo"></table>
  <br /> <br />
  <button type="submit" class="btn btn-primary">Save</button>
</form>

  </div> 
  
  </div>
  
  
  
</div>

  </div>
  
  
    
<!--   end container -->
    </div>
    
<!--  script -->
   <script src="js/new_patient.js"></script>
     <script src="js/arrary.js"></script>


</body>
</html>