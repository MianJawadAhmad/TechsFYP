<?php
require_once 'conn.php';
if(isset($_POST['bannr']) && $_POST['bannr'] =='uptd')
{
    $b_title=$_POST['b_title'];
    $b_name=$_POST['b_name'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    $id=$_POST['id'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=50000000)
        {
            $query="update banner set banner_title='$b_title', banner_name='$b_name', banner_image='$photo' where banner_id='$id'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../banner.php?msg=updated');
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