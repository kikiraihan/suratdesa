<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:login.php");
}else{
include 'koneksi.php';
$id_user		=   $_POST['id_user'];	
$username		= 	$_POST['username'];
$password		=	md5($_POST['password']);
$nama_user 		=   $_POST['nama_user'];
$hak_akses 		=	$_POST['hak_akses'];

$simpan 	= mysqli_query($config, "INSERT INTO tbl_user(id_user, username, password, nama_user, hak_akses) 
			VALUES('', '$username', '$password', '$nama_user', '$hak_akses')");
	
	if($simpan){
			header('location:user.php');
	  }else{
		   echo "<script>window.alert('Gagal menyimpan data...!!!'); window.location.href='tambah-user.php'</script>";
	}
 
 }
?>