<?php  
$username=$_GET['uname'];
$password=$_GET['pswd'];

include 'config.php';

$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result=$connect->query($sql);
if ($result-> num_rows>0){
	header("location: admin/");

}else{
	echo "username or password Incorrect";
	include'adminlogin.php';

}
$connect->close();
?>