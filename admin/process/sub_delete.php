<?php
        require_once 'conn.php';
        if(isset($_GET['dlt']) && $_GET['dlt']!='')
        {
            $dlt=$_GET['dlt'];
            $dlt_query="delete from sub_category where sub_id='$dlt'";
            $excute=mysqli_query($conn, $dlt_query);
            if($excute)
            {
                header('location:../sub.php?1');
                exit();
            }
            else{
                header('location:../sub.php?0');
                exit();
            }
        }

?>

<?php
            if(isset($_GET['all']))
            {
                $all=$_GET['all'];
                $all_query="delete from sub_category";
                $run=mysqli_query($conn, $all_query);
                if($run)
                {
                    header('location:../sub.php?1');
                    exit();
                }
                else{
                    header('location:../sub.php?0');
                    exit();
                }
            }




?>
