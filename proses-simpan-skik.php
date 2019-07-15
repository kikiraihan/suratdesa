<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
	header('location:login.php');
}else{
include 'koneksi.php';
$ket = $_POST['ket'];
	if(empty($ket)){
		echo "<script>window.alert('Keterangan surat belum di isi !'); window.location.href='skik.php'</script>";
	}else{
		$tambah = mysqli_query($config, "INSERT INTO tbl_s_ket_izin_keramaian VALUES ( '$_POST[id_s_ket_keramaian]' , '$_POST[no_surat_skik]' , '$_POST[nama]', '$_POST[nama_p]' , '$_POST[ket]' , '$_POST[hari]' , '$_POST[tgl]' , '$_POST[waktu]' , '$_POST[tempat]' , '$_POST[hiburan]')"); 
		header('location:tabel-skik.php');
		if(!$tambah){
			echo "<script>window.alert('Data gagal di simpan !'); window.location.href='skik.php'</script>";
		}
	}
}
?>