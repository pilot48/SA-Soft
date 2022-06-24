<?php

	//including main class
	include "./includes/class-autoload.inc.php";
	$emp_ID = $_GET["emp_ID"];
	
	$employees = new Employees();
	$employee = $employees->editEmployees($emp_ID); 
	
	if(isset($_POST["submit"])){
		//calling form variable
		$rating =  $_POST ["rating"];
		$experience =  $_POST ["experience"];
		$skill =  $_POST ["skill"];
		$code =  $_POST ["code"];
		$city  =  $_POST ["city"];
		$country =  $_POST ["country"];
		$address =  $_POST ["address"];
		$date =  $_POST ["date"];
		$email =  $_POST ["email"];
		$contact =  $_POST ["contact"];
		$lastname =  $_POST ["lastname"];
		$firstname	=  $_POST ["firstname"]; 
		
		$employees->updateEmployees($emp_ID, $firstname, $lastname, $contact, $email, $date, $address, $city, $code, $country, $skill, $experience, $rating);
		
		 
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
    <title>Update Employee</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/">

    

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
  <body style="background-color: #110010; color:#ffffff">
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
  
  <!-- Nav to come here -->

  <div class="row"> 
    <div class="col-md-10 order-md-1 mt-4">
      <h4 class="mb-3">Edit Employee</h4>
      <form class="needs-validation" method="POST" action="" novalidate>
        <div class="row">
			<div class="col-md-12 mb-3">
            <label for="emp_id">Employee ID</label>
            <input type="text" class="form-control" name="emp_id" id="emp_id" value="<?= $employee['emp_ID'] ?>" disabled>
          </div>
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstName"  value="<?= $employee['firstname'] ?>" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastName" value="<?= $employee['lastname'] ?>" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="contact">Contact Number</label>
          <div class="input-group">
             
            <input type="text" class="form-control" name="contact" id="contact" value="<?= $employee['contact'] ?>" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your contact number is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted"> </span></label>
          <input type="email" class="form-control" name="email" id="email" value="<?= $employee['email'] ?>" required>
          <div class="invalid-feedback">
            Please enter a valid email address for  updates.
          </div>
        </div>
		
		<div class="mb-3">
          <label for="email">Date of Birth <span class="text-muted"></span></label>
          <input type="date" class="form-control" name="date" id="date" value="<?= $employee['dob'] ?>" required>
          <div class="invalid-feedback">
            Please enter a valid date.
          </div>
        </div>
		<hr class="mb-4">
		<h5>Address Info</h5>
        <div class="mb-3">
          <label for="address">Street </label>
          <input type="text" class="form-control" name="address" id="address" value="<?= $employee['address'] ?>" required>
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div> 
		
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
			<input type="text" class="form-control" name="country" id="country" value="<?= $employee['country'] ?>" required>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">City</label>
			<input type="text" class="form-control" name="city" id="city" value="<?= $employee['city'] ?>" required>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Code</label>
            <input type="text" class="form-control" name="code" id="code" value="<?= $employee['postal'] ?>" required>
            <div class="invalid-feedback">
              Postal code required.
            </div>
          </div>
        </div>
  
        <hr class="mb-4">
		<h5>Skills</h5>
		<div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Skill</label>
			<input type="text" class="form-control" name="skill" id="skill" value="<?= $employee['skill'] ?>" >
             
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Yrs Exp</label>
			<input type="text" class="form-control" name="experience" id="experience" value="<?= $employee['year'] ?>" >
            
          </div> 
		  <div class="col-md-3 mb-1">
            <label for="zip">Seniotary Rating</label> 
            <select class="custom-select d-block w-100" name="rating" id="rating" value="<?= $employee['level'] ?>" >
              <option value="<?= $employee['level'] ?>">Choose...</option>
              <option value="Biginner">Biginner</option>
              <option value="Intermediate">Intermediate</option>
              <option value="Expect">Expert</option>
            </select> 
             
          </div>
        </div>
		<a href="list.php" class="btn btn-danger btn-lg   col-md-5 "  >Cancel</a>
        <button class="btn btn-primary btn-lg col-md-5 float-right" name="submit" type="submit">Save Changes to Employee</button>
      </form>
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