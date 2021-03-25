<?php
include('includes/conn.php');
include('includes/security.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>TechStitching Home</title>
	<!--/tags -->
	<link rel="shortcut icon" type="image/png" href="images/t.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google-site-verification" content="bT51-Kts35BzYo1VDpg57bk3IfUXqjRwKN2dxKXahxg" />
	<meta name="google-site-verification" content="-EPh7grVAXPIYBC4jglKUeY__BlYFZ3ayff2aZwX90U" />
	<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
	<script type="application/x-javascript">
		addEventListener( "load", function () {
			setTimeout( hideURLbar, 0 );
		}, false );

		function hideURLbar() {
			window.scrollTo( 0, 1 );
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header -->
		
	<!-- //header -->
	<!-- header-bot -->
	
	<!-- //header-bot -->
	<!-- banner -->
	<?php

	require_once 'includes/menu.php';
	?>
	<!-- //banner-top -->


	<!-- banner -->
	<?php
	require_once 'includes/slider.php';
	?>
	<!-- //banner -->
    
	
	<!-- schedule-bottom -->
	<?php /*?><?php require_once 'includes/schedule-bottom.php';?><?php */?>
	<!-- //schedule-bottom -->
	<!-- banner-bootom-w3-agileits -->
    <div class="new_arrivals_agile_w3ls_info >
		<?php require_once 'includes/products.php';?>
	</div>
	
	<!--/grids-->
	<?php require_once 'includes/grids.php';?>
	<!--/grids-->
	<!-- /new_arrivals -->
	
	<!-- //new_arrivals -->
	<!-- /we-offer -->
	
	<!-- //we-offer -->
	<!--/coupons-->
	
	<!--coupons-->
	<!-- footer -->
	<?php require_once 'includes/footer.php';?>
	<!-- //footer -->

	<!-- login -->
	<!--<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>

										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div> -->
	<!-- //login -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links -->
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
	<script>
		// Mini Cart
		paypal.minicart.render( {
			action: '#'
		} );

		if ( ~window.location.search.indexOf( 'reset=true' ) ) {
			paypal.minicart.reset();
		}
	</script>

	<!-- //cart-js -->
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$( document ).ready( function () {
			$( '#horizontalTab' ).easyResponsiveTabs( {
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function ( event ) { // Callback function if tab is switched
					var $tab = $( this );
					var $info = $( '#tabInfo' );
					var $name = $( 'span', $info );
					$name.text( $tab.text() );
					$info.show();
				}
			} );
			$( '#verticalTab' ).easyResponsiveTabs( {
				type: 'vertical',
				width: 'auto',
				fit: true
			} );
		} );
	</script>
	<!-- //script for responsive tabs -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
    
	<script src="js/jquery.countup.js"></script>
	<script>
		$( '.counter' ).countUp();
	</script>
	<!-- //stats -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>
	<script type="text/javascript">
		jQuery( document ).ready( function ( $ ) {
			$( ".scroll" ).click( function ( event ) {
				event.preventDefault();
				$( 'html,body' ).animate( {
					scrollTop: $( this.hash ).offset().top
				}, 1000 );
			} );
		} );
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$( document ).ready( function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop( {
				easingType: 'easeOutQuart'
			} );

		} );
	</script>
	<!-- //here ends scrolling icon -->


	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>