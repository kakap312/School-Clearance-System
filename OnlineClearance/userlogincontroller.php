<?php session_start();
$username=$_GET["uname"];
$password=$_GET["pswd"];

include 'config.php'

$sql="SELECT * FROM student WHERE username='$username' AND password='$password'";
$result=$connect->query($sql);

if ($result->num_rows > 0)  {
	while ($row=$result->fetch_assoc()) {
		$student_id=$row["student_id"];

	}
	header("location: student/");
	$_SESSION['student_id']=$student_id;

}else{
	echo "username or password Incorrect";
	include'indext.php';


}
  $connect->close();
?>
