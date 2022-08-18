<?php include "head.php";
	  
if (isset($_GET['Accept'])) 
{
$Accept=$_GET["Accept"];
$studentid = $_GET['studentID'];
$department = $_GET['department'];
$status = $_GET['status'];
$message = $_GET['message'];
$sql="INSERT INTO clearacne(studentid,department,status) values("",'$studentid','$department',$message)  where id= '$Accept'";

if ($connect ->query($sql)===TRUE) {
	echo "Accepted Successfully";}
}

		
if (isset($_GET["Reject"])) {
	$Reject=$_GET["Reject"];
	$sql="UPDATE department SET status='Rejected'where id='$Reject'";

	if ($connect->query($sql)===TRUE) {
		echo "Rejected Successfully";
	}
}
 ?>



<div class="container " style="margin-top: 30px;">
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-hover">
				<tr>
					<th><label for student_id><br>Student ID</label></th>
					
					<th><label for department><br>Department</label>
					<select name="department" >
						<option id="0"  >Campus Accountant</option>
				 		<option id="1">Campus Librarian</optio>
				 		<option id="2" >Computer Laboratory</option>
				 		<option id="3" >Laboratory</option>
				 		<option id="4" >Senior Hall Tutor</option>
				 		<option id="5" >Campus Sports Coach</option>
				  		<option id="6" >Dean in Charge</option>
						</select></th>
					<th><label for options><br>Options
                      	<?php
                  
					
					echo "<a href='request.php?Accept='.[id].' class='btn btn-success'>Accept</a>";
					echo "<a href='request.php?Reject='.[id].' class='btn btn-danger'>Reject</a>";
					
			  ?>
					</label></th>
					<th><label for message><br>Message</label>
					<input class="form control" type="text" name="message" required></th>

					
				</tr>
		
			  

			</table>
		</div>
	</div>
</div>









<?php include "foot.php"  ?>