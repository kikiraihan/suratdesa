<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_s_kematian'])){

	include ('koneksi.php');
	$id_s_kematian  = $_GET['id_s_kematian'];
	$cek    		= mysqli_query($config, "SELECT id_s_kematian FROM tbl_s_kematian WHERE id_s_kematian='$id_s_kematian'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_s_kematian WHERE id_s_kematian='$id_s_kematian'");

	}
}

header('location:tabel-s-kematian.php');
}
?>