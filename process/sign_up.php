<?php
include('../includes/conn.php');
if(isset($_POST['regs']) && $_POST['regs'] =='submit')
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$cnic = $_POST['cnic'];
	$id= $_POST['id'];

 	$query="INSERT INTO customer set customer_name='$name', customer_email='$email', customer_password='$password',customer_address='$address' , customer_phone='$password',
	customer_cnic='$cnic'";  
	$excute=mysqli_query($conn, $query);
	if($excute)
	{
		header('location:../single.php?id='.$id.'#myModal34');
		exit();
	}
	else{
		header('location:../sign_in.php?0');
		exit();
	}
}


?>

