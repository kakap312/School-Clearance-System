<?php include "head.php";
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
</*?php include'head.php';
  ?>
</*div class="container"style="margin-top: 30px;">
	</*div class="row">
		</*div class="col-sm-12">
			</*form action="upload _controller.php" method="post" enctype="multipart/form-data">
				</*input type="hidden" name="student_id" value="<?php //echo $_GET['student']; ?>">
				</*div class="form-group">
					</*input type="file" name="fileToUpload" id="fileToUpload">
				</*/div>
				</*div class="form-group">
					</*input type="submit" name="UPLOAD" class="btn btn-info"value="UPLOAD">
					</*div>
			</*/form>
		</*/div>
	<///div>
<//div>
</*?php include 'foot.php' ?>