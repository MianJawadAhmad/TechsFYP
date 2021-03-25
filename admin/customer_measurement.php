<?php
			require_once('process/conn.php');
			$query="select * from measurement ";
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
                        <h3>Customer <small>Measurement</small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <i class="fa fa-search"></i>
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
                               
                           

                                <a href="process/product_delete.php?all"> <button class="btn btn-danger btn-lg" style="float: right">Delete All</button></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
										<th>#</th>
                                        <th>Neck</th>
                                        <th>Shoulder</th>
                                        <th>Chest </th>
                                        <th> Waist</th>
                                        <th> Hips </th>
                                         <th> Sleeves </th>
                                          
                                       
                                        <th style="float: right">Action</th>
                                        
                                    </tr>
                                    <tr>
                                    
                                    <th>Biceps</th>
                                     <th>Armpit</th>
                                        <th>Wrist </th>
                                        <th> Elbow</th>
                                        <th> Sholder to Knee </th>
                                         <th> Wasit to Ankle </th>
                                          <th> Chest Pocket </th>
                                         <th> Side Pocket </th>
                                        
                                    </tr>
                                    </thead>


                                    <tbody>

									<?php


										$i=1; while($record=mysqli_fetch_array($excute)){

										?>
                                    <tr>
										
                                        <td><?php echo $i; ?></td>
										<td><?php echo $record['m_neck']; ?></td>
										<td><?php echo $record['customer_email']; ?></td>
									<td><?php echo $record['customer_password']; ?></td>
											<td><?php echo $record['customer_address']; ?></td>
                                        <td><?php echo $record['customer_phone']; ?></td>
                                        <td><?php echo $record['customer_cnic']; ?></td>
                                       
                                    <td class="text-right">

										
										
			
										
                          <a href="process/product_delete.php?dlt=<?php echo $record['product_id']; ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			
			
		
			
			
			
			
			
            <div class="modal-body">
                <form action="process/product_process.php" method="post" enctype="multipart/form-data">
					
					<div class="form-group">
				<label for="sell">Select SubCategory</label>
			<select class="form-control" name="sub_name"> 
				
				<option value="">Select Option</option>
				<?php 
						$select=mysqli_query($conn, "SELECT * FROM sub_category");
						while($select_query=mysqli_fetch_array($select))
						{
				
				     ?>
				<option value="<?php echo $select_query['sub_id']; ?>"><?php echo $select_query['sub_title']; ?></option>
				<?php } ?>
				
				</select>
			
			</div>
					
					
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product Name:</label>
                        <input type="text" class="form-control" name="p_name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product Price:</label>
                        <input type="text" class="form-control" name="p_price">
                    </div>



					
					<div class="form-group">
						<label>Poduct Quality:</label>
				        <select class="form-control" name="p_quality">
						
						<option value="">Select Option</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>


					</div>


                    <div class="form-group">
                        <label class="col-form-label">Product Title:</label>
                        <input type="text" class="form-control" name="p_title">
                    </div>






                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Product Desc:</label>
                        <textarea class="form-control" name="p_desc" id="message-text"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Product Image:</label>
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