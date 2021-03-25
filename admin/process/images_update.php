<?php
require_once 'conn.php';
if ( isset( $_POST[ 'pro' ] ) && $_POST[ 'pro' ] == 'uptd' ) {
	$p_name = $_POST[ 'p_name' ];
	$photo = $_FILES[ 'photo' ][ 'name' ];
	$type = $_FILES[ 'photo' ][ 'type' ];
	$size = $_FILES[ 'photo' ][ 'size' ];
	$temp = $_FILES[ 'photo' ][ 'tmp_name' ];
	
	if ( $type == "image/png" || $type == "image/jpg" || $type == "image/jpeg" || $type == "image/gif" ) {
		if ( $size <= 50000000 ) {
		$query = "update product_images set images='$photo', product_id='$p_name'";
			$excute = mysqli_query( $conn, $query );
			if ( $excute ) {
				$upload = move_uploaded_file( $temp, "../uploads/" . $photo );
				if ( $upload ) {
					header( 'location:../products_images.php?1' );
					exit();
				} else {
					header( 'location:../products_images.php?0' );
					exit();
				}
			}
		} else {
			echo 'error in size';
		}


		echo 'img type correct';
	} else {

		echo mysqli_error( $conn );


		echo 'error in type';
	}
}



?>