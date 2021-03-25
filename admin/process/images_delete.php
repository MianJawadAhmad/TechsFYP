<?php
            require_once 'conn.php';
            if(isset($_GET['dlt']) && $_GET['dlt'] !='')
            {
                $dlt=$_GET['dlt'];
                $delete_query=mysqli_query($conn, "delete from product_images where images_id='$dlt'");
                if($delete_query)
                {
                    header('location:../products_images.php?1');
                    exit();
                }
                else{
                    header('location:../products_images.php?0');
                    exit();
                }
            }


if(isset($_GET['all']));
{
    $all=$_GET['all'];
    $all_query="delete from product_images";
    $excute=mysqli_query($conn, $all_query);
    if($excute)
    {
        header('location:../products_images.php?1');
        exit();
    }
    else{
        header('location:../products_images.php?0');
        exit();
    }
}


  ?>