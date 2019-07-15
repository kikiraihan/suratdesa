<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_skh 			= $_POST['id_skh'];
	$id_pg              = $_POST['id_pg'];
	$no_surat_skh 		= $_POST['no_surat_skh'];
	$ket 				= $_POST['ket'];

	$update = mysqli_query($config, "UPDATE tbl_skh SET id_skh='$id_skh', id_pg='$id_pg', no_surat_skh='$no_surat_skh' , ket='$ket' WHERE id_skh='$id_skh'");
    header('location:operator-tabel-skh.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='operator-ubah-skh.php'</script>";
    }
}else{
	header('location:login.php');
}
?>