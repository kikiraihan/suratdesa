<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:login.php");
}else{
include 'koneksi.php';
$id_pg		=   $_POST['id_pg'];	
$nama		= 	$_POST['nama'];
$jk			=	$_POST['jk'];
$jabatan 	=   $_POST['jabatan'];
$alamat_pg 	=	$_POST['alamat_pg'];
$notelp 	=	$_POST['notelp'];
$nip 	    =	$_POST['nip'];

$simpan 	= mysqli_query($config, "INSERT INTO tbl_pegawai(id_pg, nama, jk, jabatan, alamat_pg, notelp, nip) 
			VALUES('$id_pg', '$nama', '$jk', '$jabatan' , '$alamat_pg', '$notelp', '$nip')");
	
	if($simpan){
			header('location:tabel-pegawai.php');
	  }else{
		   echo "<script>window.alert('Gagal menyimpan data...!!!'); window.location.href='profil-pegawai.php'</script>";
	}
 
 }
?>