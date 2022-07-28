<?php  
$username=$_GET['uname'];
$password=$_GET['pswd'];

include 'config.php';

$sql="SELECT * FROM student WHERE username='$username' AND password='$password'";
$result=$connect->query($sql);
if ($result-> num_rows>0){
	header("location: student/");

}else{
	echo "username or password Incorrect";
	include'studentlogin.php';

}
$connect->close();
?>