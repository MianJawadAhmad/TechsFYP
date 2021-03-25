<?php
include( '../conn.php' );
if ( isset( $_POST[ 'cart_submit' ] ) ) {
	$product_id = $_POST[ 'product_id' ];
	$customer_id = $_POST[ 'customer_id' ];
	$quantity = $_POST[ 'quantity' ];
	$size = $_POST[ 'size' ];

	
	
	
		header( 'location:../measurement.php?id=' . $product_id );
		exit();
	


} elseif ( isset( $_POST[ 'login' ] ) ) {
	header( 'location:../sign_in.php' );
}



?>
