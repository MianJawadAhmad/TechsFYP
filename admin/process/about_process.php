<?php
require_once 'conn.php';
if(isset($_POST['abtd']) && $_POST['abtd'] =='form')
{
    $a_title=$_POST['a_title'];
    $a_desc=$_POST['a_desc'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=50000000)
        {
            echo  $query="insert into about set about_title='$a_title', about_desc='$a_desc', about_image='$photo'"; exit;
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../about.php?msg=1');
                    exit();
                }
                else{
                    header('location:../about.php?msg=0');
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
    $about_dlt="delete from about where about_id='$dlt'";
    $about_excute=mysqli_query($conn, $about_dlt);
    if($about_excute)
    {
        header('location:../about.php?msg=deleted');
        exit();
    }
    else{
        header('location:../about.php?msg=error');
        exit();
    }
}
?>

<?php
if(isset($_POST['uptd']) && $_POST['uptd'] =='form')
{
    $a_title=$_POST['a_title'];
    $a_desc=$_POST['a_desc'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    $id=$_POST['id'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=50000000)
        {
            $query="update about set about_title='$a_title', about_desc='$a_desc', about_image='$photo' where about_id='$id'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../about.php?msg=1');
                    exit();
                }
                else{
                    header('location:../about.php?msg=0');
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