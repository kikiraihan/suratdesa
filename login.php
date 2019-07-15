<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<br>
					<center>
							<font style="font-family: arial; font-weight: bold; font-size: 30px;">SELAMAT DATANG DI SISTEM INFORMASI DESA</font>
					</center>
					<ul class="nav pull-right">

						<li><a href="#">
						</a></li>


						<li><a href="#">

						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="post" action="proses-login.php"><br>
						<center><img width="45%" height="45%" src="logodesa/logodesa.png"></center>
						 <?php
                        		include'koneksi.php';
                        		echo "<center><font size='3px'>".'Kantor Desa '.$nama_desa."</font></center>";
                         ?>

						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input name="username" class="span12" type="text" id="inputEmail" placeholder="Username" autocomplete="off" autofocus="">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input name="password" class="span12" type="password" id="inputPassword" autocomplete="off" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<select name="hak_akses" class="span12" id="inputHakAkses">
										<option>-- Login Sebagai --</option>
										<option value="admin">Administrator</option>
										<option value="operator">Operator</option>
									</select>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="log in" class="btn btn-primary pull-right"> LOGIN</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
	<div class="footer">
		<div class="container">
			  <b class="copyright">
                <?php
                include'koneksi.php';
                $query = mysqli_query($config, 'SELECT * FROM tbl_instansi WHERE id_instansi');
                $data=mysqli_fetch_assoc($query);
                ?>
                &copy; <?php echo 'Kantor Desa '.$data['nm'] . " " .date('Y'); ?>
               </b>
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>