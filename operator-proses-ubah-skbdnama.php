<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_bd_nama 	    = $_POST['id_bd_nama'];
	$no_surat_bdnama    = $_POST['no_surat_bdnama'];
	$id_pg              = $_POST['id_pg'];
	$NIK				= $_POST['NIK'];
	$ket_bd_nama 	    = $_POST['ket_bd_nama'];
	$ket      		    = $_POST['ket'];

	$update = mysqli_query($config, "UPDATE tbl_bdnama SET id_bd_nama='$id_bd_nama' , no_surat_bdnama='$no_surat_bdnama' , id_pg='$id_pg', NIK='$NIK' , ket_bd_nama='$ket_bd_nama' , ket='$ket' WHERE id_bd_nama='$id_bd_nama'");
    header('location:operator-tabel-skbdnama.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='operator-ubah-skbdnama.php'</script>";
    }
}else{
	header('location:login.php');
}
?>