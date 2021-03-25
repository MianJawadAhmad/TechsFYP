<?php require_once 'includes/conn.php';
   require_once 'includes/security.php';
   
   
 $userid = $_SESSION['customer_id'];
 
if(isset($_POST['product']) && $_POST['product'] == 'measurement')
{
	
	foreach($_POST as $key => $value)
	{
		$$key = $value;
		
		
		 //echo $key; echo '=' ; echo $value; echo '<br>'; 
	}
	$query="insert into measurement set
	 m_neck= '$neck' ,
	 
	  m_shoulder='$shoulder',
	  
	   m_chest='$chest', 
	   
	   m_waist='$waist',
	   
	    m_hips= '$hips',
		
		m_arm= '$sleeves',
		
		m_bisep='$bicep',
		
		m_armpit='$armpit',
		
		m_wrist='$wrist',
		
		m_elbow='$elbow',
		
		m_shoulder_knee='$kameez',
		
		 m_waist_ankle='$ankle', 
		 
		 m_chest_pocket='$pocket1',
		 
		 m_side_pocket='$pocket2',
		 customer_id ='".$_SESSION['customer_id']."' "; 
	
	
	$run=mysqli_query($conn,$query);
	if($run)
	{
		$updateStatus = mysqli_query($conn,"update customer set m_status='1' where customer_id= '$userid'");
		if($updateStatus)
		{
			header('location:single.php?id='.$_SESSION['pro_id']);
			exit;
		}
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Best Stitching Website</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->

<!-- //header -->
<!-- header-bot -->
<!-- header -->
<?php
require_once( 'includes/top-bar.php' );

?>
<!-- //header -->
<!-- header-bot -->
<?php

require_once 'includes/header.php';
?>
<!-- //header-bot -->
<!-- banner -->
<?php

require_once 'includes/menu.php';
?>
 
	   
   <div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					
					<div class="col-md-12 col-lg-12 col-sm-12 contact-form">
						<h4 class="white-w3ls">Measurement <span>Form</span></h4>
						<form action="" method="post">
                        <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="neck" required="">
								<label>Across Neck</label>
								<span></span>
							</div>
                            </div>
                        </div>
                         <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="shoulder" required="">
								<label>Around Shoulder</label>
								<span></span>
							</div>
                            </div>
                        </div>
                        
                        </div>
                         <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="chest" required="">
								<label>Around Chest</label>
								<span></span>
							</div>
                            </div>
                        </div>
                         <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="waist" required="">
								<label>Around Waist</label>
								<span></span>
							</div>
                            </div>
                        </div>
                        
                        </div>
                         <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="hips" required="">
								<label>Around Hips</label>
								<span></span>
							</div>
                            </div>
                        </div>
                         <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="sleeves" required="">
								<label>Arm Length(Sleeves)</label>
								<span></span>
							</div>
                            </div>
                        </div>
                        
                        </div>
                         <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="bicep" required="">
								<label>Around Biceps</label>
								<span></span>
							</div>
                            </div>
                        </div>
                         <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="armpit" required="">
								<label>Around Armpit</label>
								<span></span>
							</div>
                            </div>
                        </div>
                        
                        </div>
						 <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="wrist" required="">
								<label>Around Wrist</label>
								<span></span>
							</div>
                            </div>
                        </div>
                         <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="elbow" required="">
								<label>Around Above Elbow</label>
								<span></span>
							</div>
                            </div>
                        </div>
                        
                        </div>	
                         <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="kameez" required="">
								<label>Shoulder To Knee(Kameez)</label>
								<span></span>
							</div>
                            </div>
                        </div>
                         <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								<input type="text" name="ankle" required="">
								<label>Waist To Ankle</label>
								<span></span>
							</div>
                            </div>
                        </div>
                        
                        </div>	
                         <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								
                                <select name="pocket1" class="form-control" >
                                <option value="" >Chest Pocket</option>
                                <option>Right</option>
                                 <option>Left</option>
                                  <option>Both</option>
                                </select>
								<span></span>
							</div>
                            </div>
                        </div>
                         <div class="col-lg-6">
                        <div class="form-group">
                        <div class="styled-input agile-styled-input-top">
								  <select name="pocket2" class="form-control" >
                                <option value="" >Side Pocket</option>
                                <option>Right</option>
                                 <option>Left</option>
                                  <option>Both</option>
                                </select>
								<span></span>
							</div>
                            </div>
                        </div>
                        
                        </div>					
						
						<input class="btn btn-primary" type="submit" value="Save Measurements">
                        <input type="hidden" name="product" value="measurement">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>

<?php require_once 'includes/footer.php';?>
<!-- //footer -->

<!-- login -->
			
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->	
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 

<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
