<?php
session_start();
if(empty($_SESSION['username'] AND $_SESSION['hak_akses'])){
header("location:../index.php");
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
                        <a class="brand" href="index.html">
                        <?php
                        include'../koneksi.php';
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
                                    <li><a href="../logout.php"><i class="menu-icon icon-signout"></i>Keluar </a></li>
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
                                                <a href="member-tabel-pegawai.php" class="btn-box small span4"><i class="icon-group"></i>
                                                    <b>
                                                        Jumlah Pegawai
                                                        <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_pegawai";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query); 
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font'; ?>
                                                </a>

                                                <a href="member-tabel-penduduk.php" class="btn-box small span4"><i class="icon-group"></i>
                                                    <b>
                                                        Jumlah Penduduk
                                                        <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_penduduk";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font'; ?>
                                                </a>
                                                                             
                                                 <a href="member-tabel-user.php" class="btn-box small span4"><i class="icon-group"></i>
                                                    <b>
                                                        Jumlah User
                                                         <?php
                                                            include '../koneksi.php'; 
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
                                                <a href="member-tabel-skh.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Hilang
                                                        <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_skh";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query); 
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font'; ?>
                                                </a>

                                                <a href="member-tabel-skd.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Domisli
                                                        <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_skd";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font'; ?>
                                                </a>
                                                                             

                                                 <a href="member-tabel-sktm.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Tidak Mampu
                                                         <?php
                                                            include '../koneksi.php'; 
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
                                                <a href="member-tabel-sku.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Usaha
                                                         <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_sku";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>

                                                <a href="member-tabel-skkb.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Kelakuan Baik
                                                         <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_skkb";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>
                                                                 
                                                 <a href="member-tabel-s-kelahiran.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Kelahiran
                                                         <?php
                                                            include '../koneksi.php'; 
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
                                                 <a href="member-tabel-s-kematian.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Kematian
                                                         <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_s_kematian";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>

                                                 <a href="member-tabel-skbdnama.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Beda Nama
                                                         <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_bdnama";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>
                                                
                                                 <a href="member-tabel-s-ket.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan
                                                         <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_s_ket";
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
                                               <a href="member-tabel-skhewan.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Hewan
                                                         <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_s_ket_hewan";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>

                                                <a href="member-tabel-skik.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Izin Keramaian
                                                         <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_s_ket_izin_keramaian";
                                                            $query = mysqli_query($config, $sqlCommand) or die (mysqli_error());
                                                            $row = mysqli_fetch_row($query);
                                                         ?>
                                                    </b>
                                                    <?php echo '<font size="4">' .$row[0]. '</font>'; ?>
                                                </a>

                                                <a href="member-tabel-skb.php" class="btn-box small span4"><i class="icon-envelope"></i>
                                                    <b>
                                                        Jumlah Surat Keterangan Bepergian
                                                         <?php
                                                            include '../koneksi.php'; 
                                                            $sqlCommand = "SELECT COUNT(*) FROM tbl_bepergian";
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
                include'../koneksi.php';
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