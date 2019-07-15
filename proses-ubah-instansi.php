<?php
if(isset($_POST['simpan'])){

include ('koneksi.php');

$id_instansi 	= $_POST['id_instansi'];
$nm 			= $_POST['nm'];

$ubah = mysqli_query($config, "UPDATE tbl_instansi SET id_instansi='$id_instansi', nm='$nm' WHERE id_instansi='$id_instansi'");

header('location:halaman-utama.php');
}else{
	header('location:login.php');
}
?>