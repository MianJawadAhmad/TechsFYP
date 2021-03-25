<?php
require_once 'conn.php';
if(isset($_POST['catsale']) && $_POST['catsale'] == 'form')
{
    $category = $_POST['category'];
    $a_sales = $_POST['a_sales'];
    $a_percent= $_POST['a_percent'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    $id=$_POST['id'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=5000000)
        {
            $query="update offer set sales='$a_sales', 
        percent='$a_percent', 
        offer_image='$photo',
        cat_id='$category' where offer_id='$id'";

            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../category_sale.php?1');
                    exit();
                }
                else{
                    header('location:../category_sale.php?0');
                    exit();
                }
            }
        }
        else{
            echo 'error in size';
        }

        echo 'correct img type';
    }
    else{
        echo 'error in type';
    }

}


?>