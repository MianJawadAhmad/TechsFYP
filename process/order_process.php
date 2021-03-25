<?php
ob_start();
session_start();

require_once '../conn.php';
if ( isset( $_POST[ 'qty' ] )) {
	$name = $_SESSION[ 'customer_name' ];
	$email = $_SESSION[ 'customer_email' ];
	$mob_num = $_SESSION[ 'customer_phone' ];
	$addrs = $_SESSION[ 'customer_address' ];
	$cnic=$_SESSION['customer_cnic'];
	$qty = $_POST[ 'qty' ];
	$size = $_POST[ 'size' ];
	$id = $_POST[ 'id' ];

	 $checkout = mysqli_query( $conn, "insert into bills set bill_name='$name', bill_email='$email', 
bill_mobile='$mob_num', bill_address='$addrs',bill_cnic='$cnic',cart_quantity='$qty',cart_size='$size',product_id='$id'" );




  		$query11 = mysqli_query($conn, "SELECT * from  bills WHERE 															              bill_email='" . $_SESSION[ 'customer_email' ] . "'");
		     
		  $number_of_orders = mysqli_num_rows($query11); 
		  

	if ( $checkout ) {

		echo $number_of_orders;	

	} else {
		header( 'location:../order.php?0' );
		exit();
	}
}

?>