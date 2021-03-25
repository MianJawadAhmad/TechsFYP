<?php
require_once( 'conn.php' );
if (isset($_POST['gallery']) && $_POST['gallery'] == 'form') {
    $cat = $_POST['cat'];
    $title = $_POST['title'];
    /*$photo = date('Ymdhis') . $_FILES['photo']['name'];
    $type  = $_FILES['photo']['type'];
    $size  = $_FILES['photo']['size'];
    $temp  = $_FILES['photo']['tmp_name'];
    if ($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/gif") {
        if ($size <= 5000000) {*/
            $query = "insert into  sub_category set 
            sub_title='$title', cat_id='$cat'";
            $excute = mysqli_query($conn, $query);
            if ($excute) {
                /*$upload = move_uploaded_file($temp, "../uploads/".$photo);*/
                /*if ($upload) {*/
                    header('location:../sub.php?msg=Gallery Inserted Successfully');
                    exit();
                } else {

                    header('location:../sub.php?msg=Error');
                    exit();
                }
    /*        }
        }


        echo 'type correct';
    }

    else {
        echo 'error in type';
    }*/
}
?>