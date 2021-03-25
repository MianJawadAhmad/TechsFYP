<?php
require_once 'conn.php';
if(isset($_POST['sale']) && $_POST['sale'] =='form')
{
    $a_sales=$_POST['a_sales'];
    $a_percent=$_POST['a_percent'];
    $query=mysqli_query($conn, "insert into Product set sales='$a_sales', percent='$a_percent'");
    if($query)
    {
        header('location../product.php?sale done');
        exit();
    }
    else{
        header('location../product.php?sale 0');
        exit();
    }
}




?>