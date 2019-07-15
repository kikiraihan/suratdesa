<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['NIK'])){

	include ('koneksi.php');
	$NIK    = $_GET['NIK'];
	$cek    = mysqli_query($config, "SELECT NIK FROM tbl_penduduk WHERE NIK='$NIK'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_penduduk WHERE NIK='$NIK'");

	}
  }
}
header('location:tabel-penduduk.php');
?>