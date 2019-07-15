<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
	header('location:login.php');
}else{
include 'koneksi.php';
$tambah = mysqli_query($config, "INSERT INTO tbl_s_kelahiran VALUES ( '$_POST[id_s_kelahiran]' , '$_POST[no_surat_kelahiran]' , '$_POST[hari]' , '$_POST[tanggal]' , '$_POST[jk_anak]' , '$_POST[nama_yg_lahir]' , '$_POST[nama_ibu]' , '$_POST[nama_ayah]' , '$_POST[nama]', '$_POST[tempat_lahir]')");

	if($tambah){ 
		header('location:tabel-s-kelahiran.php');
	}else{
		echo "<script>window.alert('Data gagal di simpan...!!!'); window.location.href='s_kelahiran.php'</script>";
	}
}
?>