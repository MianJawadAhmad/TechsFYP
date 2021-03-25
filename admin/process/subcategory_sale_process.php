<?php
require_once 'conn.php';
if(isset($_POST['sub_sale']) && $_POST['sub_sale'] == 'form')
{
    $subcategory = $_POST['subcategory'];
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
        sub_id='$subcategory'";

            $excute=mysqli_query($conn, $query);
            if($excute)
            {
                $upload=move_uploaded_file($temp, "../uploads/".$photo);
                if($upload)
                {
                    header('location:../subCategory_sales.php?1');
                    exit();
                }
                else{
                    header('location:../subCategory_sales.php?0');
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
        header('location:../subCategory_sales.php?msg=Successfully dlt');
        exit();
    }
    else{
        header('location:../subCategory_sales.php?error dlt');
        exit();
    }
}


?>

