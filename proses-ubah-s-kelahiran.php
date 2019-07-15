<?php
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$id_s_kelahiran  	= $_POST['id_s_kelahiran'];
	$no_surat_kelahiran = $_POST['no_surat_kelahiran'];
	$hari				= $_POST['hari'];
	$tanggal			= $_POST['tanggal'];
	$jk_anak			= $_POST['jk_anak'];
	$nama_yg_lahir	    = $_POST['nama_yg_lahir'];
	$nama_ayah			= $_POST['nama_ayah'];
	$nama_ibu			= $_POST['nama_ibu'];
	$id_pg              = $_POST['id_pg'];

	$update = mysqli_query($config, "UPDATE tbl_s_kelahiran SET id_s_kelahiran='$id_s_kelahiran' , no_surat_kelahiran='$no_surat_kelahiran' , hari='$hari', tanggal='$tanggal', jk_anak='$jk_anak', nama_yg_lahir='$nama_yg_lahir', nama_ibu='$nama_ibu' , nama_ayah='$nama_ayah', id_pg='$id_pg' WHERE id_s_kelahiran='$id_s_kelahiran'");
    header('location:tabel-s-kelahiran.php');
    if(!$update){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='ubah-s-kelahiran.php'</script>";
    }
}else{
	header('location:login.php');
}
?>