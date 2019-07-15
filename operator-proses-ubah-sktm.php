<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_sktm 			= $_POST['id_sktm'];
	$id_pg              = $_POST['id_pg'];
	$NIK				= $_POST['NIK'];
	$no_surat_sktm      = $_POST['no_surat_sktm'];
	$ket 				= $_POST['ket'];

	$update = mysqli_query($config, "UPDATE tbl_sktm SET id_sktm='$id_sktm', id_pg='$id_pg', NIK='$NIK' , no_surat_sktm='$no_surat_sktm' , ket='$ket' WHERE id_sktm='$id_sktm'");
    header('location:operator-tabel-sktm.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='operator-ubah-sktm.php'</script>";
    }
}else{
	header('location:login.php');
}
?>