<?php
require_once 'conn.php';
if(isset($_POST['cntct']) && $_POST['cntct'] =='form')
{
    $c_addrs=$_POST['c_addrs'];
    $c_email=$_POST['c_email'];
    $c_num=$_POST['c_num'];
    $c_map=$_POST['c_map'];
    $query=mysqli_query($conn, "insert into contact set addres='$c_addrs', email='$c_email', 
    cell_num='$c_num', map='$c_map'");
    if($query)
    {
        header('location:../contact.php?1');
        exit();
    }
    else{
        header('location:../contact.php?0');
        exit();
    }
}


?>


<?php
if(isset($_GET['dlt']) && $_GET['dlt'] !='')
{
    $dlt=$_GET['dlt'];
    $dlt_Query=mysqli_query($conn, "delete from contact where id='$dlt'");
    if($dlt_Query)
    {
        header('location:../contact.php?deleted');
        exit();
    }
    else{
        header('location:../contact.php?0');
        exit();
    }
}

?>

<?php
if(isset($_POST['cnt']) && $_POST['cnt'] =='uptd')
{
    $c_addrs=$_POST['c_addrs'];
    $c_email=$_POST['c_email'];
    $c_num=$_POST['c_num'];
    $c_map=$_POST['c_map'];
    $c_id=$_POST['c_id'];
    $query=mysqli_query($conn, "update  contact set addres='$c_addrs', email='$c_email', 
    cell_num='$c_num', map='$c_map' where id='$c_id'");
    if($query)
    {
        header('location:../contact.php?1');
        exit();
    }
    else{
        header('location:../contact.php?0');
        exit();
    }
}


?>






















