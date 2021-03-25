<?php
require_once 'conn.php';
if(isset($_POST['baner']) && $_POST['baner'] =='form')
{
    $b_title=$_POST['b_title'];
    $b_name=$_POST['b_name'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=50000000)
        {
            $query="insert into banner set banner_title='$b_title', banner_name='$b_name', banner_image='$photo'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../banner.php?msg=1');
                    exit();
                }
                else{
                    header('location:../banner.php?msg=0');
                    exit();
                }
            }
        }
        else{
            echo 'error in type';
        }


        echo 'correct image type';

    }
    else{
        echo 'error in type';
    }
}




?>