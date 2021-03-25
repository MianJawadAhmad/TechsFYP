<div class="container">
	<h3 class="wthree_text_info">New <span>Arrivals</span></h3>
	<div id="horizontalTab">

		 <?php
                    
                    $query = mysqli_query($conn, "select * from Product ORDER by product_id DESC limit 15 ");
                    while ($record = mysqli_fetch_array($query)) {
                        ?>
  <div class="col-md-4 product-men">

                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="admin/uploads/<?php echo $record['image']; ?>" alt="" class="pro-image-front">
                                    <img src="admin/uploads/<?php echo $record['image']; ?>" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.php?id=<?php echo $record['product_id']; ?>" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.php?id=<?php echo $record['product_id']; ?>"><?php echo $record['product_name']; ?></a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price"><?php echo $record['product_price']; ?></span>
                                        <del>$189.71</del>
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
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        
                                            <fieldset>
                                                <input type="hidden" name="product_id" value="<?php echo $record['product_id']; ?>">
                                                <input type="hidden" name="customer_id" value="<?php echo $_SESSION['customer_id']; ?>">
                                                <?php if (@$_SESSION['customer_id']) { ?>
                                                    <input type="submit" name="cart_submit" value="Add to cart" class="button">

                                                <?php } else { ?>
                                                    <input type = "submit" name = "login" value = "login" class="button" >
                                                <?php } ?>

                                            </fieldset>
                                        </form>
                                    </div>


                                </div>
                            </div>

                        </div>
		    <?php } ?>
	</div>
</div>