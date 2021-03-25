
<?php

include('../conn.php');

if(isset($_POST['regs']) && $_POST['regs'] =='submit')
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="INSERT INTO Customer set customer_name='$name', customer_email='$email', customer_password='$password'";
	$excute=mysqli_query($conn, $query);
	if($excute)
	{
		header('location:../index.php?1');
		exit();
	}
	else{
		header('location:../index.php?0');
		exit();
	}
}


?>

