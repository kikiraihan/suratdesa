<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
if(isset($_GET['id_user'])){

	include ('koneksi.php');
	$id_user     = $_GET['id_user'];
	$cek    	 = mysqli_query($config, "SELECT id_user FROM tbl_user WHERE id_user='$id_user'");;

	if(mysqli_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{

		echo $del = mysqli_query($config, "DELETE FROM tbl_user WHERE id_user='$id_user'");

	}
  }
}
header('location:user.php');
?>