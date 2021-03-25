<?php
require_once 'conn.php';
if(isset($_GET['dlt']) && $_GET['dlt'] !='')
{
    $dlt=$_GET['dlt'];
    $query="delete from cart where cart_id='$dlt'";
    $excute=mysqli_query($conn, $query);
    if($excute)
    {
        header('location:cart.php?cart_deleted_SUCCESSFULLY');
        exit();
    }
    else{
        header('location:cart.php?0');
        exit();
    }
}






?>