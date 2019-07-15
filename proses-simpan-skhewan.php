<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
	header('location:login.php');
}else{
include 'koneksi.php';
$ket = $_POST['ket'];
	if(empty($ket)){
		echo "<script>window.alert('Keterangan surat belum di isi !'); window.location.href='skhewan.php'</script>";
	}else{
		$tambah = mysqli_query($config, "INSERT INTO tbl_s_ket_hewan VALUES ( '$_POST[id_s_ket_hewan]' , '$_POST[no_surat_skhewan]' , '$_POST[nama]', '$_POST[nama_p]' , '$_POST[ket]' , '$_POST[ciri_ciri]' )");
		header('location:tabel-skhewan.php');
		if(!$tambah){
			echo "<script>window.alert('Data gagal di simpan !'); window.location.href='skhewan.php'</script>";
		}
	}
}
?>