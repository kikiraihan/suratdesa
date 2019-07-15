<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
?>
<?php
include "koneksi.php";
$id_s_kelahiran   	= $_GET['id_s_kelahiran'];
$query   		  	= mysqli_query($config, " SELECT * FROM  tbl_s_kelahiran where id_s_kelahiran='$id_s_kelahiran'");
$a=mysqli_fetch_array($query);
$id_s_kelahiran  	= $a['id_s_kelahiran'];
$no_surat_kelahiran = $a['no_surat_kelahiran'];
$hari				= $a['hari'];
$tanggal			= $a['tanggal'];
$jk_anak			= $a['jk_anak'];
$nama_yg_lahir	    = $a['nama_yg_lahir'];
$tempat_lahir		= $a['tempat_lahir'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistem Informasi Surat Menyurat</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<!-- chosen -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
</head>
<body>

	 <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="">
                         <img width="35" height="35" src="logodesa/logodesa.png">
                        <?php
                        include'koneksi.php';
                        $query = mysqli_query($config, "SELECT * FROM tbl_instansi WHERE id_instansi");
                        $data=mysqli_fetch_assoc($query);
                        ?>

                        Sistem Informasi Surat Menyurat <?php echo 'Kantor Desa '.$data['nm']; ?>
                        </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Pengaturan
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                       <?php
                                       include'koneksi.php';
                                       $query = mysqli_query($config, "SELECT * FROM tbl_instansi WHERE id_instansi");
                                       $data=mysqli_fetch_assoc($query);
                                       echo "<a href='ubah-profil-instansi.php?id_instansi=$data[id_instansi]'>Profil Instansi</a>";
                                       ?>
                               		</li>
                               		<li><a href="user.php">User</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					 <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="tabel-s-kelahiran.php"><i class="menu-icon icon-backward"></i>Kembali
                                </a></li>
                                 <li><a href="logout.php"><i class="menu-icon icon-signout">
                                </i>Keluar 
                                </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->	
					<!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>UBAH SURAT KELAHIRAN</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid" method="post" action="proses-ubah-s-kelahiran.php">
										<?php
											while($a=mysqli_fetch_array($query))
										?>

										<div class="control-group">
											<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
												<input type="text" name="id_s_kelahiran" id="basicinput" class="span8" value="<?php echo $id_s_kelahiran; ?>" readonly>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">No Surat</label>
											<div class="controls">
												<input type="text" name="no_surat_kelahiran" id="basicinput" class="span8" value="<?php echo $no_surat_kelahiran; ?>">
											</div>
										</div>

										<div class="control-group">
												<label class="control-label" for="basicinput">
												Hari</label>
												<div class="controls">
													<? $hari = $a['hari']; ?>
													<select name="hari" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>
														<option <?php echo ($hari == 'Senin') ? 'selected': ""?>> Senin </option>
														<option <?php echo ($hari == 'Selasa') ? 'selected': ""?>> Selasa </option>
														<option <?php echo ($hari == 'Rabu') ? 'selected': ""?>> Rabu </option>
														<option <?php echo ($hari == 'Kamis') ? 'selected': ""?>> Kamis </option>
														<option <?php echo ($hari == 'Jumat') ? 'selected': ""?>> Jumat </option>
														<option <?php echo ($hari == 'Sabtu') ? 'selected': ""?>> Sabtu </option>
														<option <?php echo ($hari == 'Minggu') ? 'selected': ""?>> Minggu </option>
													</select>
											  </div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal</label>
											<div class="controls">
												<input type="date" name="tanggal" id="basicinput" class="span8" value="<?php echo $tanggal; ?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tempat Lahir</label>
											<div class="controls">
												<input type="text" name="tempat_lahir" id="basicinput" class="span8" autocomplete="off" value="<?php echo $tempat_lahir; ?>">
											</div>
										</div>

										<div class="control-group">
												<label class="control-label" for="basicinput">
												Jenis Kelamin</label>
												<div class="controls">
													<? $jk_anak = $a['jk_anak']; ?>
													<select name="jk_anak" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>
														<option <?php echo ($jk_anak == 'Laki - Laki') ? 'selected': ""?>> Laki - Laki </option>
														<option <?php echo ($jk_anak == 'Perempuan') ? 'selected': ""?>> Perempuan </option>
													</select>
											  </div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama</label>
											<div class="controls">
												<input type="text" name="nama_yg_lahir" id="basicinput" class="span8" value="<?php echo $nama_yg_lahir; ?>">
											</div>
										</div>

										<div class="control-group">
										<label class="control-label" for="basicinput">Nama Ayah</label>
											<div class="controls">
												<select name="nama_ayah" tabindex="1" class="chosen" >
													<option>--- Pilih ---</option>
												<?php
													include 'koneksi.php';
													$sql    = "SELECT * FROM tbl_penduduk";
													$result = mysqli_query($config, $sql);
													while ($hasil = mysqli_fetch_array($result)) {
													 	echo '<option value="'.$hasil['NIK'].'">'.$hasil['nama_p'].' </option>';
													 } 
													 	
													 ?>
												</select>
											</div>
										</div>

										<div class="control-group">
										<label class="control-label" for="basicinput">Nama Ibu</label>
											<div class="controls">
												<select name="nama_ibu" tabindex="1" class="chosen" >
													<option>--- Pilih ---</option>
												<?php
													include 'koneksi.php';
													$sql    = "SELECT * FROM tbl_penduduk";
													$result = mysqli_query($config, $sql);
													while ($hasil = mysqli_fetch_array($result)) {
													 	echo '<option value="'.$hasil['NIK'].'">'.$hasil['nama_p'].' </option>';
													 } 
													 	
													 ?>
												</select>
											</div>
										</div>							

										<div class="control-group">
										<label class="control-label" for="basicinput">Yang Bertanda Tangan</label>
											<div class="controls">
												<select name="id_pg" tabindex="1" class="span8">
												<option>--- Pilih ---</option>
												<?php
													include 'koneksi.php';
													$sql    = "SELECT * FROM tbl_pegawai";
													$result = mysqli_query($config, $sql);
													while ($hasil = mysqli_fetch_array($result)) {
													 	echo '<option value="'.$hasil['id_pg'].'">'.$hasil['jabatan'].' </option>';
													 } 
												?>
												</select>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button name="simpan" type="submit" class="btn">SIMPAN</button>
											</div>
										</div>
										
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 <b class="copyright">
                <?php
                include'koneksi.php';
                $query = mysqli_query($config, "SELECT * FROM tbl_instansi WHERE id_instansi");
                $data=mysqli_fetch_assoc($query);
                ?>
                &copy; <?php echo 'Kantor Desa '.$data['nm'] . " " .date('Y'); ?> 
            </b>
		</div>
	</div>
	<script type="text/javascript">
		$(".chosen").chosen();
	</script>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>
<?php
}
?>