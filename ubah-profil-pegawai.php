<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
include "koneksi.php";
$id_pg    = mysqli_escape_string($config,$_GET['id_pg']);
$query    = mysqli_query($config, " SELECT id_pg, nama, jk, jabatan, alamat_pg, notelp, nip FROM tbl_pegawai WHERE id_pg='$id_pg'");
$a=mysqli_fetch_array($query);
$id_pg  	= $a['id_pg'];
$nama    	= $a['nama'];
$jk  		= $a['jk'];
$jabatan   	= $a['jabatan'];
$alamat_pg  = $a['alamat_pg'];
$notelp     = $a['notelp'];
$nip     = $a['nip'];
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
                                <li class="active"><a href="tabel-pegawai.php"><i class="menu-icon icon-backward"></i>KEMBALI
                                </a></li>
                                 <li><a href="logout.php"><i class="menu-icon icon-signout">
                                </i>LOGOUT 
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
								<h3>UBAH DATA PEGAWAI</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid" method="post" action="proses-ubah-pegawai.php">
										<?php
											while($a=mysqli_fetch_array($query))
										?>

										<div class="control-group">
											<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
												<input type="text" name="id_pg" id="basicinput" class="span8" value="<?php echo $id_pg; ?>" readonly>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">NIP</label>
											<div class="controls">
												<input type="text" name="nip" id="basicinput" class="span8" placeholder="...." autocomplete="off" value="<?php echo $nip; ?>" autofocus="" > 
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama</label>
											<div class="controls">
												<input type="text" name="nama" id="basicinput" class="span8" placeholder="...." autocomplete="off" value="<?php echo $nama; ?>" autofocus="" > 
											</div>
										</div>

										<div class="control-group">
												<label class="control-label" for="basicinput">
												Jenis Kelamin</label>
												<div class="controls">
													<? $jk = $a['jk']; ?>
													<select name="jk" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>
														<option <?php echo ($jk == 'Laki - Laki') ? 'selected': ""?>> Laki - Laki </option>
														<option <?php echo ($jk == 'Perempuan') ? 'selected': ""?>> Perempuan </option>
													</select>
											  </div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Jabatan</label>
											<div class="controls">
												<input type="text" name="jabatan" id="basicinput" class="span8" placeholder="...." autocomplete="off" value="<?php echo $jabatan; ?>" autofocus="" > 
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<textarea name="alamat_pg" class="span8" rows="5"><?php echo $alamat_pg; ?></textarea>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">No. Telp / Handphone</label>
											<div class="controls">
												<input type="text" name="notelp" id="basicinput" class="span8" placeholder="...." autocomplete="off" value="<?php echo $notelp; ?>">
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

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>
<?php
mysqli_free_result($query);
mysqli_close($config);
}
?>