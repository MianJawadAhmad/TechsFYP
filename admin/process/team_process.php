<?php
require_once 'conn.php';
if(isset($_POST['Team']) && $_POST['Team'] =='form')
{
    $t_name=$_POST['t_name'];
    $t_title=$_POST['t_title'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=50000000)
        {
            $query="insert into team set team_title='$t_title', team_name='$t_name', team_image='$photo'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../team.php?msg=1');
                    exit();
                }
                else{
                    header('location:../team.php?msg=0');
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
    $team_dlt="delete from team where team_id='$dlt'";
    $team_excute=mysqli_query($conn, $team_dlt);
    if($team_excute)
    {
        header('location:../team.php?msg=deleted');
        exit();
    }
    else{
        header('location:../team.php?msg=error');
        exit();
    }
}
?>

<?php
require_once 'conn.php';
if(isset($_POST['tem']) && $_POST['tem'] =='uptd')
{
    $t_name=$_POST['t_name'];
    $t_title=$_POST['t_title'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    $id=$_POST['id'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=50000000)
        {
            $query="update team set team_title='$t_title', team_name='$t_name', team_image='$photo' where team_id='$id'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../team.php?msg=1');
                    exit();
                }
                else{
                    header('location:../team.php?msg=0');
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