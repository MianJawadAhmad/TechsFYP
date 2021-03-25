<?php
require_once 'conn.php';
if(isset($_POST['del']) && $_POST['del'] =='form')
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
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=50000000)
        {
            $query="insert into delivery_information set 
delivery_name='$d_name',
delivery_email='$d_email',
delivery_password='$d_pass',
delivery_title='$d_title',
delivery_desc='$d_desc',
delivery_image='$photo'";
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

<?php

if(isset($_GET['dlt']) && $_GET['dlt'] !='')
{
    $dlt=$_GET['dlt'];
    $query="delete from delivery_information where delivery_id='$dlt'";
    $excute=mysqli_query($conn, $query);
    if($excute)
    {
        header('location:../devlivery.php?msg=deleted');
        exit();
    }
    else{
        header('location:../devlivery.php?msg=error');
        exit();
    }
}




?>
