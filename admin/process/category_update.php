

<?php
require_once( 'conn.php' );
if (isset($_POST['Update']) && $_POST['Update'] == 'Category') {
  
    $cate_name = $_POST ['cate_name'];
            $id = $_POST['id'];
    $photo = date('Ymdhis') . $_FILES['photo']['name'];
    $type  = $_FILES['photo']['type'];
    $size  = $_FILES['photo']['size'];
    $temp  = $_FILES['photo']['tmp_name'];
    if ($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/gif") {
        if ($size <= 5000000) {
            $query="update category set cat_name='$cate_name', image='$photo' where cat_id='$id'";
            $excute = mysqli_query($conn, $query);
            if ($excute) {
                $upload = move_uploaded_file($temp, "../uploads/".$photo);
                if ($upload) {
                    header('location:../category.php?msg=Gallery Inserted Successfully');
                    exit();
                } else {

                    header('location:../category.php?msg=Error');
                    exit();
                }
            }
        }


        echo 'type correct';
    }

    else {
        echo 'error in type';
    }
}
?>