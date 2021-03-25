<?php
require_once 'conn.php';
if(isset($_POST['sale']) && $_POST['sale'] == 'form')
{
    $product = $_POST['product'];
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
        product_id='$product' where offer_id='$id'";

            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../offer.php?1');
                    exit();
                }
                else{
                    header('location:../offer.php?0');
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
        header('location:../offer.php?msg=Successfully dlt');
        exit();
    }
    else{
        header('location:../offer.php?error dlt');
        exit();
    }
}


?>

