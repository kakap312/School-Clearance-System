
<?php include "head.php";
 ?>
<div class="container " style="margin-top: 30px;">
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-hover">
				<tr>
					<th>Department</th>
					<th>Status</th>
			        <th>Comment</th>
			        
				</tr>
			<?php
			$sql="SELECT * FROM request,department where request.id=department.id";
			$result=$connect->query($sql);

			if ($result->num_rows>0) {
				while ($row=$result->fetch_assoc()) {
					echo "<tr><td>".$row["Name"]."</td>";	
					echo "<td>".$row["status"]."</td>";	
					
					echo "<td><a href='request.php?Accept=".$row["id"]."' class='btn btn-success'>View Details</a></td>";
					
		
				}
			}
			  ?>
			  

			</table>
		</div>