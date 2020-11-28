<?php 
include 'koneksi.php';
	$delete = mysqli_query($conn, "Delete From tbl_image_blog where id='".$_GET['id']."'");
	if ($delete) {
		header('location:index.php');
	}else{
		echo 'Gagal Delete';
	}
 ?>
