<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
?>
<?php
include "koneksi.php";
$id_s_ket_keramaian   = $_GET['id_s_ket_keramaian'];
$query   		   	  = mysqli_query($config, " SELECT * FROM  tbl_s_ket_izin_keramaian where id_s_ket_keramaian='$id_s_ket_keramaian'");
$a=mysqli_fetch_array($query);
$id_s_ket_keramaian   = $a['id_s_ket_keramaian'];
$no_surat_skik        = $a['no_surat_skik'];
$ket    			  = $a['ket'];
$hari                 = $a['hari'];
$tgl                  = $a['tgl'];
$waktu                = $a['waktu'];
$tempat       		  = $a['tempat'];
$hiburan      		  = $a['hiburan'];
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
                                <li class="active"><a href="operator-tabel-skik.php"><i class="menu-icon icon-backward"></i>KEMBALI
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
								<h3>UBAH SURAT KETERANGAN IZIN KERAMAIAN</h3>
							</div>
							<div class="module-body">
									<form class="form-horizontal row-fluid" method="post" action="operator-proses-ubah-skik.php">
										<?php
											while($a=mysqli_fetch_array($query))
										?>

										<div class="control-group">
											<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
												<input type="text" name="id_s_ket_keramaian" id="basicinput" class="span8" value="<?php echo $id_s_ket_keramaian; ?>" readonly>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">No Surat</label>
											<div class="controls">
												<input type="text" name="no_surat_skik" id="basicinput" class="span8" value="<?php echo $no_surat_skik; ?>">
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
										<label class="control-label" for="basicinput">Nama</label>
											<div class="controls">
												<select name="NIK" tabindex="1" class="chosen" >
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
											<label class="control-label" for="basicinput">Keterangan Surat</label>
											<div class="controls">
												<textarea name="ket" class="texteditor"><?php echo $ket; ?></textarea>
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
												<input type="date" name="tgl" id="basicinput" placeholder="...." class="span8" value="<?php echo $tgl; ?>" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Waktu</label>
											<div class="controls">
												<input type="text" name="waktu" id="basicinput" placeholder="...." class="span8" value="<?php echo $waktu; ?>" >
											</div>
										</div>

										<div class="control-group">
												<label class="control-label" for="basicinput">
												Tempat</label>
												<div class="controls">
													<? $tempat = $a['tempat']; ?>
													<select name="tempat" tabindex="1" data-placeholder="Select here.." class="span8">
														<option value="">--- Pilih ---</option>
														<option <?php echo ($tempat == 'Dusun I Desa Pilohayanga') ? 'selected': ""?>> Dusun I Desa Pilohayanga</option>
														<option <?php echo ($tempat == 'Dusun II Desa Pilohayanga') ? 'selected': ""?>> Dusun II Desa Pilohayanga</option>
														<option <?php echo ($tempat == 'Dusun III Desa Pilohayanga') ? 'selected': ""?>> Dusun III Desa Pilohayanga</option>
													</select>
											  </div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Hiburan</label>
											<div class="controls">
												<input type="text" name="hiburan" id="basicinput" placeholder="...." class="span8" value="<?php echo $hiburan; ?>" >
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
	<script type="text/javascript">
		$(".chosen").chosen();
	</script>
	   <!-- panggil jquery -->
    <script type="text/javascript" src="jquery/jquery-3.1.1.min.js"></script>
    <!-- panggil ckeditor.js -->
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <!-- panggil adapter jquery ckeditor -->
    <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>
    <!-- setup selector -->
    <script type="text/javascript">
        $('textarea.texteditor').ckeditor();
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