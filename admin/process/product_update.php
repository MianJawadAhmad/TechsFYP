<?php
require_once 'conn.php';
if(isset($_POST['pro']) && $_POST['pro'] == 'upd')
{
$sub_cat = $_POST['sub_cat'];
$p_name = $_POST['p_name'];
$p_price= $_POST['p_price'];
$p_quality=$_POST['p_quality'];
$p_title=$_POST['p_title'];
$p_desc=$_POST['p_desc'];
$photo=$_FILES['photo']['name'];
$type=$_FILES['photo']['type'];
$size=$_FILES['photo']['size'];
$temp=$_FILES['photo']['tmp_name'];
$id=$_POST['id'];
if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
{
    if($size<=5000000)
    {
        $query="update Product set product_name='$p_name', 
        product_price='$p_price',
        product_quality='$p_quality',
        product_title='$p_title',
        product_desc='$p_desc', 
        image='$photo',
        sub_id='$sub_cat' where product_id='$id'";

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
        echo 'error in size';
    }

    echo 'correct img type';
}
else{
    echo 'error in type';
}

}





?>