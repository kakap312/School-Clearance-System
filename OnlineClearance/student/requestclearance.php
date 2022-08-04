<?php include "head.php"?>

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
	<input class="form-control" type="text" name="student name"required>

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