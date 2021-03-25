<?php

session_start();
require_once 'includes/conn.php';
require_once 'includes/security.php';
if (isset($_POST['cart_confirm'])) {
    $addrs = $_POST['addrs'];

    $confrm_query = mysqli_query($conn, "update cart set delivery_address='$addrs', cart_status='1' where customer_id='" . $_SESSION['customer_id'] . "' and cart.cart_status = 0");
    if ($confrm_query) {
        header('location:order.php?1');
        exit();
    }
}
$query = "select * from cart INNER JOIN Product on cart.product_id=Product.product_id where customer_id='" . $_SESSION['customer_id'] . "' and cart.cart_status = 0";
$excute = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>EShop</title>
        <!--/tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
        <link href="css/cart.css">
        <!-- //for bootstrap working -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    </head>

    <body>
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
        <!-- //banner-top -->
        <!-- Modal1 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                            <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                            <form action="#" method="post">
                                <div class="styled-input agile-styled-input-top">
                                    <input type="text" name="Name" required="">
                                    <label>Name</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="email" name="Email" required="">
                                    <label>Email</label>
                                    <span></span>
                                </div>
                                <input type="submit" value="Sign In">
                            </form>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                                <li>
                                    <a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <p><a href="#" data-toggle="modal" data-target="#myModal2"> Don't have an account?</a>
                            </p>

                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <img src="images/log_pic.jpg" alt=" "/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
        <!-- //Modal1 -->
        <!-- Modal2 -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                            <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                            <form action="#" method="post">
                                <div class="styled-input agile-styled-input-top">
                                    <input type="text" name="Name" required="">
                                    <label>Name</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="email" name="Email" required="">
                                    <label>Email</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="password" name="password" required="">
                                    <label>Password</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="password" name="Confirm Password" required="">
                                    <label>Confirm Password</label>
                                    <span></span>
                                </div>
                                <input type="submit" value="Sign Up">
                            </form>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                                <li>
                                    <a href="#" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <p><a href="#">By clicking register, I agree to your terms</a>
                            </p>

                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <img src="images/log_pic.jpg" alt=" "/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
        <!-- //Modal2 -->
        <!-- /banner_bottom_agile_info -->
        <div class="page-head_agile_info_w3l" style=" background: url(images/cart.jpg) no-repeat center;">
            <div class="container">

                <!--/w3_short-->

                <!--//w3_short-->
            </div>
        </div>
        <!--/Typography-->
        <div class="banner_bottom_agile_info">
            <div class="container">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                <div class="row bootstrap snippets">
                    <!--CART STAR HERE -->
                    <div class="col-lg-12 col-sm-12 hero-feature">
                        <div class="table-responsive">
                            <table class="table table-bordered tbl-cart">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Product Name</td>
                                        <td>Size</td>

                                        <td class="td-qty">Quantity</td>
                                        <td>Unit Price</td>
                                        <td>Image</td>
                                        <td align="right">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    while ($fetch = mysqli_fetch_array($excute)) {
                                        ?>

                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <?php echo $fetch['product_name']; ?>
                                                </a>
                                            </td>
                                            <td>
                                            <form action="cart_update.php" method="post">
                   <?php
                   
				   	$sizes = array('samall' => 'small', 'medium' => 'medium', 'large' => 'large');
				   
				   ?>                             
                                                
                                                    <select name="size">
			<?php foreach($sizes as $key => $value){  if($fetch['cart_size'] == $value){ ?>
				
					<option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
				
				<?php }else{;?>
        					<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
    	<?php } } ?>                                                    
	
                                                    </select>
                                            </td>
                                            <td>

                                                <select name="cart_quantity">

                                                    <option value="1 Qty" <?php if ($fetch['cart_quantity'] == '1 Qty') {
                                                    echo 'selected';
                                                } ?>> 1 Qty
                                                    </option>
                                                    <option value="2 Qty" <?php if ($fetch['cart_quantity'] == '2 Qty') {
                                                    echo 'selected';
                                                } ?>> 2 Qty
                                                    </option>


                                                    <option value="3 Qty" <?php if ($fetch['cart_quantity'] == '3 Qty') {
                                                    echo 'selected';
                                                } ?>> 3 Qty
                                                    </option>

                                                    <option value="4 Qty" <?php if ($fetch['cart_quantity'] == '4 Qty') {
                                                    echo 'selected';
                                                } ?>> 4 Qty
                                                    </option>

                                                </select>
                                            </td>



                                            <td>
    <?php echo $fetch['product_price'] ?>
                                            </td>
                                            <td><img src="admin/uploads/<?php echo $fetch['image']; ?>" width="50" height="50">
                                            </td>
                                            <td class="text-right">
                                                <input type="submit" name="submit" value="Update" class="btn btn-info">
                                                <input type="hidden" name="crt" value="uptd">
                                                <input type="hidden" name="id" value="<?php echo $fetch['cart_id']; ?>">




                                                <a href="cart_delete.php?dlt=<?php echo $cart_id = $fetch['cart_id']; ?>">
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                                        <i class="fa fa-times"></i>
                                                    </button>

                                                </a>




                                            </td>

                                        </tr>
    <?php $i++;
} ?>



                                </tbody>
                            </table>
                        </div>

                        <!-- <div class="btn-group btns-cart">
             <button type="button" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Continue Shopping</button>
             <button type="button" class="btn btn-primary">Update Cart</button>
             <button type="button" class="btn btn-primary">Checkout <i class="fa fa-arrow-circle-right"></i></button>
         </div>-->

                    </div>
                    <!-- CART End here   -->

                    <div class="clearfix visible-sm"></div>

                    <!-- Cart -->

                    <!-- End Cart -->
                </div>
                <tr>
                <form action="" method="post">

                    <div class="form-group">

                    </div>
                </form>

                <td class="total" colspan="8" align="center">
                    <form action="#" method="post">
                      
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="float: right">Check Out </button>
                        <!--<button type="submit" name="cart_confirm" class="btn btn-success" style="float: right">Order Confirm</button><br>-->


                    </form>

                </td>

                </tr>
            </div>

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>








                    <div class="modal-body">
                        <form action="process/bill_process.php" method="post" enctype="multipart/form-data">




                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['customer_name']; ?> ">
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['customer_email']; ?>">
                            </div>


                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Address:</label>
                                <input type="text" class="form-control" name="addrs" value="<?php echo $_SESSION['customer_address']; ?>">
                            </div>



                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Phone:</label>
                                <input type="text" class="form-control" name="mob_num" value="<?php echo $_SESSION['customer_phone']; ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">CNIC:</label>
                                <input type="text" class="form-control" name="cnic" value="<?php echo $_SESSION['customer_cnic']; ?>" placeholder="Provide CNIC">
                                
                            </div>

                            <input type="hidden" name="cart_id" value="<?php print $cart_id ?>">






                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">submit</button>
                                <input type="hidden" name="check" value="out">

                                </form>
                            </div>
                    </div>
                </div>
            </div>

            <!--grids-->
            <!-- footer -->
