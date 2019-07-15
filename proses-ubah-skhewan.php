<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_s_ket_hewan 	= $_POST['id_s_ket_hewan'];
	$no_surat_skhewan   = $_POST['no_surat_skhewan'];
	$id_pg              = $_POST['id_pg'];
	$NIK				= $_POST['NIK'];
	$ket 				= $_POST['ket'];
	$ciri_ciri 		    = $_POST['ciri_ciri'];

	$update = mysqli_query($config, "UPDATE tbl_s_ket_hewan SET id_s_ket_hewan='$id_s_ket_hewan' , no_surat_skhewan='$no_surat_skhewan' , id_pg='$id_pg', NIK='$NIK' , ket='$ket' , ciri_ciri='$ciri_ciri' WHERE id_s_ket_hewan='$id_s_ket_hewan'");
    header('location:tabel-skhewan.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='ubah-skhewan.php'</script>";
    }
}else{
	header('location:login.php');
}
?>