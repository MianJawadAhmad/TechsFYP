<?php
require_once('conn.php');
if(isset($_GET['dlt']) && $_GET['dlt'] !='')
{
	$dlt=$_GET['dlt'];
	
	$query="delete from Product where product_id='$dlt'";
	$excute=mysqli_query($conn, $query);
	if($excute)
	{
		header('location:../product.php?1');
			exit();
	}
	else{
		header('location:../product.php?0');
			exit();
	}
}




if(isset($_GET['all']));
{
	$all=$_GET['all'];
	$all_query="delete from Product";
	$exc=mysqli_query($conn, $all_query);
	if($exc)
	{
		header('location:../product.php?1');
			exit();
	}
	else{
		header('location:../product.php?0');
			exit();
	}
}


?>


