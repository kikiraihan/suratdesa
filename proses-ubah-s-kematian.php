<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_s_kematian 			= $_POST['id_s_kematian'];
	$no_surat_skmati        = $_POST['no_surat_skmati'];
	$id_pg              	= $_POST['id_pg'];
	$NIK					= $_POST['NIK'];
	$meninggal_tanggal      = $_POST['meninggal_tanggal'];
	$umur_meninggal         = $_POST['umur_meninggal'];
	$tmpt_meninggal         = $_POST['tmpt_meninggal'];
	$ket 					= $_POST['ket'];

	$update = mysqli_query($config, "UPDATE tbl_s_kematian SET id_s_kematian='$id_s_kematian' , no_surat_skmati='$no_surat_skmati' , id_pg='$id_pg', NIK='$NIK' , meninggal_tanggal='$meninggal_tanggal' , umur_meninggal='$umur_meninggal' , tmpt_meninggal='$tmpt_meninggal' , ket='$ket' WHERE id_s_kematian='$id_s_kematian'");
    header('location:tabel-s-kematian.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='ubah-s-kematian.php'</script>";
    }
}else{
	header('location:login.php');
}
?>