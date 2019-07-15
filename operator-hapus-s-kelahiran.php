<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_s_kelahiran'])){

	include ('koneksi.php');
	$id_s_kelahiran = $_GET['id_s_kelahiran'];
	$cek   			= mysqli_query($config, "SELECT id_s_kelahiran FROM tbl_s_kelahiran WHERE id_s_kelahiran='$id_s_kelahiran'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_s_kelahiran WHERE id_s_kelahiran='$id_s_kelahiran'");

	}
}

header('location:tabel-s-kelahiran.php');
}
?>