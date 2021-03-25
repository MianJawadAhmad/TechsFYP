<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php require_once 'includes/conn.php';
      require_once 'includes/security.php';
require_once 'includes/security.php';
 $_SESSION['pro_id']=$_GET['id']; 
 if(isset($_SESSION['customer_id'])){
 $query="select m_status from customer where customer_id='".$_SESSION['customer_id']."'";
 $run=mysqli_query($conn,$query);
 $record=mysqli_fetch_array($run);
 if($record['m_status']==1){
	 $measurement= TRUE;
	 }
	 else{
		$measurement=FALSE;
		}
 }
  ?>
  <?php
            if (isset($_GET['id']) && $_GET['id'] != '')
			 {
           $id = $_GET['id'];
       $query = mysqli_query($conn, "select * from Product where product_id='$id'");
             $product_fetch = mysqli_fetch_array($query);
             }
    ?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Single Product</title>
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
        <!-- //tags -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

        <!-- //for bootstrap working -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <!-- header -->
       
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
        
        <div class="modal fade" id="myModal34" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                            <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                            <form action="login.php" method="post">
                                <div class="styled-input agile-styled-input-top">
                                    <input type="text" name="email" required="">
                                    <label>Email</label>
                                    <span></span>
                                </div>
                                <div class="styled-input">
                                    <input type="password" name="pass" required="">
                                    <label>Password</label>
                                    <span></span>
                                </div>
                                <input type="submit" value="Sign In">
                                <input type="hidden" name="log" value="in">
                                <input type="hidden" name="id" value="<?php echo $product_fetch['product_id']; ?>">
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
                            <p><a href="#" data-toggle="modal" data-target="#myModal45"> Don't have an account?</a>
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
        <h1 id="message"></h1>
        <div class="modal fade" id="myModal45" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                            <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                            <form action="process/sign_up.php" method="post">


                    <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input type="text" placeholder="name" name="name" required=""/>
                    </div>

                    <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input type="email" placeholder="Email Address" name="email" required=""/>
                    </div>
                    <div class="icon1">
                        <span class="fa fa-lock"></span>
                        <input type="password" placeholder="Password" name="password" required=""/> 
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    </div>
                    <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input type="text" placeholder="Address" name="address" required=""/>
                    </div>
                    <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input type="text" placeholder="Enter Phone-Number" name="phone" required=""/>
                    </div>
                     <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input type="text" placeholder="Enter CNIC-Number" name="cnic" required=""/>
                    </div>
                    
                    <div class="login-check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
                    </div>
                    <div class="bottom">
                        <button type="submit" name="submit" class="btn">Creat Account Eshop</button>
                        <input type="hidden" name="regs" value="submit">
                    </div>
                    <!--<div class="links">
                        <p><a href="#">Forgot Password?</a></p>
                        <p class="right"><a href="register.html">New User? Register</a></p>
                        <div class="clear"></div>
                    </div>-->
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
        <!--/single_page-->
        <!-- /banner_bottom_agile_info -->
       

        <!-- banner-bootom-w3-agileits -->
       
        <div  class="banner-bootom-w3-agileits">
            <div class="container">
            <div class="col-lg-1"></div>
                <div class="col-md-3 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">

                            <ul class="slides">


                                


                   <li data-thumb="admin/uploads/<?php echo $product_fetch['image']; ?>">
                   <div class="thumb-image"> <img src="admin/uploads/<?php echo $product_fetch['image']; ?>" data-imagezoom="true" class="img-responsive"> </div>
                                </li>

                                <?php
                                $images = mysqli_query($conn, "select * from product_images where product_id='$id'");
                                while ($record = mysqli_fetch_array($images)) {
                                    ?>
                                    <li data-thumb="admin/uploads/<?php echo $record['images']; ?>">
                                        <div  class="thumb-image"> <img src="admin/uploads/<?php echo $record['images']; ?>" data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                
                <div style="padding-top:30px" class="col-md-7 single-right-left simpleCart_shelfItem">
                    <h3><?php echo $product_fetch['product_name']; ?></h3>
                    <p><span class="item_price"><?php echo $product_fetch['product_price']; ?></span> <del>- $900</del>
                    </p>
                    <div class="rating1">
                        <span class="starRating">
                            <input id="rating5" type="radio" name="rating" value="5">
                            <label for="rating5">5</label>
                            <input id="rating4" type="radio" name="rating" value="4">
                            <label for="rating4">4</label>
                            <input id="rating3" type="radio" name="rating" value="3" checked="">
                            <label for="rating3">3</label>
                            <input id="rating2" type="radio" name="rating" value="2">
                            <label for="rating2">2</label>
                            <input id="rating1" type="radio" name="rating" value="1">
                            <label for="rating1">1</label>
                        </span>

                    </div>
                   
                    <div class="color-quality">
                        <div class="color-quality-right">
                            <h5>Quantity:</h5>
                            <form action="process/cart_process.php" method="post">
                                <select id="quantity_fetch" onchange="change_country(this.value)" class="frm-field required" name="quantity">
                                    <option value="1 Qty">1 Qty</option>
                                    <option value="2 Qty">2 Qty</option>
                                    <option value="3 Qty">3 Qty</option>
                                    <option value="4 Qty">4 Qty</option>
                                </select><br>

                                <input type="hidden" id="id_fetch" value="<?php echo $_GET['id']; ?>">


                                <h5>Size :</h5>
                                <select id="size_fetch" onchange="change_country(this.value)" class="frm-field required" name="size">
                                    <option value="Small">Small</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>

                                </select>

                        </div>
                    </div>
                    <!-- <div class="occasional">
                        <h5>Types :</h5>
                        <div class="colr ert">
                            <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
                        </div>
                        <div class="colr">
                            <label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
                        </div>
                        <div class="colr">
                            <label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
                        </div>
                        <div class="clearfix"> </div>
                    </div> -->
                   <fieldset>
                    <input type="hidden" name="cart_submit" />
                    
                    <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
                                <input type="hidden" name="customer_id" value="<?php echo @$_SESSION['customer_id']; ?>">

                            <?php if(!empty($_SESSION['logged']) == TRUE){
			if($product_fetch['cloth_status'] > 0)
			{?>
			<div style="padding-top:10px">
             <button type="button" class="btn btn-primary"  data-target="#orderModal" data-toggle="modal" >Order</button>
<input type="submit" name="add_cart" id="add_to_cart" class="btn btn-primary" value="Add To Cart" />
     </div>
       <input type="hidden" name="order" value="place" />
       <?php } else {
								
								if( $measurement ==TRUE ){
								?>
                                <div style="padding-top:10px">
        <button type="button" class="btn btn-primary" data-target="#orderModal" data-toggle="modal" >Order</button>
    <input type="submit" name="add_cart" id="add_to_cart" class="btn btn-primary" value="Add To Cart" />
     </div>
       <input type="hidden" name="order" value="place" />
      
                    <?php } elseif($measurement == FALSE) { ?>
                    
                    <div style="padding-top:10px">
<a href="measurement.php"><button type="button" class="btn btn-primary">Give Measurement</button></a></div>
						
				<?php }		} } else {?>
           <div style="padding-top:10px">        
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal34">Login To Proceed</button></div> 
<?php }?>
                            </fieldset>
                            </form>
                           
                         
						
                        </div>

                    </div>
                    <!-- Trigger the modal with a button -->
                    
                   

<!-- Modal -->
	        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
            <ul  class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                        <li  class="share">Share On : </li>
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
            
            </div>
            
            </div>
                    

                </div>
                <div class="clearfix"> </div>
                <!-- /new_arrivals -->
                <div class="responsive_tabs_agileits">
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>Description</li>
                            <li>Reviews</li>
                            <li>Information</li>
                        </ul>
                        <div class="resp-tabs-container">
                            <!--/tab_one-->
                            <div class="tab1">

                                <div class="single_page_agile_its_w3ls">
                                    <h6>Lorem ipsum dolor sit amet</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                                    <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <!--//tab_one-->
                            <div class="tab2">

                                <div class="single_page_agile_its_w3ls">
                                    <div class="bootstrap-tab-text-grids">
                                        <div class="bootstrap-tab-text-grid">
                                            <div class="bootstrap-tab-text-grid-left">
                                                <img src="images/t1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="bootstrap-tab-text-grid-right">
                                                <ul>
                                                    <li><a href="#">Admin</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a>
                                                    </li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="add-review">
                                            <h4>add a review</h4>
                                            <form action="#" method="post">
                                                <input type="text" name="Name" required="Name">
                                                <input type="email" name="Email" required="Email">
                                                <textarea name="Message" required=""></textarea>
                                                <input type="submit" value="SEND">
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab3">

                                <div class="single_page_agile_its_w3ls">
                                    <h6>Big Wing Sneakers (Navy)</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                                    <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //new_arrivals -->
                <!--/slider_owl-->

                
            </div>
        </div>
        <!--//single_page-->
        <!--/grids-->
        
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
        <!-- single -->
        <script src="js/imagezoom.js"></script>
        <!-- single -->
        <!-- script for responsive tabs -->
        <script src="js/easy-responsive-tabs.js"></script>
        <script>
                                                $(document).ready(function () {
                                                    $('#horizontalTab').easyResponsiveTabs({
                                                        type: 'default', //Types: default, vertical, accordion           
                                                        width: 'auto', //auto or any width like 600px
                                                        fit: true, // 100% fit in a container
                                                        closed: 'accordion', // Start closed if in accordion view
                                                        activate: function (event) { // Callback function if tab is switched
                                                            var $tab = $(this);
                                                            var $info = $('#tabInfo');
                                                            var $name = $('span', $info);
                                                            $name.text($tab.text());
                                                            $info.show();
                                                        }
                                                    });
                                                    $('#verticalTab').easyResponsiveTabs({
                                                        type: 'vertical',
                                                        width: 'auto',
                                                        fit: true
                                                    });
                                                });
        </script>
        <!-- FlexSlider -->
        <script src="js/jquery.flexslider.js"></script>
        <script>
                                                // Can also be used with $(document).ready()
                                                $(window).load(function () {
                                                    $('.flexslider').flexslider({
                                                        animation: "slide",
                                                        controlNav: "thumbnails"
                                                    });
                                                });
        </script>
        <!-- //FlexSlider-->
        <!-- //script for responsive tabs -->
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
        <!-- Funcion for modal disappearing -->
        <script >
		
		$(document).ready(function(){
			if(window.location.href.indexOf('#myModal34') !=-1){
				
				$('#myModal34').modal('show');
				}
			
			
			});
        </script>
        
        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Check Out</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
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
                                <input type="text" class="form-control" name="cnic" placeholder="Provide CNIC" value="<?php echo $_SESSION['customer_cnic']; ?>">
                                
                            </div>

                            <input type="hidden" name="cart_id" value="<?php print $cart_id ?>">
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button onclick=" luqman_order() " class="btn btn-primary">Order Now</button>
                                <input type="hidden" name="check" value="out">

                                
                            </div>
                    </div>
                </div>
    </body>
    
    
<script>


function luqman_order() {

var qty = document.getElementById("quantity_fetch").value;
var size = document.getElementById("size_fetch").value;
var id = document.getElementById("id_fetch").value;

         $.ajax({
           type: 'POST',
           url: 'process/order_process.php',
           data: {qty : qty, size : size, id: id},
           success: function (data) {
             $("#show_order").html(data);
			  if(data > 0){
				  	
					   swal({
 title: "Congratulations!",
 text: "Your Order Has Been Successfully Placed !",
 icon: "success",
 button: "OK",
});


   window.setTimeout(function(){

        window.location.href = "order.php";

    }, 2000);


			  }
           }
         });



       }
   </script>

   <script type="text/javascript">

$("#add_to_cart").click(function() {
event.preventDefault();
         $.ajax({
           type: 'POST',
           url: 'add_to_cart.php',
           data: ,
           success: function (data) {
             $("#show_cart_items").html(data);
			  if(data > 0){
				  	
					   swal({
 title: "Congratulations!",
 text: "Your Product Has Been Successfully Added To Cart !",
 icon: "success",
 button: "OK",
});

			  }
           }
         });
       });





   </script>
   
   <script>
       //When the page has loaded.
       $( document ).ready(function(){
           $('#message').fadeIn('slow', function(){
              $('#message').delay(4000).fadeOut();
           });
       });
       </script>


    
</html>