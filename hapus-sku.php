<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_sku'])){

	include ('koneksi.php');
	$id_sku = $_GET['id_sku'];
	$cek    = mysqli_query($config, "SELECT id_sku FROM tbl_sku WHERE id_sku='$id_sku'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_sku WHERE id_sku='$id_sku'");

	}
}

header('location:tabel-sku.php');
}
?>