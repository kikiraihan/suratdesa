<?php
if(isset($_POST['simpan'])){
	include ('koneksi.php');

	$NIK 				= $_POST['NIK'];
	$nama_p 			= $_POST['nama_p'];
	$tempat_lahir 	    = $_POST['tempat_lahir'];
	$tgl_lahir          = $_POST['tgl_lahir'];
	$jenkel 			= $_POST['jenkel'];
	$alamat 			= $_POST['alamat'];
	$dusun				= $_POST['dusun'];
	$kel_desa 			= $_POST['kel_desa'];
	$kecamatan 			= $_POST['kecamatan'];
	$agama 				= $_POST['agama'];
	$s_nikah 			= $_POST['s_nikah'];
	$warga_negara       = $_POST['warga_negara'];
	$pekerjaan 			= $_POST['pekerjaan'];

	$ubah = mysqli_query($config, "UPDATE tbl_penduduk SET NIK='$NIK', nama_p='$nama_p', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir' , jenkel='$jenkel', alamat='$alamat', dusun='$dusun', kel_desa='$kel_desa', kecamatan='$kecamatan', agama='$agama', s_nikah='$s_nikah', warga_negara='$warga_negara' , pekerjaan='$pekerjaan' WHERE NIK='$NIK'");

header('location:tabel-penduduk.php');
if(!$ubah){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='ubah-penduduk.php'</script>";
    }
}else{
	header('location:login.php');
}
?>