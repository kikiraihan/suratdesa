<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_skd 			= $_POST['id_skd'];
	$id_pg              = $_POST['id_pg'];
	$NIK				= $_POST['NIK'];
	$no_surat_skd 		= $_POST['no_surat_skd'];
	$ket 				= $_POST['ket'];

	$update = mysqli_query($config, "UPDATE tbl_skd SET id_skd='$id_skd', id_pg='$id_pg', NIK='$NIK' , no_surat_skd='$no_surat_skd' , ket='$ket' WHERE id_skd='$id_skd'");
    header('location:tabel-skd.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='ubah-skd.php'</script>";
    }
}else{
	header('location:login.php');
}
?>