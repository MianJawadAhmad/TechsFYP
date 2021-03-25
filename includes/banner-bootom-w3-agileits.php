<div class="container">
    <h3 class="wthree_text_info">Big Sale <span>Products</span></h3>



    <?php
            $category_query=mysqli_query($conn, "select * from offer INNER JOIN category on offer.cat_id=category.cat_id limit 4");
            while($category_fetch=mysqli_fetch_assoc($category_query)){
                if($category_fetch['status'] == 1){
    ?>
    <div class="col-md-3 bb-grids bb-left-agileits-w3layouts">
        <a href="womens.html">
            <div class="bb-left-agileits-w3layouts-inner grid">
                <figure class="effect-roxy">
                    <img src="admin/uploads/<?php echo $category_fetch['offer_image']; ?>" alt=" " class="img-responsive" />
                    <figcaption>
                        <h3><span><?php print $category_fetch['sales']; ?></span> </h3>
                        <p><?php print $category_fetch['percent']; ?></p>
                    </figcaption>
                </figure>
            </div>
        </a>
    </div>
    <?php } } ?>



    <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
        <?php
        $Sub_query=mysqli_query($conn, "select * from offer INNER JOIN sub_category on offer.sub_id=sub_category.sub_id limit 2");
        while($Sub_fetch=mysqli_fetch_assoc($Sub_query)){
            if($Sub_fetch['status'] == 1){
                ?>
        <a href="mens.html">
            <div class="bb-middle-agileits-w3layouts grid" style="margin-top: 10px">
                <figure class="effect-roxy">
                    <img src="admin/uploads/<?php echo $Sub_fetch['offer_image']; ?>" alt=" " class="img-responsive" />
                    <figcaption>
                        <h3><span><?php print $Sub_fetch['sales']; ?></span></h3>
                        <p><?php print $Sub_fetch['percent']; ?></p>
                    </figcaption>
                </figure>
            </div>
        </a>
        <?php } } ?>
        <div class="clearfix"></div>
    </div>

</div>