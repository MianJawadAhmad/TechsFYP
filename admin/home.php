

<?php
require_once( 'process/conn.php' );
require_once( 'security.php' );

$query = "select * from store";
$excute = mysqli_query( $conn, $query );




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Shopping Store </title>

	<!-- Bootstrap -->
	<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="build/css/custom.min.css" rel="stylesheet">
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
					<div class="row top_tiles">


                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <a href="slider.php">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                    </div>
                                    <div class="count">
                                        1


                                    </div>
                                    <h3>Slider</h3>
                                    <p>Lorem ipsum psdea itgum rixt.</p>
                                </div>
                            </a>
                        </div>

						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">

							<a href="devlivery.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-caret-square-o-right"></i>
									</div>
									<div class="count">
										1


									</div>
									<h3>Delivery</h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>

						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="banner.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-caret-square-o-right"></i>
									</div>
									<div class="count">
										<?php
										$banner_query = mysqli_query( $conn, "select * from banner" );
										echo mysqli_num_rows( $banner_query );

										?>


									</div>
									<h3>Banner</h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>




						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="category.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-caret-square-o-right"></i>
									</div>
									<div class="count">
										<?php
										$category_query = mysqli_query( $conn, "select * from category" );
										echo mysqli_num_rows( $category_query );
										?>



									</div>
									<h3>Category</h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="sub.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-comments-o"></i>
									</div>
									<div class="count">
										<?php
										$sub_category = mysqli_query( $conn, "select * from sub_category" );
										echo mysqli_num_rows( $sub_category );
										?>


									</div>
									<h3>Sub Category </h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="product.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-sort-amount-desc"></i>
									</div>
									<div class="count">

										<?php
										$Product = mysqli_query( $conn, "select * from Product" );
										echo mysqli_num_rows( $Product );
										?>


									</div>
									<h3>Product`s</h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>


						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="products_images.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-check-square-o"></i>
									</div>
									<div class="count">
										<?php
										$Product_Images = mysqli_query( $conn, "select * from product_images" );
										echo mysqli_num_rows( $Product_Images );
										?>


									</div>
									<h3>Product's Image's</h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>

						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="about.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-check-square-o"></i>
									</div>
									<div class="count">
										<?php
										$about = mysqli_query( $conn, "select * from about" );
										echo mysqli_num_rows( $about );
										?>


									</div>
									<h3>About </h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>
						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="team.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-check-square-o"></i>
									</div>
									<div class="count">
										<?php
										$team = mysqli_query( $conn, "select * from team" );
										echo mysqli_num_rows( $team );
										?>


									</div>
									<h3>Team </h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>


						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="sales.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-check-square-o"></i>
									</div>
									<div class="count">
										<?php
										$contact = mysqli_query( $conn, "select * from offer" );
										echo mysqli_num_rows( $contact );
										?>


									</div>
									<h3>Sales</h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>



						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="order.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-check-square-o"></i>
									</div>
									<div class="count">
										1


									</div>
									<h3>Order</h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>







						<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<a href="contact.php">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-check-square-o"></i>
									</div>
									<div class="count">
										<?php
										$contact = mysqli_query( $conn, "select * from contact" );
										echo mysqli_num_rows( $contact );
										?>


									</div>
									<h3>Contact-US</h3>
									<p>Lorem ipsum psdea itgum rixt.</p>
								</div>
							</a>
						</div>
						<!--      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-square-o"></i></div>
                            <div class="count">179</div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>-->
						<!--  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-square-o"></i></div>
                            <div class="count">179</div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>-->

						<!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-square-o"></i></div>
                            <div class="count">179</div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>-->

					</div>

					<!--Extra Code Area -->
				</div>

				<h1 align="center">This Is Your<strong> Admin </strong>Area</h1>
				<h5 align="center" style="color: #faac2c">You Can Manage All Software Here</h5>
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
	<!-- Chart.js -->
	<script src="vendors/Chart.js/dist/Chart.min.js"></script>
	<!-- jQuery Sparklines -->
	<script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- Flot -->
	<script src="vendors/Flot/jquery.flot.js"></script>
	<script src="vendors/Flot/jquery.flot.pie.js"></script>
	<script src="vendors/Flot/jquery.flot.time.js"></script>
	<script src="vendors/Flot/jquery.flot.stack.js"></script>
	<script src="vendors/Flot/jquery.flot.resize.js"></script>
	<!-- Flot plugins -->
	<script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="vendors/flot.curvedlines/curvedLines.js"></script>
	<!-- DateJS -->
	<script src="vendors/DateJS/build/date.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="vendors/moment/min/moment.min.js"></script>
	<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="build/js/custom.min.js"></script>
</body>
</html>