<?php require_once 'includes/footer.php'; ?>
            <!-- //footer -->

            <!-- login -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                            this.value = 'Type here';
                                                                                        }" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                            this.value = 'Password';
                                                                                        }" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h4>Re-type Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                            this.value = 'Password';
                                                                                        }" required="">

                                            </div>
                                            <div class="sign-up">
                                                <input type="submit" value="REGISTER NOW">
                                            </div>

                                        </form>
                                    </div>
                                    <div class="login-right">
                                        <h3>Sign in with your account</h3>
                                        <form>
                                            <div class="sign-in">
                                                <h4>Email :</h4>
                                                <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                            this.value = 'Type here';
                                                                                        }" required="">
                                            </div>
                                            <div class="sign-in">
                                                <h4>Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                            this.value = 'Password';
                                                                                        }" required="">
                                                <a href="#">Forgot password?</a>
                                            </div>
                                            <div class="single-bottom">
                                                <input type="checkbox" id="brand" value="">
                                                <label for="brand"><span></span>Remember Me.</label>
                                            </div>
                                            <div class="sign-in">
                                                <input type="submit" value="SIGNIN">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                                                                        jQuery(document).ready(function ($) {
                                                                                            $(".scroll").click(function (event) {
                                                                                                event.preventDefault();
                                                                                                $('html,body').animate({
                                                                                                    scrollTop: $(this.hash).offset().top
                                                                                                }, 1000);
                                                                                            });
                                                                                        });
            </script>
            <!-- here stars scrolling icon -->
            <script type="text/javascript">
                $(document).ready(function () {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear'
                     };
                     */

                    $().UItoTop({
                        easingType: 'easeOutQuart'
                    });

                });
            </script>
            <!-- //here ends scrolling icon -->

            <!-- for bootstrap working -->
            <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>