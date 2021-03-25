<?php
require_once 'conn.php';
if(isset($_POST['slidr']) && $_POST['slidr'] =='form')
{
    $s_name=$_POST['s_name'];
    $s_title=$_POST['s_title'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/gif" || $type=="image/jpeg")
    {
        if($size<=500000000)
        {
            $query="insert into slider set slider_name='$s_name', slider_title='$s_title', slider_image='$photo'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../slider.php?1');
                }
                else{
                    echo 'error in slider code';
                }
            }
        }
        else{
            echo 'eror in size';
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
    $team_dlt="delete from slider where slider_id='$dlt'";
    $team_excute=mysqli_query($conn, $team_dlt);
    if($team_excute)
    {
        header('location:../slider.php?msg=deleted');
        exit();
    }
    else{
        header('location:../slider.php?msg=error');
        exit();
    }
}
?>
<?php
if(isset($_POST['uptd']) && $_POST['uptd'] =='sldr')
{
    $s_name=$_POST['s_name'];
    $s_title=$_POST['s_title'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    $id=$_POST['id'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/gif" || $type=="image/jpeg")
    {
        if($size<=500000000)
        {
            $query="update slider set slider_name='$s_name', slider_title='$s_title', slider_image='$photo' where slider_id='$id'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../slider.php?1');
                }
                else{
                    echo 'error in slider code';
                }
            }
        }
        else{
            echo 'eror in size';
        }
        echo 'correct image type';
    }
    else{
        echo 'error in type';
    }
}




?>?>