<?php
require_once 'conn.php';
if(isset($_GET['idd']))
{
    $idd=$_GET['idd'];
    $id=$_GET['id'];
    $status=$_GET['status'];
    $status_query="update cart set cart_status='$status' where cart_id='$idd'";
    $excute_update=mysqli_query($conn, $status_query);
    if($excute_update)
    {
        header('location:../view_order.php?id='.$id);exit;
    }
    else{
        header('location:../view_order.php?msg=error&id='.$id);exit;

   }
}


if(isset($_GET['b_id']))
{
	  $b_id=$_GET['b_id'];
    $id=$_GET['id'];
    $status=$_GET['status'];
    $status_query="update bills set bill_status='$status' where bill_id='$b_id'";
	
    $excute_update=mysqli_query($conn, $status_query);
	$update=mysqli_query($conn, "update cart set cart_status=2 where bill_id='$b_id'");
    if($excute_update)
    {
        header('location:../order.php?id='.$id);exit;
    }
    else{
        header('location:../order.php?msg=error&id='.$id);exit;

   }
}

?>

