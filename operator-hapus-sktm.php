<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_sktm'])){

	include ('koneksi.php');
	$id_sktm = $_GET['id_sktm'];
	$cek     = mysqli_query($config, "SELECT id_sktm FROM tbl_sktm WHERE id_sktm='$id_sktm'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_sktm WHERE id_sktm='$id_sktm'");

	}
}

header('location:operator-tabel-sktm.php');
}
?>