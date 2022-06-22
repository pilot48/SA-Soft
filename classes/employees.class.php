<?php 

class Employees extends Dbh {
  public function getEmployees() {
    $sql = "SELECT * FROM employees";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function addEmployees($emp_ID, $firstname, $lastname, $contact, $email, $date, $address, $city, $code, $country, $skill, $experience, $rating) {
    $sql = "INSERT INTO employees(emp_ID, firstname, lastname, contact, email, dob, address, city, postal, country, skill, year, level) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$emp_ID, $firstname, $lastname, $contact, $email, $date, $address, $city, $code, $country, $skill, $experience, $rating]);
	
	header("location: list.php");
	/*if($stmt = true)
		return "Employee added successfullt";
	else
		return "Error occured try adding again";*/
  }

  public function editEmployees($emp_ID) {
    $sql = "SELECT * FROM employees WHERE emp_ID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$emp_ID]);
    $result = $stmt->fetch();

    return $result;
  }

  public function updateEmployees($emp_ID, $firstname, $lastname, $contact, $email, $date, $address, $city, $code, $country, $skill, $experience, $rating) {
    $sql = "UPDATE employees SET firstname = ?, lastname = ? , contact = ? , email = ? , dob = ? , address = ? , city = ? , postal = ? , country = ? , skill = ? , year = ? , level = ? WHERE emp_ID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname, $lastname, $contact, $email, $date, $address, $city, $code, $country, $skill, $experience, $rating, $emp_ID]);
	
	header("location: list.php");
  }

  public function delEmployees($emp_ID) { 
  
    $sql = "DELETE FROM employees WHERE emp_ID = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$emp_ID]);
	header("location: list.php");
  }
  
  public function countEmp(){
  
	$sql = "SELECT count(*) FROM employees"; 
	$result = $this->connect()->prepare($sql); 
	$result->execute(); 
	$number_of_rows = $result->fetchColumn(); 
	
	return $number_of_rows;
  }
}