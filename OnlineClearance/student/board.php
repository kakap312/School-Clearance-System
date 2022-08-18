
<?php include "head.php";
 ?>
<div class="container " style="margin-top: 30px;">
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-hover">
				<tr>
					<th>Student ID</th>
					<th>Depertment</th>
			        <th>Status</th>
			        <th>Date Cleared</th>
			        
				</tr>
			<?php
			$sql="SELECT * FROM clearance";
				$result=$connect->query($sql);
				if ($result->num_rows > 0) {
					while ($row=$result->fetch_assoc()) {
						echo "<tr><td>".$row["student_id"]."</td>";
						echo  "<td>".$row["department"]."</td>";
						echo  "<td>".$row["status"]."</td>";
						echo  "<td>".$row["datecleared"]."</td></tr>";
					}
}

			  ?>
			  

			</table>
		</div>