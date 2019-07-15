<?php
if(isset($_POST['simpan'])){
	include ('koneksi.php');

	$id_user 	= $_POST['id_user'];
	$username 	= $_POST['username'];
	$nama_user 	= $_POST['nama_user'];
	$hak_akses 	= $_POST['hak_akses'];

	$ubah = mysqli_query($config, "UPDATE tbl_user SET id_user='$id_user', username='$username', nama_user='$nama_user', hak_akses='$hak_akses' WHERE id_user='$id_user'");

header('location:user.php');
if(!$ubah){
      echo "<script>window.alert('Data gagal diubah...!!!'); window.location.href='ubah-user.php'</script>";
    }
}else{
	header('location:login.php');
}
?>