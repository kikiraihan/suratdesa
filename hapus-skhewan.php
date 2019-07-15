<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_s_ket_hewan'])){

	include ('koneksi.php');
	$id_s_ket_hewan = $_GET['id_s_ket_hewan'];
	$cek    		= mysqli_query($config, "SELECT id_s_ket_hewan FROM tbl_s_ket_hewan WHERE id_s_ket_hewan='$id_s_ket_hewan'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_s_ket_hewan WHERE id_s_ket_hewan='$id_s_ket_hewan'");

	}
}

header('location:tabel-skhewan.php');
}
?>