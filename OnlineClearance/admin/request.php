<?php include "head.php";
	  
if (isset($_POST['status'])) 
{
$student_id = $_POST['studentid'];
$department = $_POST['department'];
$status = $_POST['status'];
$message = $_POST['message'];
}
$sql="INSERT INTO clearance(student_id,department,status,message) values('$student_id','$department','$status','$message')";
if ($connect ->query($sql)===TRUE) {
	echo '<script>alert("successfully Created")</script>';
}



?>
<div class='container' style="margin-top: 30px;">
	<div class="row">
		<div class="col-sm-12">
			
			<table class="table table-hover">
				<tr>
					<th><label for student_id><br>Student ID</label></th>
					<th><label for department><br>Department</label></th>
					<th><label for options><br>Options</label></th>
					<th><label for message><br>Message</label>
				</tr>
				<?php
				$sql="SELECT * FROM student";
				$studentList = $connect ->query($sql);
				if ($studentList->num_rows > 0) {
					while ( $record = $studentList->fetch_assoc()) {

						echo "<tr><td><form action='request.php' method='POST'><p>".$record['Index Number']."</p><input type='hidden' name='studentid' placeholder='".$record['Index Number']."' value='".$record['Index Number']."'></td>
							<td>
							<select name='department' >
							<option id='0'  >Campus Accountant</option>
					 		<option id='1'>Campus Librarian</optio>
					 		<option id='2' >Computer Laboratory</option>
					 		<option id='3' >Laboratory</option>
					 		<option id='4' >Senior Hall Tutor</option>
					 		<option id='5' >Campus Sports Coach</option>
					  		<option id='6' >Dean in Charge</option>
							</select>
							<td>
							<button type='submit' name='status' value='accept' class='btn btn-success'>Accept</button>
							<button type='submit' name='status' value='reject' class='btn btn-success'>Reject</button>
							<td><input class='form control' type='text' name='message' required>"."</td></form>
							</tr>";
					}
				}


				?>
			</table>
		</div>
	</div>
</div>

<?php include "foot.php"  ?>