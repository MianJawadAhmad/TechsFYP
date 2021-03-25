<style>
.setting{
 float: right;
    color: white;
    margin-top: 16px;
    margin-right: 10px;
    display: inline;
    width: 100px;
    height: 42px;
    padding: 2px;
    border: 2px solid red;
    background-color: black;
    padding-left: 10px;
}

</style>


<?php
$count = mysqli_query($conn, "select * from Customer");
$cus_record = mysqli_fetch_assoc($count);
 $cus_id= $cus_record['customer_id'];
  
$cart="select * from cart";
$cart_run=mysqli_query( $conn,$cart);
$cart_num=mysqli_num_rows($cart_run);
$cart_num ; 


?>


<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header" style="position:static">
                        <div class="row">
                            <div class="col-lg-12 col-md-8 col-sm-4">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        </div>
                        </div>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                        <!--     <li style="margin-left: -60px;margin-right: -90px; padding-top:25px;"><h2 style="color:#FFF">TechStitching</h2></li>-->
                             <li><img src="images/b.png" style="padding-top:5px"   height="80px" width="80px"/></li>  
                            <li class="active menu__item"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
                           
               
                            <?php
                            $query = mysqli_query($conn, "select * from category");
                            while ($record = mysqli_fetch_assoc($query)) {

                                $id = $record['cat_id'];
                                ?>
                                <li class="dropdown menu__item">


                                    <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $record['cat_name']; ?> <span class="caret"></span></a>


                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="agile_inner_drop_nav_info">
                                            <div class="col-sm-6 multi-gd-img1 multi-gd-text" style="width="350px;" height="300px"">
                                                <a href="mens.html"><img src="admin/uploads/<?php echo $record['image']; ?>" height="300px;" width="350px;" alt=" "/></a>

                                            </div>
                                            <?php
                                            $sub_query = "select * from sub_category where cat_id='$id'";
                                            $sub_excute = mysqli_query($conn, $sub_query);
                                            while ($fetch = mysqli_fetch_assoc($sub_excute)) {
                                                ?>  
                                                <div class="col-sm-3 multi-gd-img">


                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="product.php?id=<?php echo $fetch['sub_id']; ?>"><?php echo $fetch['sub_title']; ?></a></li>

                                                    </ul>


                                                </div>
                                            <?php } ?>


                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                            <?php } ?>
                             <li class=" menu__item"><a class="menu__link" href="about.php">About</a></li>

                            <li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="top_nav_right" style="padding-top: 10px;">


            <?php
            
            if(@$_SESSION['customer_id']){ ?>
            
            <a href="cart.php"> <img src="images/cartpng.png" width="70" height="70" style="float: right"><span class="badge" id="show_cart_items" style="float:right;"><?php
            
      $query = mysqli_query($conn, "SELECT * FROM cart WHERE    customer_id='" . $_SESSION[ 'customer_id' ] . "'");
          echo mysqli_num_rows($query);
      
      ?></span>
           
            </a>
            <?php } else { ?>    
            <a href="#"><img src="images/cartpng.png" width="70" height="70" style="float: right"></a>
            <?php } ?>

                    <?php
                    if(@$_SESSION['customer_id'])
                    { ?>
            <a href="order.php" > <h3 class="setting" style="padding-bottom:3px">Orders</h3>
            <span class="badge" id="show_order" style="float:right;"><?php
      $query = mysqli_query($conn, "SELECT * from  bills WHERE                                            bill_email='" . $_SESSION[ 'customer_email' ] . "'");
          echo mysqli_num_rows($query);
      
      ?></span>
            
           </a>
            <?php } else{  ?>
                        <a href="#"> <h3 class="setting">Orders</h3></a>

            <?php } ?>

            </div>

        </div>

        <div class="clearfix"></div>
    </div>
</div>