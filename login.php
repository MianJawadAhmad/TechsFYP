<?php
require_once 'includes/conn.php';
require_once 'includes/security.php';

if(isset($_POST['log']) && $_POST['log'] == 'in')
{    $id=$_POST['id'];
	$email=$_POST['email'];
      $pass=$_POST['pass']; 
   $query=mysqli_query($conn, "SELECT * FROM customer where customer_email='$email' and customer_password='$pass'"); 
    $num=mysqli_num_rows($query);
    if($num==1)
    {
        $record=mysqli_fetch_array($query);
		
				
        
        $_SESSION['customer_id'] = $record['customer_id'];

        $_SESSION['customer_email']=$record['customer_email'];
		 $_SESSION['customer_name']=$record['customer_name'];
        $_SESSION['customer_address']=$record['customer_address'];
        $_SESSION['customer_phone']=$record['customer_phone'];
		$_SESSION['customer_cnic']=$record['customer_cnic'];
		$_SESSION['measurement']=$record['m_status'];
		
		
		$p_query="select * from product where product_id= '$id' ";
		$run=mysqli_query($conn, $p_query); 
		$fetch=mysqli_fetch_array($run);
		 $cloth=$fetch['cloth_status'];
	
		$_SESSION['logged'] = TRUE;
		if($cloth == 1)
		{
			 header('location:single.php?id='. $_SESSION['pro_id'].'');
		}
		else
		{
			if($_SESSION['measurement'] == 1)
		{
	
	 header('location:single.php?id='. $_SESSION['pro_id'].'');
        exit();
		}
		else
		{
			 header('location:measurement.php?Welcome');
        exit();
		}
			
		}
		
       
    }
    else{
        header('location:index.php?0');
        exit();
    }


}




?>


