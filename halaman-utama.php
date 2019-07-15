<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="halaman-utama.php">
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
                            <li class="nav-user dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li>
                                <a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-envelope">
                                </i>
                                <i class="icon-chevron-down pull-right"></i>
                                <i class="icon-chevron-up pull-right">
                                </i> SURAT </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="skh.php"><i class="icon-envelope"></i> SKET HILANG </a></li>
                                        <li><a href="skd.php"><i class="icon-envelope"></i> SKET DOMISILI </a></li>
                                        <li><a href="sktm.php"><i class="icon-envelope"></i> SKET TIDAK MAMPU </a></li>
                                        <li><a href="sku.php"><i class="icon-envelope"></i> SKET USAHA </a></li>
                                        <li><a href="skkb.php"><i class="icon-envelope"></i> SKET KELAKUAN BAIK </a></li>
                                        <li><a href="s_kelahiran.php"><i class="icon-envelope"></i> SKET KELAHIRAN </a></li>
                                        <li><a href="s_kematian.php"><i class="icon-envelope"></i> SKET KEMATIAN </a></li>
                                        <li><a href="skbdnama.php"><i class="icon-envelope"></i> SKET BEDA NAMA </a></li>
                                        <li><a href="skhewan.php"><i class="icon-envelope"></i> SKET HEWAN </a></li>
                                        <li><a href="skik.php"><i class="icon-envelope"></i> SKET IZIN KERAMAIAN </a></li>
                                    </ul>
                                    
                                    <li><a href="profil-pegawai.php"><i class="menu-icon icon-user"></i> PEGAWAI </a></li>
                                    <li><a href="penduduk.php"><i class="menu-icon icon-user"></i> PENDUDUK </a></li>
                                    <li><a href="logout.php"><i class="menu-icon icon-signout"></i> LOGOUT </a></li>
                                </li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="tabel-pegawai.php" class="btn-box small span4"><i class="icon-group"></i>
                                                    <b>
                                                        Jumlah Pegawai
                                                        <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_pegawai";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query); 
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font'; ?>
                                                </a>

                                                <a href="tabel-penduduk.php" class="btn-box small span4"><i class="icon-group"></i>
                                                    <b>
                                                        Jumlah Penduduk
                                                        <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_penduduk";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font'; ?>
                                                </a>
                                                                             
                                                 <a href="user.php" class="btn-box small span4"><i class="icon-group"></i>
                                                    <b>
                                                        Jumlah User
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_user";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>
                                            </div>
                                        </div>



                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="tabel-skh.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Hilang
                                                        <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_skh";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query); 
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font'; ?>
                                                </a>

                                                <a href="tabel-skd.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Domisli
                                                        <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_skd";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font'; ?>
                                                </a>
                                                                             

                                                 <a href="tabel-sktm.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Tidak Mampu
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_sktm";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>
                                            </div>
                                        </div>

                                         <div class="row-fluid">
                                            <div class="span12">
                                                <a href="tabel-sku.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Usaha
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_sku";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>

                                                <a href="tabel-skkb.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Kelakuan Baik
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_skkb";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>
                                                                 
                                                 <a href="tabel-s-kelahiran.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Kelahiran
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_s_kelahiran";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>
                                                
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                 <a href="tabel-s-kematian.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Kematian
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_s_kematian";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>

                                                 <a href="tabel-skbdnama.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Beda Nama
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_bdnama";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>

                                                  <a href="tabel-skhewan.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Hewan
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_s_ket_hewan";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>
                                                
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">

                                                <a href="tabel-skik.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Izin Keramaian
                                                         <?php
                                                            include 'koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_s_ket_izin_keramaian";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>
                                            </div>
                                        </div>

                                        </div>
                                </div>
                               
                                   
                            <!--/#btn-controls-->

                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
           
        </div>
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
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
</head>
</html>
<?php 
mysqli_free_result($query);
mysqli_close($config);
}
?>