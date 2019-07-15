<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
	header('location:login.php');
}else{
include 'koneksi.php';
$ket  = $_POST['ket'];
	if(empty($ket)){
		echo "<script>window.alert('Keterangan surat belum di isi !'); window.location.href='operator_s_kematian.php'</script>";
	}else{
		$tambah = mysqli_query($config, "INSERT INTO tbl_s_kematian VALUES ( '$_POST[id_s_kematian]', '$_POST[no_surat_skmati]', '$_POST[nama]', '$_POST[nama_p]' , '$_POST[meninggal_tanggal]', '$_POST[umur_meninggal]', '$_POST[tmpt_meninggal]','$_POST[ket]' )");
		header('location:operator-tabel-s-kematian.php');
		if(!$tambah){
			echo "<script>window.alert('Data gagal di simpan !'); window.location.href='operator_s_kematian.php'</script>";
		}
	}
}
?>