<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_skd'])){

	include ('koneksi.php');
	$id_skd = $_GET['id_skd'];
	$cek    = mysqli_query($config, "SELECT id_skd FROM tbl_skd WHERE id_skd='$id_skd'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_skd WHERE id_skd='$id_skd'");

	}
}

header('location:tabel-skd.php');
}
?>