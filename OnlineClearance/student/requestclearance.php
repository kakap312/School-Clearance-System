<?php include "head.php"?>

<div>
	<?php
	require_once(dirname(__FILE__).'/../config.php');;
	if (isset($_POST['create'])) {
		$indexNumber = $_POST['indexnumber'];
		$studentName = $_POST['studentname'];
		$gender =$_POST['gender']; 
		$programme = $_POST['programme'];
		$date = $_POST['date'];
		$sql="Insert into student_clearance_info(index_number,name,gender,programme,date_created)value('$indexNumber','$studentName','$gender','$programme','$date')";
		$result=$connect->query($sql);
		if($result === true){
			echo "<script>alert('Request sent Successfully')</script>";
		}else{
			echo "<script>alert('$connect->error')</script>";
		}

		
	}
	  ?>
</div>


<form action="requestclearance.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
	<h3>Clearance Form</h3>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<p>fill up the form with correct values</p>	
	<hr class="mb-3">
	<label for="indexnumber"><b>Index Number</b></label>
	<input class="form-control" type="text" name="indexnumber" required>
 
	<label for="name"><b>Name</b></label>
	<input class="form-control" type="text" name="studentname"required>

	<label for="gender" ><b>Gender</b></label>
	<input type="radio" name="gender" required>Male
  <input  type="radio" name="gender" required>female<br>


 	<label for="programme" ><b>Programme</b></label><br>
 	<select id = "programme" >
 		<option value="Computer Science" >Computer Science</option>
 		<option value="Mathematics with Economics">Mathematics with Economics</option>
 		<option value="Actuarial Science">Actuarial Science</option>
 		<option value="Pure Mathematics">Pure Mathematics</option>
 		<option value="Applied Biology">Applied Science</option>
 		<option value="Applied Chemistry">Applied Chemistry</option>
  		<option value="Applied Physics">Applied Physics</option>

 	</select><br>


	<label for="date"><b>Date</b></label>
 	<input class="form-control" type="date" name="date" required>
 	<hr class="mb-3">
	<input class="btn btn-primary"  type="submit" name="create" value="upload">
	</div>
	</div>
</div>
</form>
<?php  ?>