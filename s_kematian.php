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
	<!-- chosen -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

	<script type="text/javascript">
		function pesan_s_kematian(form_s_kematian)
		{
			if(form_s_kematian.no_surat_skmati.value == "")
			{
				alert("No surat belum di isi !");
				form_s_kematian.no_surat_skmati.focus();
				return (false);
			
			}else if(form_s_kematian.nama.value == "0")
			{
				alert("Yang bertanda tangan belum di pilih !");
				form_s_kematian.nama.focus();
				return (false);
			
			}else if(form_s_kematian.nama_p.value == "0")
			{
				alert("Nama belum di pilih !");
				form_s_kematian.nama_p.focus();
				return (false);
			
			}else if(form_s_kematian.meninggal_tanggal.value == "")
			{
				alert("Tanggal meninggal belum di isi !");
				form_s_kematian.meninggal_tanggal.focus();
				return (false);
			
			}else if(form_s_kematian.umur_meninggal.value == "")
			{
				alert("Umur belum di isi !");
				form_s_kematian.umur_meninggal.focus();
				return (false);
			
			}else if(form_s_kematian.tmpt_meninggal.value =="")
			{
				alert("Tempat meninggal belum di isi !");
				form_s_kematian.tmpt_meninggal.focus();
				return (false);
			}

			return (true);
		}
	</script>

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
                                <li class="active"><a href="tabel-s-kematian.php"><i class="menu-icon icon-table"></i>TABEL SURAT
                                </a></li>
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>LOGOUT 
                                </a></li>
                                </ul>
                            </ul>
                        </div>
                        <!--/.sidebar-->	
					<!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>INPUTAN SURAT KEMATIAN</h3>
							</div>
							<div class="module-body">
									<form name="form_s_kematian" onsubmit="return pesan_s_kematian(this)" class="form-horizontal row-fluid" method="post" action="proses-simpan-s-kematian.php">	
									 <?php
										include "koneksi.php";
										$query   = "SELECT max(id_s_kematian) as maxKode FROM tbl_s_kematian";
										$hasil   = mysqli_query($config,$query);
										$data    = mysqli_fetch_array($hasil);
										$idsurat = $data['maxKode'];
										$noUrut  = (int) substr($idsurat, 6, 6);
										$noUrut++;
										$char    = "SKMATI";
										$idsurat = $char . sprintf("%05s", $noUrut);
										?>

                                      	<div class="control-group">
											<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
												<input type="text" name="id_s_kematian" id="basicinput" class="span8" value="<?php echo $idsurat; ?>" readonly>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">No Surat</label>
											<div class="controls">
												<input type="text" name="no_surat_skmati" id="basicinput" class="span8" placeholder="...." autocomplete="off">
											</div>
										</div>

										<div class="control-group">
										<label class="control-label" for="basicinput">Yang Bertanda Tangan</label>
											<div class="controls">
												<select name="nama" tabindex="1" class="span8">
												<option value="0">--- Pilih ---</option>
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
												<select name="nama_p" tabindex="1" class="chosen" >
													<option value="0">--- Pilih ---</option>
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
											<label class="control-label" for="basicinput">Tanggal Meninggal</label>
											<div class="controls">
												<input type="date" name="meninggal_tanggal" id="basicinput" placeholder="...." autocomplete="off" class="span8" >
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Umur</label>
											<div class="controls">
												<input type="text" name="umur_meninggal" id="basicinput" placeholder="...." autocomplete="off" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tempat Meninggal</label>
											<div class="controls">
												<input type="text" name="tmpt_meninggal" id="basicinput" placeholder="...." autocomplete="off" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Keterangan Surat</label>
											<div class="controls">
												<textarea name="ket" class="texteditor"></textarea>
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
mysqli_free_result($query);
mysqli_close($config); 
}
?>