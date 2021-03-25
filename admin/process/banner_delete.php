<?php
require_once 'conn.php';
if(isset($_GET['dlt']) && $_GET['dlt'] !='')
{
    $dlt=$_GET['dlt'];
    $query="delete from banner where banner_id='$dlt'";
    $excute=mysqli_query($conn, $query);
    if($excute)
    {
        header('location:../banner.php?msg=deleted');
        exit();
    }
    else{
        header('location:../banner.php?msg=error');
        exit();
    }
}




?>