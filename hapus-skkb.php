<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_skkb'])){

	include ('koneksi.php');
	$id_skkb = $_GET['id_skkb'];
	$cek     = mysqli_query($config, "SELECT id_skkb FROM tbl_skkb WHERE id_skkb='$id_skkb'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_skkb WHERE id_skkb='$id_skkb'");

	}
}

header('location:tabel-skkb.php');
}
?>