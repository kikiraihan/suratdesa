<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
include "koneksi.php";
$NIK      = mysqli_escape_string($config,$_GET['NIK']);
$query    = mysqli_query($config, " SELECT NIK, nama_p, tempat_lahir, tgl_lahir, jenkel, alamat, dusun, kel_desa, kecamatan, agama, s_nikah, warga_negara, pekerjaan FROM tbl_penduduk WHERE NIK='$NIK'");
$a=mysqli_fetch_array($query);
$NIK  				= $a['NIK'];
$nama_p    			= $a['nama_p'];
$tempat_lahir       = $a['tempat_lahir'];
$tgl_lahir 			= $a['tgl_lahir'];
$jenkel   			= $a['jenkel'];
$alamat  			= $a['alamat'];
$dusun     			= $a['dusun'];
$kel_desa     		= $a['kel_desa'];
$kecamatan     		= $a['kecamatan'];
$agama     			= $a['agama'];
$s_nikah     		= $a['s_nikah'];
$warga_negara       = $a['warga_negara'];
$pekerjaan     		= $a['pekerjaan'];
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
                                <li class="active"><a href="tabel-penduduk.php"><i class="menu-icon icon-backward"></i>KEMBALI
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
								<h3>UBAH DATA PENDUDUK</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid" method="post" action="proses-ubah-penduduk.php">
										<?php
											while($a=mysqli_fetch_array($query))
										?>

										<div class="control-group">
											<label class="control-label" for="basicinput">NIK</label>
											<div class="controls">
												<input type="text" name="NIK" id="basicinput" class="span8" value="<?php echo $NIK; ?>" readonly>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama</label>
											<div class="controls">
												<input type="text" name="nama_p" id="basicinput" class="span8" placeholder="...." autocomplete="off" value="<?php echo $nama_p; ?>" autofocus="" > 
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tempat Lahir</label>
											<div class="controls">
												<input type="text" name="tempat_lahir" id="basicinput" class="span8" placeholder="...." autocomplete="off" value="<?php echo $tempat_lahir; ?>" autofocus="" > 
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal Lahir</label>
											<div class="controls">
												<input type="date" name="tgl_lahir" id="basicinput" placeholder="...." autocomplete="off" class="span8" value="<?php echo $tgl_lahir; ?>"> 
											</div>
										</div>

										<div class="control-group">
												<label class="control-label" for="basicinput">
												Jenis Kelamin</label>
												<div class="controls">
													<? $jenkel = $a['jenkel']; ?>
													<select name="jenkel" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>
														<option <?php echo ($jenkel == 'Laki - Laki') ? 'selected': ""?>> Laki - Laki </option>
														<option <?php echo ($jenkel == 'Perempuan') ? 'selected': ""?>> Perempuan </option>
													</select>
											  </div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<textarea name="alamat" class="span8" rows="5"><?php echo $alamat; ?></textarea>
											</div>
										</div>

										<div class="control-group">
												<label class="control-label" for="basicinput">
												Dusun</label>
												<div class="controls">
													<? $dusun = $a['dusun']; ?>
													<select name="dusun" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>
														<option <?php echo ($dusun == 'Dusun I') ? 'selected': ""?>> Dusun I </option>
														<option <?php echo ($dusun == 'Dusun II') ? 'selected': ""?>> Dusun II </option>
														<option <?php echo ($dusun == 'Dusun III') ? 'selected': ""?>> Dusun III </option>
														<option <?php echo ($dusun == 'Dusun IV') ? 'selected': ""?>> Dusun IV </option>
													</select>
											  </div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Desa</label>
											<div class="controls">
												<input type="text" name="kel_desa" id="basicinput" class="span8" autocomplete="off" value="<?php echo $kel_desa; ?>">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Kecamatan</label>
											<div class="controls">
												<input type="text" name="kecamatan" id="basicinput" class="span8" autocomplete="off" value="<?php echo $kecamatan; ?>">
											</div>
										</div>

										<div class="control-group">
												<label class="control-label" for="basicinput">
												Agama</label>
												<div class="controls">
													<?php $agama = $a['agama'];?>
													<select name="agama" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>
														<option <?php echo ($agama == 'Islam') ? 'selected': ""?>> Islam 
														</option>
														
														<option <?php echo ($agama == 'Kristen Katolik') ? 'selected': ""?>> Kristen Katolik 
														</option>

														<option <?php echo ($agama == 'Kristen Protestan') ? 'selected': ""?>> Kristen Protestan 
														</option>

														<option <?php echo ($agama == 'Hindu') ? 'selected': ""?>> Hindu 
														</option>

														<option <?php echo ($agama == 'Budha') ? 'selected': ""?>> Budha 
														</option>

														<option <?php echo ($agama == 'Kong Hu Cu') ? 'selected': ""?>> Kong Hu Cu 
														</option>

														<option <?php echo ($agama == 'Lainya') ? 'selected': ""?>> Lainya 
														</option>
													</select>
											  </div>
										</div>

											<div class="control-group">
												<label class="control-label" for="basicinput">
												Status Perkawinan</label>
												<div class="controls">
													<?php $s_nikah = $a['s_nikah'];?>
													<select name="s_nikah" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>
														<option <?php echo ($s_nikah == 'Belum Kawin') ? 'selected': ""?>> Belum Kawin 
														</option>
														
														<option <?php echo ($s_nikah == 'Kawin') ? 'selected': ""?>> Kawin 
														</option>

														<option <?php echo ($s_nikah == 'Cerai Hidup') ? 'selected': ""?>> Cerai Hidup 
														</option>

														<option <?php echo ($s_nikah == 'Cerai Mati') ? 'selected': ""?>> Cerai Mati 
														</option>

														<option <?php echo ($s_nikah == 'Lainya') ? 'selected': ""?>> Lainya 
														</option>
													</select>
											  </div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Warga Negara</label>
											<div class="controls">
												<input type="text" name="warga_negara" id="basicinput" class="span8" autocomplete="off" value="<?php echo $warga_negara; ?>">
											</div>
										</div>

										<div class="control-group">
												<label class="control-label" for="basicinput">
												Pekerjaan</label>
												<div class="controls">
													<?php $pekerjaan = $a['pekerjaan'];?>
													<select name="pekerjaan" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>

														<option <?php echo ($pekerjaan == 'Belum/Tidak Bekerja') ? 'selected': ""?>> Belum/Tidak Bekerja 
														</option>
														
														<option <?php echo ($pekerjaan == 'Mengurus Rumah Tangga') ? 'selected': ""?>> Mengurus Rumah Tangga 
														</option>

														<option <?php echo ($pekerjaan == 'Pelajar/Mahasiswa') ? 'selected': ""?>> Pelajar/Mahasiswa 
														</option>

														<option <?php echo ($pekerjaan == 'Pensiunan') ? 'selected': ""?>> Pensiunan 
														</option>

														<option <?php echo ($pekerjaan == 'PNS') ? 'selected': ""?>> PNS 
														</option>

														<option <?php echo ($pekerjaan == 'TNI') ? 'selected': ""?>> TNI 
														</option>

														<option <?php echo ($pekerjaan == 'POLRI') ? 'selected': ""?>> POLRI 
														</option>

														<option <?php echo ($pekerjaan == 'Pedagang') ? 'selected': ""?>> Pedagang 
														</option>

														<option <?php echo ($pekerjaan == 'Karyawan Swasta') ? 'selected': ""?>> Karyawan Swasta 
														</option>

														<option <?php echo ($pekerjaan == 'Buruh Harian Lepas') ? 'selected': ""?>> Buruh Harian Lepas 
														</option>

														<option <?php echo ($pekerjaan == 'Wiraswasta') ? 'selected': ""?>> Wiraswasta 
														</option>

														<option <?php echo ($pekerjaan == 'Buruh Tani') ? 'selected': ""?>> Buruh Tani 
														</option>

														<option <?php echo ($pekerjaan == 'Nelayan') ? 'selected': ""?>> Nelayan 
														</option>

														<option <?php echo ($pekerjaan == 'Peternak') ? 'selected': ""?>> Peternak 
														</option>

														<option <?php echo ($pekerjaan == 'Satpam/Security') ? 'selected': ""?>> Satpam/Security 
														</option>

														<option <?php echo ($pekerjaan == 'Tukang Kayu/Batu') ? 'selected': ""?>> Tukang Kayu/Batu
														</option>

														<option <?php echo ($pekerjaan == 'Lainya') ? 'selected': ""?>> Lainya 
														</option>
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