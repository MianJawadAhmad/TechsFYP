<?php
require_once 'conn.php';
if(isset($_POST['cate_sale']) && $_POST['cate_sale'] == 'form')
{
    $category = $_POST['category'];
    $a_sales = $_POST['a_sales'];
    $a_percent= $_POST['a_percent'];
    $photo=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $size=$_FILES['photo']['size'];
    $temp=$_FILES['photo']['tmp_name'];
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg" || $type=="image/gif")
    {
        if($size<=5000000)
        {
            $query="insert into offer set sales='$a_sales', 
        percent='$a_percent', 
        offer_image='$photo',
        cat_id='$category'";

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

<?php
if(isset($_GET['dlt']) && $_GET['dlt'] !='')
{
    $dlt=$_GET['dlt'];
    $dlt_query=mysqli_query($conn, "delete from offer where offer_id='$dlt'");
    if($dlt_query)
    {
        header('location:../category_sale.php?msg=Successfully dlt');
        exit();
    }
    else{
        header('location:../category_sale.php?error dlt');
        exit();
    }
}


?>

