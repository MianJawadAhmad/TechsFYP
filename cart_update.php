<?php
require_once 'conn.php';
if(isset($_POST['crt']) && $_POST['crt'] =='uptd')
{

    $cart_quantity=$_POST['cart_quantity'];
    $size=$_POST['size'];
    $addrs=$_POST['addrs'];
    $id=$_POST['id'];

    $query="update cart set cart_quantity='$cart_quantity', delivery_address='$addrs', cart_size='$size' where cart_id='$id'";
    $excute=mysqli_query($conn, $query);
    if($excute)
    {
        header('location:cart.php?updated');
        exit();
    }
}




?>