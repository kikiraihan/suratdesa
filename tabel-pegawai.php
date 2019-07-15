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
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="">
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
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
                                <li class="active"><a href="halaman-utama.php"><i class="menu-icon icon-home"></i>BERANDA
                                </a></li>
                                <li class="active"><a href="profil-pegawai.php"><i class="menu-icon icon-plus"></i>TAMBAH
                                </a></li>
                                <li><a href="logout.php"><i class="menu-icon icon-signout">
                                </i>LOGOUT
                                </a></li>
                            </ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">

						<div class="module">

							<div class="module-head">
								<h3>TABEL DATA PEGAWAI</h3>
							</div>
							<div class="module-body table table-responsive">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
									<thead>
										<tr>
											<th>ID</th>
											<!-- <th>NIP</th> -->
											<th>Nama</th>
											<th>Jenis Kelamin</th>
											<th>Jabatan</th>
											<th>Alamat</th>
											<th>No. Telp / Handphone</th>
											<th><center>AKSI</center></th>
										</tr>
									</thead>
									<tbody>
										<?php

                                            include'koneksi.php';
                                            $query = mysqli_query($config, "SELECT * FROM tbl_pegawai ORDER BY id_pg ASC");

                                                while($data=mysqli_fetch_assoc($query)){

                                                 echo '<tr>';
                                                 echo '<td>'.$data['id_pg'].'</td>';
                                                //  echo '<td>'.$data['nip'].'</td>';
                                                 echo '<td>'.$data['nama'].'</td>';
                                                 echo '<td>'.$data['jk'].'</td>';
                                                 echo '<td>'.$data['jabatan'].'</td>';
                                                 echo '<td>'.$data['alamat_pg'].'</td>';
                                                 echo '<td>'.$data['notelp'].'</td>';
                        						 echo"<td>
                        						 		<center>
                        						 		<a href='cetak-data-pegawai.php?id_pg=$data[id_pg]'>
                        						 			<font face='arial' size='2'>
                        						 				CETAK
                        						 			</font>
                        						 		</a>
                        						 		</center>

                        						 		<center>
                        						 		<a href='ubah-profil-pegawai.php?id_pg=$data[id_pg]'>
                        						 			<font face='arial' size='2' color='green'>
                        						 				UBAH
                        						 			</font>
                        						 		</a>
                        						 		</center>

                        						 		<center>
                        						 		<a href='hapus-pegawai.php?id_pg=$data[id_pg]'>
                        						 			<font face='arial' size='2' color='red'>
                        						 				HAPUS
                        						 			</font>
                        						 		</a>
                        						 		</center>";
                                                 echo '</tr>';


                                                }

                                            ?>


						<!--/.module-->
									</tbody>
									<tfoot>
										<tr>

										</tr>
									</tfoot>
								</table>
								</div>


							</div>
						</div><!--/.module-->
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

	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
</html>
<?php
mysqli_free_result($query);
mysqli_close($config);
}
?>