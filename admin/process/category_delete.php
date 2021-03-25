<?php
        require_once 'conn.php';
        if(isset($_GET['dlt']) && $_GET['dlt'] !='dlt')
        {
            $dlt   = $_GET['dlt'];
            $query = "delete from category where cat_id='$dlt'";
            $excute=mysqli_query($conn, $query);
                if($excute)
                {
                    header('location:../category.php?msg=1');
                    exit();
                }
                else{
                    header('location:../category.php?msg=0');
                    exit();
                }
        }
?>
<?php
        if(isset($_GET['all']))
        {
            $all=$_GET['all'];
            $all_query="delete from category";
            $all_excute=mysqli_query($conn, $all_query);
            if($all_excute)
            {
                header('location:../category.php?msg=1');
                exit();
            }
            else{
                header('location:../category.php?msg=0');
                header('location:../category.php?msg=0');
                exit();
            }
        }



 ?>


