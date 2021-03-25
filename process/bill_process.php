<?php
ob_start();
require_once '../conn.php';
if ( isset( $_POST[ 'check' ] ) && $_POST[ 'check' ] == 'out' ) {
	$name = $_POST[ 'name' ];
	$email = $_POST[ 'email' ];
	$mob_num = $_POST[ 'mob_num' ];
	$addrs = $_POST[ 'addrs' ];
	$cnic=$_POST['cnic'];
	$cart_id = $_POST[ 'cart_id' ];
	
	$checkout = mysqli_query( $conn, "insert into bills set bill_name='$name', bill_email='$email', 
bill_mobile='$mob_num', bill_address='$addrs',bill_cnic='$cnic'" );
	if ( $checkout ) {
		print $id = mysqli_insert_id( $conn );
	 	$query = "update cart set bill_id='$id', delivery_address='$addrs', cart_status=1 where cart_id='$cart_id' "; 
		$update = mysqli_query( $conn, $query );
		if ( $update ) {
			header( 'location:../order.php?1' );
			exit();
		} else {
			print mysqli_error( $conn );
		}

	} else {
		header( 'location:../cart.php?0' );
		exit();
	}
}

?>