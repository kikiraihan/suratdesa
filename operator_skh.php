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
	<!-- panggil ckeditor.js -->
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<!-- panggil adapter jquery ckeditor -->
	<script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>
	<!-- setup selector -->
	<script type="text/javascript">
    	$('textarea.texteditor').ckeditor();
	</script>
	<script language="javascript">
			function pesan_skh(form_skh)
			{
				if(form_skh.no_surat_skh.value == ""){
					alert("No Surat belum di isi !");
					form_skh.no_surat_skh.focus();
					return (false);
	
				}else if(form_skh.nama.value == "0"){
					alert("Nama belum di pilih !");
					form_skh.nama.focus();
					return (false);
				}

			return(true);
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
                                <li class="active"><a href="halaman-operator.php"><i class="menu-icon icon-home"></i>BERANDA
                                </a></li>
                                <li class="active"><a href="operator-tabel-skh.php"><i class="menu-icon icon-table"></i>TABEL SURAT
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
								<h3>INPUTAN SURAT KETERANGAN HILANG</h3>
							</div>
							<div class="module-body">
									<form name="form_skh" onsubmit="return pesan_skh(this)" class="form-horizontal row-fluid" method="post" action="operator-proses-simpan-skh.php">
									 <?php
										include "koneksi.php";
										$query   = "SELECT max(id_skh) as maxKode FROM tbl_skh";
										$hasil   = mysqli_query($config,$query);
										$data    = mysqli_fetch_array($hasil);
										$idsurat = $data['maxKode'];
										$noUrut  = (int) substr($idsurat, 5, 5);
										$noUrut++;
										$char    = "SKH";
										$idsurat = $char . sprintf("%05s", $noUrut);
										?>

                                      	<div class="control-group">
											<label class="control-label" for="basicinput">
											ID</label>
											<div class="controls">
												<input type="text" name="id_skh" id="basicinput" class="span8" value="<?php echo $idsurat; ?>" readonly>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">
											No Surat</label>
											<div class="controls">
												<input type="text" name="no_surat_skh" id="basicinput" class="span8" placeholder="...." autocomplete="off">
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