<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_pg'])){

	include ('koneksi.php');
	$id_pg  = $_GET['id_pg'];
	$cek    = mysqli_query($config, "SELECT id_pg FROM tbl_pegawai WHERE id_pg='$id_pg'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_pegawai WHERE id_pg='$id_pg'");

	}
  }
}
header('location:tabel-pegawai.php');
?>