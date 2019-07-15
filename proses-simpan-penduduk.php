<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:login.php");
}else{
include 'koneksi.php';
$NIK				=   $_POST['NIK'];	
$nama_p				= 	$_POST['nama_p'];
$tempat_lahir		=	$_POST['tempat_lahir'];
$tgl_lahir          =   $_POST['tgl_lahir'];
$jenkel 			=   $_POST['jenkel'];
$alamat 			=	$_POST['alamat'];
$dusun 				=	$_POST['dusun'];
$kel_desa 			=	$_POST['kel_desa'];
$kecamatan 			=	$_POST['kecamatan'];
$agama 				=	$_POST['agama'];
$s_nikah 			=	$_POST['s_nikah'];
$warga_negara 		=   $_POST['warga_negara'];
$pekerjaan 			=	$_POST['pekerjaan'];

$simpan 	= mysqli_query($config, "INSERT INTO tbl_penduduk(NIK, nama_p, tempat_lahir, tgl_lahir, jenkel, alamat, dusun, kel_desa, kecamatan, agama, s_nikah, warga_negara, pekerjaan) 
			VALUES('$NIK', '$nama_p', '$tempat_lahir', '$tgl_lahir' , '$jenkel', '$alamat', '$dusun', '$kel_desa', '$kecamatan', '$agama', '$s_nikah', '$warga_negara' , '$pekerjaan')");
	
	if($simpan){
			header('location:tabel-penduduk.php');
	  }else{
		   echo "<script>window.alert('Gagal menyimpan data...!!!'); window.location.href='penduduk.php'</script>";
	}
 
 }
?>