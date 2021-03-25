<?php
require_once 'process/conn.php';
if ( isset( $_GET[ 'edit' ] ) && $_GET[ 'edit' ] != '' ) {
	$edit = $_GET[ 'edit' ];
	$query = "select * from product_images INNER JOIN Product on product_images.product_id=Product.product_id where images_id='$edit'";

	$excute = mysqli_query( $conn, $query );
	$fetch = mysqli_fetch_array( $excute );
}



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
								<h3>Form Elements</h3>
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
										<h2> Edit Category<small>Record</small></h2>

										<div class="clearfix"></div>
									</div>

									<br/>
									<form id="demo-form2" action="process/images_update.php" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">


										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required">*</span>
                                    </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<select class="form-control" name="p_name">
													<option>Select</option>
													<?php
													$pro_query = mysqli_query( $conn, "select * from Product" );
													while ( $record = mysqli_fetch_array( $pro_query ) ) {


														?>
													<option value="<?php echo $record['product_id']; ?>">
														<?php echo $record['product_name']; ?>
													</option>
													<?php } ?>

												</select>


											</div>




										</div>



										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Images<span class="">*</span>
                                    </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="file" name="photo" value="<?php echo $fetch['images']; ?>" class="form-control col-md-7 col-xs-12">

												<input type="file" name="id" value="<?php echo $fetch['images_id']; ?>" style="display: none" class="form-control col-md-7 col-xs-12">

											</div>




										</div>






										<div class="form-group" align="center">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span>
                                    </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input type="submit" name="update" value="Update" class="btn btn-success" style="float:center ">
												<input type="hidden" name="pro" value="uptd">




											</div>




										</div>

								</div>
								<div class="ln_solid"></div>


								</form>
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

		<!-- jQuery -->
		<script src="vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="vendors/nprogress/nprogress.js"></script>
		<!-- bootstrap-progressbar -->
		<script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<!-- iCheck -->
		<script src="vendors/iCheck/icheck.min.js"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="vendors/moment/min/moment.min.js"></script>
		<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- bootstrap-wysiwyg -->
		<script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
		<script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
		<script src="vendors/google-code-prettify/src/prettify.js"></script>
		<!-- jQuery Tags Input -->
		<script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
		<!-- Switchery -->
		<script src="vendors/switchery/dist/switchery.min.js"></script>
		<!-- Select2 -->
		<script src="vendors/select2/dist/js/select2.full.min.js"></script>
		<!-- Parsley -->
		<script src="vendors/parsleyjs/dist/parsley.min.js"></script>
		<!-- Autosize -->
		<script src="vendors/autosize/dist/autosize.min.js"></script>
		<!-- jQuery autocomplete -->
		<script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
		<!-- starrr -->
		<script src="vendors/starrr/dist/starrr.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="build/js/custom.min.js"></script>

	</body>
</html>