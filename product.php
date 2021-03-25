<?php require_once 'includes/conn.php';
require_once 'includes/security.php';
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
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- //for bootstrap working -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <!-- header -->
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
        <div class="page-head_agile_info_w3l" style=" background: url(images/product.jpg) no-repeat center;">

        </div>

        <!-- banner-bootom-w3-agileits--->
        <div class="banner-bootom-w3-agileits">
            <div class="container">
           
                <!-- mens -->
                <div class="row">
                <div style="margin-left:-50px" class="col-lg-3">
                <div class="css-treeview">
                        <h4>Latest Categories</h4>
                        <ul class="tree-list-pad">


                                <ul>

                                    <?php
                                    $cat = mysqli_query($conn, "SELECT * from sub_category ORDER by sub_id desc limit 5 ");
                                    while($cat_record=mysqli_fetch_assoc($cat)){

                                    ?>
                                     <li><input type="checkbox" id="item-0-<?php print $cat_record['sub_id']; ?>"/>
                                        <label for="item-0-<?php print $cat_record['sub_id']; ?>">
                                            <a href="product.php?id=<?php print $cat_record['sub_id']; ?>"> <i class="fa fa-hand-lizard-o" aria-hidden="true"></i> <?php print $cat_record['sub_title']; ?></label></a>

                                        <!--<ul>

                                            <li><a href="mens.html">Shirts</a>

                                            </li>

                                        </ul> -->
                                    </li>

                                    <?php }  ?>

                                </ul>
                            </li>
                           <!-- here u can add all category -->
                        </ul>
                    </div>
                
                </div>
                
                <!--Categories-->
                <div class="col-lg-9">
                
                <div id="horizontalTab">

		 <?php
		  $id = $_GET['id'];
               $query = mysqli_query($conn, "select * from Product where sub_id='$id'  ");
                    while ($record = mysqli_fetch_array($query)) {
                        ?>
                       <div class="col-md-4 product-men">
                      
                            <div class="men-pro-item simpleCart_shelfItem">
                               
                                 <a href="single.php?id=<?php echo $record['product_id']; ?>">  <div class="men-thumb-item">
                                    <img src="admin/uploads/<?php echo $record['image']; ?>" alt="" class="pro-image-front">
                                    <img src="admin/uploads/<?php echo $record['image']; ?>" alt="" class="pro-image-back">
                                    
                                    <span class="product-new-top">New</span>

                                </div></a>
                                
                                <div class="item-info-product ">
                                    <h4><a href="single.php?id=<?php echo $record['product_id']; ?>"><?php echo $record['product_name']; ?></a></h4>
                                    <div class="info-product-price">
                                       <div>RS</div></span><span class="item_price"><?php echo $record['product_price']; ?></span>
                                        
                                    </div>
                                     <div class="color-quality">
                                        <div class="color-quality-right">
                                            <h5>Quantity :</h5>
                                            <form action="process/cart_process.php" method="post" enctype="multipart/form-data">
                                                <select id="country1" onchange="change_country(this.value)" class="frm-field required sect" name="quantity">
                                                    <option value="5 Qty">1</option>
                                                    <option value="6 Qty">2</option>
                                                    <option value="7 Qty">3</option>
                                                    <option value="10 Qty">4</option>
                                                </select><br>

                                               

                                        </div>
                                    </div>
                                   	
                                        
                                        </form>
                                    </div>


                                </div>
                            </div>
                          

                       
		    <?php } ?>
             </div>
                   
                
                </div>
                
                
                </div>
                <div class="col-md-4 products-left">

                    
                   
               
                    
                    

                    
                   
                    <!--	<div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                    <img src="images/b7.jpg" alt="" class="pro-image-front">
                                                    <img src="images/b7.jpg" alt="" class="pro-image-back">
                                                    <div class="men-cart-pro">
                                                            <div class="inner-men-cart-pro">
                                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                            </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>

                                            </div>
                                            <div class="item-info-product ">
                                                    <h4><a href="single.html">Costa Swiss Bag </a></h4>
                                                    <div class="info-product-price">
                                                            <span class="item_price">$290.99</span>
                                                            <del>$359.71</del>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                    <fieldset>
                                                                            <input type="hidden" name="cmd" value="_cart">
                                                                            <input type="hidden" name="add" value="1">
                                                                            <input type="hidden" name="business" value=" ">
                                                                            <input type="hidden" name="item_name" value="Costa Swiss Bag">
                                                                            <input type="hidden" name="amount" value="30.99">
                                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                                            <input type="hidden" name="currency_code" value="USD">
                                                                            <input type="hidden" name="return" value=" ">
                                                                            <input type="hidden" name="cancel_return" value=" ">
                                                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                                                    </fieldset>
                                                            </form>
                                                    </div>

                                            </div>
                                    </div>
                            </div>-->
                    <!--<div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                            <img src="images/s6.jpg" alt="" class="pro-image-front">
                                            <img src="images/s6.jpg" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                    </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                            <h4><a href="single.html">Aero Canvas Loafers  </a></h4>
                                            <div class="info-product-price">
                                                    <span class="item_price">$120.99</span>
                                                    <del>$199.71</del>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <form action="#" method="post">
                                                            <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart">
                                                                    <input type="hidden" name="add" value="1">
                                                                    <input type="hidden" name="business" value=" ">
                                                                    <input type="hidden" name="item_name" value="Aero Canvas Loafers">
                                                                    <input type="hidden" name="amount" value="30.99">
                                                                    <input type="hidden" name="discount_amount" value="1.00">
                                                                    <input type="hidden" name="currency_code" value="USD">
                                                                    <input type="hidden" name="return" value=" ">
                                                                    <input type="hidden" name="cancel_return" value=" ">
                                                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                                            </fieldset>
                                                    </form>
                                            </div>

                                    </div>
                            </div>
                    </div>-->

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>

                

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //mens -->
        <!--/grids-->
               <!--grids-->
        <!-- footer -->
        <?php require_once 'includes/footer.php'; ?>	<!-- //footer -->

        <!-- login -->
        <!--	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                                                        <input type="submit" value="REGISTER NOW">
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
                </div>-->
        <!-- //login -->
        <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
                                                // You can also use "$(window).load(function() {"
                                                $(function () {
                                                    // Slideshow 4
                                                    $("#slider3").responsiveSlides({
                                                        auto: true,
                                                        pager: true,
                                                        nav: false,
                                                        speed: 500,
                                                        namespace: "callbacks",
                                                        before: function () {
                                                            $('.events').append("<li>before event fired.</li>");
                                                        },
                                                        after: function () {
                                                            $('.events').append("<li>after event fired.</li>");
                                                        }
                                                    });
                                                });
        </script>
        <script src="js/modernizr.custom.js"></script>
        <!-- Custom-JavaScript-File-Links -->
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
        <!---->
        <script type='text/javascript'>
            //<![CDATA[ 
            $(window).load(function () {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 9000,
                    values: [1000, 7000],
                    slide: function (event, ui) {
                        $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

            }); //]]>
        </script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <!---->
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