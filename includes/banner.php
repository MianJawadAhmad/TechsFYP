<div class="container">
    <div class="banner_bottom_agile_info_inner_w3ls">
		
		<?php $query=mysqli_query($conn, "select * from banner Limit 2 ");
		while($record=mysqli_fetch_assoc($query)){
		
		?>
		
		
        <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
            <figure class="effect-roxy">
                <img src="admin/uploads/<?php echo $record['banner_image']; ?>" alt=" " class="img-responsive" />
                <figcaption>
                    <h3><span>F</span><?php echo $record['banner_title']; ?></h3>
                    <p><?php echo $record ['banner_name']; ?></p>
                </figcaption>
            </figure>
        </div>
		<?php }  ?>
     
		
        <div class="clearfix"></div>
    </div>
</div>