<?php
include('conn.php');
if(isset($_POST['pro']) && $_POST['pro'] =='form')
{
	$p_name=$_POST['p_name'];
	$p_price=$_POST['p_price'];
	$p_quality=$_POST['p_quality'];
	$p_title=mysqli_real_escape_string($_POST['p_title']);
	$p_desc=mysqli_real_escape_string($_POST['p_desc']);
	$c_status= $_POST['cloth_status']; 
	$sub_name=$_POST['sub_name'];
	
	$photo=$_FILES['photo']['name'];
	$type=$_FILES['photo']['type'];
	$size=$_FILES['photo']['size'];
	$temp=$_FILES['photo']['tmp_name'];
	
if($type=="image/jpg"  || $type=="image/jpeg"  || $type=="image/png" || $type=="image/gif")
{
	if($size<=50000000)
	{
	 	$query="INSERT INTO  Product set product_name='$p_name', product_price='$p_price', product_quality='$p_quality', product_title='$p_title', product_desc='$p_desc',cloth_status='$c_status', image='$photo', sub_id='$sub_name'";  
		$excute=mysqli_query($conn, $query);
		if($excute)
		{
			$upload=move_uploaded_file($temp, "../uploads/".$photo);
			if($upload)
			{
				header('location:../product.php?1');
				exit();
			}
			else{
				header('location:../product.php?0');
				exit();
			}
		}
	}
	
	else{
		header('location:../product.php?error in size');
				exit();
	}
}

	else{
		header('location:../product.php?error in type');
				exit();
	}



}



?>