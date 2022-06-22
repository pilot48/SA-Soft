<?php  
	//including main class
	include "./includes/class-autoload.inc.php"; 
	
	$employees = new Employees(); 
	
	if(isset($_GET["emp_ID"])){
		
		$emp_ID = $_GET['emp_ID'];
		$employees->delEmployees($emp_ID);
		
		
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Employees</title> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="" style="background-color: #110010; color:#ffffff">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">SA Soft</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="list.php">Employee List</a> 
    </div>
  </div>
</nav>
<div class="container">
  
   

  <div class="row"> 
	<div class="col-md-3 order-md-1 mt-4">
	<h4 class="mb-0">Employees</h4>
	<?php 
		
		echo '<small>There are '.$employee = $employees->countEmp().' Employees</small>';
	?>
		
	</div>
	<div class="col-md-6 order-md-1 mt-4">
		<form method="POST" action="">
			<div class="input-group"> 
					<input type="search" id="search" name="search" class="form-control" /> 
					 
					<button type="button" class="btn btn-primary btn-sm">
					<i class="fa fa-search"></i>
					</button>
			</div>
		</form>	
	</div>
	<div class="col-md-3 order-md-1 mt-4">
	<a href="index.php" class="btn btn-primary btn-md float-right" ><i class="fa fa-plus"></i> New Employee</a>
	</div>
    <div class="col-md-12 order-md-1 mt-4"> 
      <?php
		
     
     
		 
		if($employees->getEmployees()) {
			echo '<table class="table table-striped" style="color:#fff">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Emp ID</th>
			  <th scope="col">First Name</th>
			  <th scope="col">Last Name</th>
			  <th scope="col">Contact</th>
			  <th scope="col">City</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody>';
		  foreach($employees->getEmployees() as $employee) {  
			echo "<tr>
				<td>". $employee['u_id'] ."</td>
				<td>". $employee['emp_ID'] ."</td>
				<td>". $employee['firstname'] ."</td>
				<td>". $employee['lastname'] ."</td>
				<td>". $employee['contact'] ."</td> 
				<td>". $employee['city'] ."</td>
				<td><a href='list.php?emp_ID=". $employee['emp_ID'] ." ' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Del</a> | <a href='editEmployee.php?emp_ID=". $employee['emp_ID'] ." '  class='btn btn-warning btn-sm'><i class='fa fa-edit'></i> Edit</a></td>
			</tr>";
		  }
		}  else {
		  echo "
			<div class='row'>
				<div class='col-md-3 float-center'>
				</div>
				<div class='col-md-6 float-center'>
					<div class=''><img src='assets/Icon.JPG' class='rounded mx-auto d-block'></div>
					<div class='col-md-12 float-center'><p class=''><h4>The is nothing here</h4></p></div><br><br>
					<div class='col-md-12 float-center'><p class=''>Create a new employee by clicking the</p></div>
					<div class='col-md-12 float-center'><p class=''><strong>New Employee</strong> button to get started</p></div>
				</div>	
				<div class='col-md-3 float-center'>
				</div>
			</div>
		  
		  ";
		}
	?> 
  </tbody>
</table>
	  
  </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022-2022 Soft SA</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="form-validation.js"></script>
  </body>
</html>
