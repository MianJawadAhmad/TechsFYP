<div class="container">
	<h3 class="wthree_text_info">ReadyMade <span>Collection</span></h3>
	<div id="horizontalTab">
 <?php
                    
 $query = mysqli_query($conn, "SELECT * FROM Product INNER JOIN sub_category ON Product.sub_id=sub_category.sub_id WHERE sub_category.sub_title='ReadyMade' limit 4");
                    while ($record = mysqli_fetch_array($query)) {
						$_SESSION['pro_id']= $record['product_id'];
                        ?>
                       <div class="col-md-3  product-men">

                            <div class="men-pro-item simpleCart_shelfItem">
                            <a href="single.php?id=<?php echo $record['product_id']; ?>">     <div class="men-thumb-item">
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

    <!--Female products-->
    
    <h3   class="wthree_text_info">Unstitched <span>Collection</span></h3>
	<div id="horizontalTab">

		 <?php
                    
                    $query = mysqli_query($conn, "SELECT * FROM Product INNER JOIN sub_category ON Product.sub_id=sub_category.sub_id WHERE sub_category.sub_title='UnStitched' limit 4");
                    while ($record = mysqli_fetch_array($query)) {
                        ?>
                       <div class="col-md-3  product-men">

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
                                                    <option value="1 Qty">1</option>
                                                    <option value="1 Qty">2</option>
                                                    <option value="3 Qty">3</option>
                                                    <option value="4 Qty">4</option>
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
