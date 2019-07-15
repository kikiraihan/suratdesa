<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
	header('location:login.php');
}else{
include 'koneksi.php';
$ket = $_POST['ket'];
	if (empty($ket)) {
		echo "<script>window.alert('Keterangan surat belum di isi !'); window.location.href='skh.php'</script>";
		}else{
			$tambah = mysqli_query($config, "INSERT INTO tbl_skh VALUES ( '$_POST[id_skh]', '$_POST[nama]', '$_POST[no_surat_skh]' ,'$_POST[ket]' )");
			header('location:tabel-skh.php');
			if(!$tambah){
				echo "<script>window.alert('Data gagal di simpan !'); window.location.href='skh.php'</script>";
			}
		}	
	}
?>