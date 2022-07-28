<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcnd.bootstrapcnd.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		.fakeimg{
			height: 200px;
			background: #aaa;
		}
	</style>
	<?php 
	include "../config.php";
	 ?>

</head>
<body>
<div class="jumbotron text-center" style="margin-bottom: 0;">
	<h1>Admin Panel</h1>
	<p>Welcome to</p>
	
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="#">Home</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>

	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
			<a class="nav-link"  href="student.php">Student</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="request.php">Request</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../adminlogin.php">Logout</a>
			</li>
		</ul>
	</div>

</nav>
</body>
</html>