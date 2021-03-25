<?php
require_once 'conn.php';
if(isset($_POST['subupdate']) && $_POST['subupdate'] =='form')
{
    $cat=$_POST['cat'];
    $title=$_POST['title'];
    $id=$_POST['id'];
   /* $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];*/
   /* if($type=="image/png" || $type=="image/jpeg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=5000000)
        {*/
            $query="update sub_category set sub_title='$title',cat_id='$cat' where sub_id='$id'";
            $excute=mysqli_query($conn, $query);
            if($excute)
            {
               /* $upload = move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {*/
                    header('location:../sub.php?msg=1');
                    exit();
                }
                else{
                    header('location:../sub.php?msg=00');
                    exit();
                }
   /*         }
        }
        else{
            echo 'error in size';
        }


        echo 'error type';
    }
    else{
        echo ' error in type';
    }*/
}


?>