<?php
include( 'conn.php' );
if ( isset( $_POST[ 'cart_submit' ] ) ) {
	 $product_id = $_POST[ 'product_id' ];
	  $customer_id = $_POST[ 'customer_id' ];
	 $quantity = $_POST[ 'quantity' ];
	  $size = $_POST[ 'size' ];


	$query = "insert into cart set product_id='$product_id', customer_id='$customer_id', cart_quantity='$quantity', cart_size='$size'";
	$excute = mysqli_query( $conn, $query );
	if ( $excute ) {

		$query = mysqli_query($conn, "SELECT * FROM cart WHERE customer_id='$customer_id'");
		echo mysqli_num_rows($query);
		

		
		
	}
 	

} elseif ( isset( $_POST[ 'login' ] ) ) {
	header( 'location:../sign_in.php' );
}



?>