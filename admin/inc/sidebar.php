

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="home.php" class="site_title"><img src="images/logo.png"><span>Store</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/imga.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span><?php echo  @$_SESSION['admin_name']; ?></span>

            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href	="home.php"><i class="fa fa-home"></i> Home </a>

                    </li>
                    <li><a><i class="fa fa-edit"></i> Record : <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="category.php">Category Record </a></li>
                            <li><a href="sub.php">SubCategory Record </a></li>


                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Product<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="product.php">Products</a></li>
                            <li><a href="products_images.php">Product Images</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-user"></i>Customers<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="customer_record.php"> View Customers</a></li>
                            <li><a href="customer_measurement.php">Customer Measurements</a></li>

                        </ul>
                    </li>
                    </li>
                    <li><a><i class="fa fa-assistive-listening-systems"></i> Sales<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="category_sale.php">Add Category Sale`s</a></li>
                            <li><a href="subCategory_sales.php">Add SubCategory Sale`s</a></li>
                            <li><a href="offer.php">Add Product Sale`s</a></li>


                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i>  Order <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="order.php">View Order</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Delivery <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="devlivery.php">Delivery Information</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Change Passwprd <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="e_commerce.html">E-commerce</a></li>

                        </ul>
                    </li>
                    <li><a href="logout.php"><i class="fa fa-windows"></i> Logout <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="page_403.html">403 Error</a></li>

                        </ul>
                    </li>


                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>