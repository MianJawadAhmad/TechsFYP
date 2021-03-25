<?php require_once 'process/conn.php';
$query="select * from offer INNER JOIN sub_category on offer.sub_id=sub_category.sub_id";
$excute=mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopping Store</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php require_once 'inc/sidebar.php';?>

        <!-- top navigation -->
        <?php require_once 'inc/header.php';?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Users <small>Some examples to get you started</small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <a href="sales.php"> <button class="btn btn-danger" btn-sm><i class="fa fa-angle-left"> Back</i></button> </a>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="@mdo">Add SubCategory Sales</button>




                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Sales</th>
                                        <th>Percent</th>
                                        <th>Image</th>
                                        <th>Salary</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                        <?php $i=1; while($record=mysqli_fetch_assoc($excute)){ ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $record['sub_title']; ?></td>
                                        <td><?php echo $record['sales']; ?></td>
                                        <td><?php echo $record['percent']; ?></td>
                                         <td><img src="uploads/<?php echo $record['offer_image']; ?>" width="70" height="50"> </td>
                                        <td style="float: right">


                                        <?php if($record['status'] == 0){ ?>
                                        <button class="btn btn-sm btn-danger" onclick="window.location='subCategory_sales.php?id=<?php echo $record['offer_id'] ?>&status=1'">
                                        Block
                                        </button>
                                            <?php } else{ ?>
                                            <button class="btn btn-sm btn-success" onclick="window.location='subCategory_sales.php?id=<?php echo $record['offer_id'] ?>&status=0'">
                                                Active
                                            </button>
                                                <?php } ?>






                                            <a href="edit_subSales.php?edit=<?php echo $record['offer_id']; ?>">
                                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                    <i class="fa fa-user"></i>
                                                </button>
                                            </a>


                                            <a href="process/subcategory_sale_process.php?dlt=<?php echo $record['offer_id']; ?>">
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                                    <i class="fa fa-times"></i>
                                                </button>

                                            </a>






                                        </td>
                                    </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require_once 'inc/footer.php';?>
        <!-- /footer content -->
    </div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="process/subcategory_sale_process.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                    <label>Select</label>
                    <select class="form-control" name="subcategory">
                    <option>Select</option>
                        <?php
                              $product = mysqli_query($conn, "select * from sub_category");
                              while($product_fetch=mysqli_fetch_assoc($product)){

                        ?>
                        <option value="<?php echo $product_fetch['sub_id']; ?>">
                        <?php echo $product_fetch ['sub_title']; ?>


                        </option>

                    <?php } ?>

                    </select>
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Add Sales:</label>
                        <input type="text" class="form-control" name="a_sales">
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Percent:</label>
                        <input type="text" class="form-control" name="a_percent">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Image:</label>
                        <input type="file" class="form-control" name="photo">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">submit</button>
                <input type="hidden" name="sub_sale" value="form">
                </form>
            </div>
        </div>
    </div>
</div>


<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $status=$_GET['status'];
    $status_query="update offer set status='$status' where offer_id='$id'";
    $excute_update=mysqli_query($conn, $status_query);
    if($excute_update)
    {
        echo "<script>window.open('subCategory_sales.php','_SELF')</script>";
    }
    else{
        echo "<script>window.open('subCategory_sales.php','_SELF')</script>";
    }
}



?>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="vendors/jszip/dist/jszip.min.js"></script>
<script src="vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>

</body>
</html>