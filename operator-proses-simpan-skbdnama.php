<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
	header('location:login.php');
}else{
include 'koneksi.php';
$ket = $_POST['ket'];
	if(empty($ket)){
		echo "<script>window.alert('Keterangan surat belum di isi !'); window.location.href='operator_skbdnama.php'</script>";
	
	}else{
		$tambah = mysqli_query($config, "INSERT INTO tbl_bdnama VALUES ( '$_POST[id_bd_nama]' , '$_POST[no_surat_bdnama]' , '$_POST[nama]', '$_POST[nama_p]' , '$_POST[ket_bd_nama]' , '$_POST[ket]' )");
		header('location:operator-tabel-skbdnama.php');
		if(!$tambah){
			echo "<script>window.alert('Data gagal di simpan !'); window.location.href='operator_skbdnama.php'</script>";
		}
	}
}
?>