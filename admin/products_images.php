<?php
require_once 'process/conn.php';
$query="select * from product_images INNER JOIN Product on product_images.product_id=Product.product_id";


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
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="@mdo">
                                    Add new Images
                                </button>
                                <a href="process/images_delete.php?all"><button class="btn btn-danger btn-lg" style="float: right">Delete all</button></a>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Image</th>

                                        <th style="float: Right">Action</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                     <?php $i=1; while ($record=mysqli_fetch_array($excute)){ ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $record['product_name']; ?></td>
                                        <td><img src="uploads/<?php echo $record['images']; ?>" width="50" height="50"></td>

                                        <td class="text-right">
                                            <a href="edit_images.php?edit=<?php echo $record['images_id']; ?>">  <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm ">
                                                    <i class="fa fa-user"></i>
                                                </button></a>



                                            <a href="process/images_delete.php?dlt=<?php echo $record['images_id']; ?>">
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                                    <i class="fa fa-times"></i>
                                                </button>

                                            </a>



                                        </td>

                                        <?php $i++; } ?>
                                    </tr>



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
                <form action="process/images_process.php" method="post" enctype="multipart/form-data">

                 <div class="form-group">
                     <label>Select Product</label>
                        <select class="form-control" name="p_name">
                            <option>Select</option>
                            <?php $product_query=mysqli_query($conn, "select * from Product");
                            while($product_record=mysqli_fetch_array($product_query)){
                            ?>
                            <option value="<?php echo $product_record['product_id']; ?>"><?php echo $product_record['product_name']; ?></option>

                                <?php } ?>
                        </select>
                 </div>



                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Category Image:</label>
                        <input type="file" class="form-control" name="photo">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">submit</button>
                <input type="hidden" name="pro" value="form">
                </form>
            </div>
        </div>
    </div>
</div>
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