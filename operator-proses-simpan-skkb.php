<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
	header('location:login.php');
}else{
include 'koneksi.php';
$ket = $_POST['ket'];
	if(empty($ket)){
		echo "<script>window.alert('Keterangan surat belum di isi !'); window.location.href='operator_skkb.php'</script>";
	}else{
		$tambah = mysqli_query($config, "INSERT INTO tbl_skkb VALUES ( '$_POST[id_skkb]', '$_POST[nama]', '$_POST[nama_p]' ,  '$_POST[no_surat_skkb]' , '$_POST[ket]' )");
		header('location:operator-tabel-skkb.php');
		if(!$tambah){
			echo "<script>window.alert('Data gagal di simpan !'); window.location.href='operator_skkb.php'</script>";
		}
	}
}
?>