<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_skh'])){

	include ('koneksi.php');
	$id_skh = $_GET['id_skh'];
	$cek    = mysqli_query($config, "SELECT id_skh FROM tbl_skh WHERE id_skh='$id_skh'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script language="javascript">
					alert("Data Kosong");
			  </script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_skh WHERE id_skh='$id_skh'");

	}
  }
}
header('location:tabel-skh.php');
?>