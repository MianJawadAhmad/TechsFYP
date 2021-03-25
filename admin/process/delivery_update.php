<?php
require_once 'conn.php';
if(isset($_POST['uptd']) && $_POST['uptd'] =='deli')
{
    $d_name=$_POST['d_name'];
    $d_email=$_POST['d_email'];
    $d_pass=$_POST['d_pass'];
    $d_title=$_POST['d_title'];
    $d_desc=$_POST['d_desc'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    $id=$_POST['id'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=50000000)
        {
            $query="update delivery_information set 
delivery_name='$d_name',
delivery_email='$d_email',
delivery_password='$d_pass',
delivery_title='$d_title',
delivery_desc='$d_desc',
delivery_image='$photo' where delivery_id='$id'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../devlivery.php?msg=1');
                    exit();
                }
                else{
                    header('location:../devlivery.php?msg=0');
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