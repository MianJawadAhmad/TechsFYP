<?php 
include('../includes/conn.php');
if(isset($_POST['add']) && $_POST['add'] == 'product')
	
{
	$p_name=$_POST['p_name'];
	$p_price=$_POST['p_price'];
	$p_quality=$_POST['p_quality'];
	$p_title=$_POST['p_title'];
	$p_desc=$_POST['p_desc'];
	$sub_name=$_POST['sub_name'];
	$cat_name=$_POST['cat_name'];
	$photo=$_FILES['photo']['name'];
	$type=$_FILES['photo']['type'];
	$size=$_FILES['photo']['size'];
	$temp=$_FILES['photo']['tmp_name'];
	
	if($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png'  )
	{
		if($size < 38005 )
		{
			
			if(move_uploaded_file($temp ,"../uploads/".$photo))
			{
	$query="INSERT INTO  Product set product_name='$p_name', product_price='$p_price', product_quality='$p_quality', product_title='$p_title', product_desc='$p_desc', image='$photo', sub_id='$sub_name',cat_name='$cat_name'";
	$excute=mysqli_query($conn, $query);
				
	if($excute)
	{
		
		header('location:../product.php?1');
				exit();
	}
	else
	{
		header('location:../product.php?0');
				exit();
	}
			}
			else
			{
			header('location:../add_product.php?uploaderror');
		exit;
				
			}
            
			
		}
		else
		{
			header('location:../add_product.php?Sizeerror');
		exit;
		}
	}
	else
	{
		header('location:../add_product.php?typeerror');
		exit;
	}	
	
}
else
{
echo 'sorry Your Hidden is Not Set';	
}

?>





