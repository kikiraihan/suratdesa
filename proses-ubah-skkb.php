<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_skkb 			= $_POST['id_skkb'];
	$id_pg              = $_POST['id_pg'];
	$NIK				= $_POST['NIK'];
	$no_surat_skkb      = $_POST['no_surat_skkb'];
	$ket 				= $_POST['ket'];

	$update = mysqli_query($config, "UPDATE tbl_skkb SET id_skkb='$id_skkb', id_pg='$id_pg', NIK='$NIK' , no_surat_skkb='$no_surat_skkb' , ket='$ket' WHERE id_skkb='$id_skkb'");
    header('location:tabel-skkb.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='ubah-skkb.php'</script>";
    }
}else{
	header('location:login.php');
}
?>