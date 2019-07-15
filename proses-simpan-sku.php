<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
	header('location:login.php');
}else{
include 'koneksi.php';
$ket = $_POST['ket'];
	if(empty($ket)){
		echo "<script>window.alert('Keterangan surat belum di isi !'); window.location.href='sku.php'</script>";
	
		}else{
			$tambah = mysqli_query($config, "INSERT INTO tbl_sku VALUES ( '$_POST[id_sku]', '$_POST[nama]', '$_POST[nama_p]' , '$_POST[no_surat_sku]' , '$_POST[ket]' )");
			header('location:tabel-sku.php');
			if(!$tambah){
				echo "<script>window.alert('Data gagal di simpan !'); window.location.href='sku.php'</script>";
			}

		}

	}
?>