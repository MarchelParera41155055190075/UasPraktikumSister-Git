<?php
session_start();
if(!isset($_SESSION['login'])) {
	echo "<script>alert('Please login first !');window.location.replace('form_login_190075.php');</script>";	
}
?>
<!doctype html>
<html>
<head>
	<title>Pet Clinic Marchel</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Pet Clinic Marchel</h1><hr>
	<h3>Welcome to the clinic</h3>
	<ul>
		<a href="read_pet_190075.php">Pets List</a>
		<a href="read_doctor_190075.php">Doctors List</a>
		<?php if($_SESSION['usertype']=='Manager') { ?>
		<a href="read_user_190075.php">Users List</a><?php } ?>
		<?php if($_SESSION['usertype']=='Manager') { ?>
		<a href="report.php">Monthly Report</a><?php } ?>
		<hr>
		<p>Welcome <?=$_SESSION['fullname'];?>, you are login as <?=$_SESSION['usertype'];?></p>
		<td align="center">
				<img src="uploads/users/<?=$data['user_photo_190075']; ?>" width="50" height="50"><br>
		</td>
		<a href="user_photo_190075.php">Change photo</a>
		<a href="change_password_190075.php">Change Password</a>
		<a href="logout_190075.php">Logout</a>
	</ul>
<style>
body {
  background-color: #E9967A;
}

h1 {
  color: white;
  text-align: center;
  font-size: 50px;
}

h3 {
  color: white;
  text-align: center;
  font-size: 30px;
}

p {
  font-family: timesnewroman;
  font-size: 30px;
}

ul {
	border: 10px solid black;
	padding-top: 50px;
	padding-right: 70px;
	padding-bottom: 50px;
	padding-left: 80px;
	background-color: #FFE4B5;
	text-align: center;
	color: brown;
	font-size: 20px;
}
</style>
</body>
</html>