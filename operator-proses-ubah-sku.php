<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_sku 			= $_POST['id_sku'];
	$id_pg              = $_POST['id_pg'];
	$NIK				= $_POST['NIK'];
	$no_surat_sku       = $_POST['no_surat_sku'];
	$ket 				= $_POST['ket'];

	$update = mysqli_query($config, "UPDATE tbl_sku SET id_sku='$id_sku', id_pg='$id_pg', NIK='$NIK' , no_surat_sku='$no_surat_sku' , ket='$ket' WHERE id_sku='$id_sku'");
    header('location:operator-tabel-sku.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='operator-ubah-sku.php'</script>";
    }
}else{
	header('location:login.php');
}
?>