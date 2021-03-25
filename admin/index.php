<?php
include('process/conn.php');
session_start();
if(isset($_POST['admin']))
{
	$a_name=$_POST['a_name'];
	$a_pass=$_POST['a_pass'];
	$log = mysqli_query($conn, "select * from admin where admin_username='$a_name' and admin_password='$a_pass'");
	$count = mysqli_num_rows($log);
	if($count>0)
	{

		$record_fetch=mysqli_fetch_array($log);
		$_SESSION['admin_id']=$record_fetch['admin_id'];
		 $_SESSION['admin_name']=$record_fetch['admin_name'];
       $_SESSION['admin_username']=$record_fetch['admin_username'];
       

     
       header('location:home.php?welcome');
		exit('');
	}
	else{
		header('location:index.php?0');
		exit();
	}
}	

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>َAnimated Login Form</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<form class="box" action="" method="post">
		<h1>Login</h1>
		<input type="text" name="a_name" placeholder="Username">
		<input type="password" name="a_pass" placeholder="Password">
		<input type="submit" name="admin" value="Login">

	</form>


</body>
</html>