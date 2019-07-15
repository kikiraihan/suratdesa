<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_s_ket_keramaian'])){

	include ('koneksi.php');
	$id_s_ket_keramaian = $_GET['id_s_ket_keramaian'];
	$cek    			= mysqli_query($config, "SELECT id_s_ket_keramaian FROM tbl_s_ket_izin_keramaian WHERE id_s_ket_keramaian='$id_s_ket_keramaian'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_s_ket_izin_keramaian WHERE id_s_ket_keramaian='$id_s_ket_keramaian'");

	}
}

header('location:tabel-skik.php');
}
?>