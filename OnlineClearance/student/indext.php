<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{font-family: Arial, Helvetica, sans-serif;}
form{border: 3px solid #f1f1f1;}

input[type=text],input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;

}
button{
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100px;
}

button:hover{
	opacity: 0.8;
}
.cancelbtn{
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}
.imgcontainer{
	text-align: center;
	margin: 24px 0 12px 0;
}
img.avatar{
	width: 20%;
	border-radius: 50%;

}
.container{
	padding: 16px;
}
span.psw{
	float: right;
	padding-top: 16px;

}
@media screen and(max-width: 300px){
	span.psw{
		display: block;
		float: none;
	}
	.cancelbtn{
		width: 100%;
	}
}
</style>
</head>
<body>
<h2>Admin Login Form</h2>
<form action="adminloginController.php">
<div class="imgcontainer">
	<img src="admin\img\image.png" alt="avatar" height="200px">
</div>
<div class="container">
	<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="uname" required>

		<label for="psw"><b>Password</b></label>
		<input type="Password" placeholder="Enter Password" name="pswd" required>
		<button type="submit">Login</button>
</div>
 </form>
</body>
</html>