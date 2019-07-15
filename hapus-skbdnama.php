<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_bd_nama'])){

	include ('koneksi.php');
	$id_bd_nama     = $_GET['id_bd_nama'];
	$cek    		= mysqli_query($config, "SELECT id_bd_nama FROM tbl_bdnama WHERE id_bd_nama='$id_bd_nama'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_bdnama WHERE id_bd_nama='$id_bd_nama'");

	}
}

header('location:tabel-skbdnama.php');
}
?>