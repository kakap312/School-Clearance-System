<?php include "head.php";
if (isset($_GET['indexnumber'])) {
	// code...
}
if (isset($_GET['Accept'])) {
$Accept=$_GET["Accept"];
$sql="UPDATE department SET status='Accepted' where id= '$Accept'";

if ($connect ->query($sql)===TRUE) {
	echo "Accepted Successfully";
}

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
					<th>Department<th>
					
					<th>Options</th>
					
				</tr>
			<?php
			$sql="SELECT * FROM request,department where request.id=department.id";
			$result=$connect->query($sql);

			if ($result->num_rows>0) {
				while ($row=$result->fetch_assoc()) {
					echo "<tr><td>".$row["Name"]."</td>";	
					
					echo "<td><a href='request.php?Accept=".$row["id"]."' class='btn btn-success'>Accept</a></td>";
					echo "<td><a href='request.php?Reject=".$row["id"]."' class='btn btn-danger'>Reject</a></td>";
					echo "<td><a href='upload.php?department=".$row["department_id"]."' class='btn btn-info'>upload</a></td>";
				
		
				}
			}
			  ?>
			  

			</table>
		</div>
	</div>
</div>
<?php include "foot.php"  ?>