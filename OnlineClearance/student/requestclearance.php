<?php include "head.php"?>
<div>
	<?php
	if (isset($_POST['create'])) {
		echo "Details Submitted";
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
	<input class="form-control" type="text" name="student name"required>

	<label for="gender"><b>Gender</b></label>
	<input type="radio" name="gender">Male
  <input  type="radio" name="gender">female<br>

 	<label for="programme"><b>Programme</b></label>
 	<input class="form-control" type="text" name="programme"required><br>


	<label for="date"><b>Date</b></label>
 	<input class="form-control" type="date" name="date" required>
 	<hr class="mb-3">
	<input class="btn btn-primary"  type="submit" name="create" value="upload">
	</div>
	</div>
</div>
</form>
<?php  ?>