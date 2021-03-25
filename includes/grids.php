


<div class="agile_last_double_sectionw3ls">

<?php

$offer_query=mysqli_query($conn, "select * from offer INNER JOIN Product on offer.product_id=Product.product_id");
while($record=mysqli_fetch_assoc($offer_query)){
if($record['status'] == 1){
?>

    <div class="col-md-6 multi-gd-img multi-gd-text">

        <a href="single.php?id=<?php print $record['product_id']?>"><img src="admin/uploads/<?php print $record['offer_image']; ?>"  alt=""><h4><?php print $record['product_name'] ?> <br> <span><?php print $record['sales']; ?></span> <?php print $record['percent']; ?></h4></a>
       <br>

    </div>

  <?php } } ?>
    <div class="clearfix"></div>
</div>