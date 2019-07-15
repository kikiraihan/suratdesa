<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
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
	<script type="text/javascript" src="pesan/pesan_penduduk.js"></script>
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
                                <li class="active"><a href="halaman-utama.php"><i class="menu-icon icon-home"></i>BERANDA
                                </a></li>
                                <li class="active"><a href="tabel-penduduk.php"><i class="menu-icon icon-table"></i>TABEL PENDUDUK
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
								<h3>INPUTAN DATA PENDUDUK</h3>
							</div>
							<div class="module-body">
									<form name="form_penduduk" onsubmit="return validasi_input_penduduk(this)" class="form-horizontal row-fluid" method="post" action="proses-simpan-penduduk.php">
										<div class="control-group">
											<label class="control-label" for="basicinput">NIK</label>
											<div class="controls">
												<input type="text" name="NIK" id="basicinput" placeholder="...." autocomplete="off" autofocus="" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama</label>
											<div class="controls">
												<input type="text" name="nama_p" id="basicinput" placeholder="...." autocomplete="off" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tempat Lahir</label>
											<div class="controls">
												<input type="text" name="tempat_lahir" id="basicinput" placeholder="...." autocomplete="off" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal Lahir</label>
											<div class="controls">
												<input type="date" name="tgl_lahir" id="basicinput" placeholder="...." autocomplete="off" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Jenis Kelamin</label>
											<div class="controls">
												<select name="jenkel" tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="0">--- Pilih ---</option>
													<option value="Laki - Laki">Laki - Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<textarea name="alamat" class="span8" rows="5"></textarea>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Dusun</label>
											<div class="controls">
												<select name="dusun" tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="0">--- Pilih ---</option>
													<option value="Dusun I">Dusun I</option>
													<option value="Dusun II">Dusun II</option>
													<option value="Dusun III">Dusun III</option>
													<option value="Dusun IV">Dusun IV</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Desa</label>
											<div class="controls">
												<input type="text" name="kel_desa" id="basicinput" placeholder="...." autocomplete="off" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Kecamatan</label>
											<div class="controls">
												<input type="text" name="kecamatan" id="basicinput" placeholder="...." autocomplete="off" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Agama</label>
											<div class="controls">
												<select name="agama" tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="0">--- Pilih ---</option>
													<option value="Islam">Islam</option>
													<option value="Kristen Katolik">Kristen Katolik</option>
													<option value="Kristen Protestan">Kristen Protestan</option>
													<option value="Hindu">Hindu</option>
													<option value="Budha">Budha</option>
													<option value="Kong Hu Cu">Kong Hu Cu</option>
													<option value="Lainya">Lainya</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Status Perkawinan</label>
											<div class="controls">
												<select name="s_nikah" tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="0">--- Pilih ---</option>
													<option value="Belum Kawin">Belum Kawin</option>
													<option value="Kawin">Kawin</option>
													<option value="Cerai Hidup">Cerai Hidup</option>
													<option value="Cerai Mati">Cerai Mati</option>
													<option value="Lainya">Lainya</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Warga Negara</label>
											<div class="controls">
												<input type="text" name="warga_negara" id="basicinput" placeholder="...." autocomplete="off" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Pekerjaan</label>
											<div class="controls">
												<select name="pekerjaan" tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="0">--- Pilih ---</option>
													<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
													<option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
													<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
													<option value="Pensiunan">Pensiunan</option>
													<option value="PNS">PNS</option>
													<option value="TNI">TNI</option>
													<option value="POLRI">POLRI</option>
													<option value="Pedagang">Pedagang</option>
													<option value="Karyawan Swasta">Karyawan Swasta</option>
													<option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
													<option value="Wiraswasta">Wiraswasta</option>
													<option value="Buruh Tani">Buruh Tani</option>
													<option value="Nelayan">Nelayan</option>
													<option value="Peternak">Peternak</option>
													<option value="Satpam/Security">Satpam/Security</option>
													<option value="Tukang Kayu/Batu">Tukang Kayu/Batu</option>
													<option value="Lainya">Lainya</option>
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