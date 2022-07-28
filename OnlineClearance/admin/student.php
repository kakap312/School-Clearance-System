<?php include "head.php"  ?>
<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-sm-12">

			<table class="table table-hover">

				<tr>
					
					<th>Full Name</th>
					<th>Index Number</th>
					<th>User Name</th>
					<th>Password</th>
				</tr>
				<?php
				$sql="SELECT * FROM student";
				$result=$connect->query($sql);
				if ($result->num_rows > 0) {
					while ($row=$result->fetch_assoc()) {
						echo "<tr><td>".$row["fullname"]."</td>";
						echo  "<td>".$row["Index Number"]."</td>";
						echo  "<td>".$row["username"]."</td>";
						echo  "<td>".$row["password"]."</td></tr>";

					}
				}
				  ?>
				
			</table>
			
		</div>
		
	</div>
	

</div>
<?php include 'foot.php' ?>