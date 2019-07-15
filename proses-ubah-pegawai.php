<?php
if(isset($_POST['simpan'])){
	include ('koneksi.php');

	$id_pg 		= $_POST['id_pg'];
	$nama 		= $_POST['nama'];
	$jk 		= $_POST['jk'];
	$jabatan 	= $_POST['jabatan'];
	$alamat_pg 	= $_POST['alamat_pg'];
	$notelp 	= $_POST['notelp'];
	$nip 	= $_POST['nip'];

	$ubah = mysqli_query($config, "UPDATE tbl_pegawai SET id_pg='$id_pg', nama='$nama', jk='$jk', jabatan='$jabatan', alamat_pg='$alamat_pg', notelp='$notelp', nip='$nip' WHERE id_pg='$id_pg'");

header('location:tabel-pegawai.php');
if(!$ubah){
    		echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='ubah-profil-pegawai.php'</script>";
    }
}else{
	header('location:login.php');
}
?>