<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_s_ket_keramaian 	= $_POST['id_s_ket_keramaian'];
	$no_surat_skik          = $_POST['no_surat_skik'];
	$id_pg              	= $_POST['id_pg'];
	$NIK					= $_POST['NIK'];
	$ket      				= $_POST['ket'];
	$hari               	= $_POST['hari'];
	$tgl                    = $_POST['tgl'];
	$waktu                  = $_POST['waktu'];
	$tempat         		= $_POST['tempat'];
	$hiburan 				= $_POST['hiburan'];

	$update = mysqli_query($config, "UPDATE tbl_s_ket_izin_keramaian SET id_s_ket_keramaian='$id_s_ket_keramaian' , no_surat_skik='$no_surat_skik' , id_pg='$id_pg', NIK='$NIK' , ket='$ket' , hari='$hari' , tgl='$tgl' , waktu='$waktu' , tempat='$tempat' , hiburan='$hiburan' WHERE id_s_ket_keramaian='$id_s_ket_keramaian'");
    header('location:operator-tabel-skik.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='operator-ubah-skik.php'</script>";
    }
}else{
	header('location:login.php');
}
?>