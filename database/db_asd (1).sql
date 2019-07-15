-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 05:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bdnama`
--

CREATE TABLE `tbl_bdnama` (
  `id_bd_nama` varchar(30) NOT NULL,
  `no_surat_bdnama` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `ket_bd_nama` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bdnama`
--

INSERT INTO `tbl_bdnama` (`id_bd_nama`, `no_surat_bdnama`, `id_pg`, `NIK`, `ket_bd_nama`, `ket`) VALUES
('SKBDNAMA00001', '03', 'PG00001', '7503061206720001', '1. Di Kartu Keluarga (KK)	        : 	Nama : SYAMSUDIN LIHIMI\r\n2. Di Surat Keterangan Waris	: 	Nama : SAMSUDIN LIHIMI\r\n', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Times New Roman,Times,serif\">Sesungguhnya kedua data tersebut adalah satu orang&nbsp; yaitu<strong>&nbsp; SYAMSUDIN LIHIMI</strong>&nbsp;yang tercantum pada Surat Keterangan Waris.</span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instansi`
--

CREATE TABLE `tbl_instansi` (
  `id_instansi` int(11) NOT NULL,
  `nm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_instansi`
--

INSERT INTO `tbl_instansi` (`id_instansi`, `nm`) VALUES
(1, 'Kantor Desa Bongoime');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kepaladesa`
--

CREATE TABLE `tbl_kepaladesa` (
  `id_kepaladesa` int(1) NOT NULL,
  `id_pg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pg` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat_pg` text NOT NULL,
  `notelp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pg`, `nama`, `jk`, `jabatan`, `alamat_pg`, `notelp`) VALUES
('PG00001', 'AMIN SULEMAN', 'Laki - Laki', 'Kepala Desa', 'Desa Bongoime Kecamatan Tilongkabila  Kabupaten Bone Bolango\r\n', '085242377382'),
('PG00002', 'ELVI RAHMAN', 'Perempuan', 'Kasie Pelayanan', 'Desa bongoime', '081255667788'),
('PG00003', 'EDDY UTINA', 'Laki - Laki', 'Sekretaris', 'Desa bongoime', '085267898765');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `NIK` varchar(30) NOT NULL,
  `nama_p` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `dusun` varchar(100) NOT NULL,
  `kel_desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `s_nikah` varchar(30) DEFAULT NULL,
  `warga_negara` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`NIK`, `nama_p`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `alamat`, `dusun`, `kel_desa`, `kecamatan`, `agama`, `s_nikah`, `warga_negara`, `pekerjaan`) VALUES
('7503060303600002', 'ABD. RAHMAN HUNOWU', 'GORONTALO', '1960-03-03', 'Laki - Laki', 'DESA BGONGOIME KEC. TILONGKABILA KAB. BONEBOLAGO', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Tukang Kayu/Batu'),
('7503060705620002', 'ABD. RADJAK TUNA', 'GORONTALO', '1962-05-07', 'Laki - Laki', 'DESA BONGOIME KEC.TILONGKABILA KAB.BONE BOLANGO\r\n', 'Dusun I', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Buruh Tani'),
('7503060909690001', 'ABDUL KADIR POLAMOLO', 'GORONTALO', '1959-09-09', 'Laki - Laki', 'DESA BONGOIME KEC. TILOGKABILA KAB. BONEBOLANGO', 'Dusun II', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Wiraswasta'),
('7503061205050002', 'RIFKI BAKARI', 'BITUNG', '2005-05-12', 'Laki - Laki', 'DESA BONGOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun I', 'Bongoime', 'Tilongkabila', 'Islam', 'Belum Kawin', 'Indoensia', 'Pelajar/Mahasiswa'),
('7503061206720001', 'SYAMSUDIN LIHIMI', 'GORONTALO', '1972-06-12', 'Laki - Laki', 'DESA BONGOIME KEC. TILONGKABILA KAB. BONE BOLANGO \r\n', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Buruh Tani'),
('7503061609950002', 'ZULFIKAR BAKARI', 'BITUNG', '1995-09-16', 'Laki - Laki', 'DESA BOGOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun I', 'BONGOIME', 'TILONGKABILA', 'Islam', 'Belum Kawin', 'Indonesia', 'Belum/Tidak Bekerja'),
('7503061905660001', 'ABDUL LATIF BAKARI', 'GORONTALO', '1966-05-19', 'Laki - Laki', 'DESA BOGNOIME KEC. TILOGNKABILA KAB. BONEBOLANGO', 'Dusun I', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoneisa', 'Buruh Tani'),
('7503061905850004', 'ABD. WAHAB MUKSIN', 'GORONTALO', '1985-05-19', 'Laki - Laki', 'DESA BONGOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun IV', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indonesia', 'PNS'),
('7503063001520002', 'ABDULBAR ALI', 'GORONTALO', '1952-01-30', 'Laki - Laki', 'DESA BOGNOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Buruh Tani'),
('7503063012090002', 'ABD RAHMAN TAIB', 'KABILA KAB.GORONTALO', '1985-04-10', 'Laki - Laki', 'DESA BONGOIME KEC.TILONGKABILA KAB.BONE BOLANGO\r\n', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Peternak'),
('7503064610990002', 'MIRANDA BAKARI', 'BITUNG', '1999-10-16', 'Perempuan', 'DESA BOGNOIME KEC.TILONGKABILA KAB. BONEBOLANGO', 'Dusun I', 'Bongoime', 'Tilongkabila', 'Islam', 'Belum Kawin', 'Indoensia', 'Pelajar/Mahasiswa'),
('7503064802040001', 'FEBRIANI ANGGRAINI ALI', 'GORONTALO', '2004-02-08', 'Perempuan', 'DESA BONGOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Belum Kawin', 'Indoensia', 'Pelajar/Mahasiswa'),
('7503064812730002', 'NURAIN MANITIK', 'BITUNG', '1973-12-18', 'Perempuan', 'DESA BONGOIME KEC. TILOGNKABILA KAB. BONEBOLANGO', 'Dusun I', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indonesia', 'Mengurus Rumah Tangga'),
('7503064904580002', 'SALMA IGIRISA', 'GORONTALO', '1958-04-09', 'Perempuan', 'DESA BOGNOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun I', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Mengurus Rumah Tangga'),
('7503065010030002', 'OKTAVIAYU ALI', 'GORONTALO', '2003-10-10', 'Perempuan', 'DESA BOGNOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Belum Kawin', 'Indonesia', 'Pelajar/Mahasiswa'),
('7503065011880002', 'NOVAN HALA', 'GORONTALO', '1988-11-10', 'Perempuan', 'DESA BONGOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun IV', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Mengurus Rumah Tangga'),
('7503065508620002', 'SARTIN MAHMUD', 'GORONTALO', '1962-08-15', 'Perempuan', 'DESA BOGNOIME KEC. TILONGKABILA KAB. BONEBOOANGO', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Mengurus Rumah Tangga'),
('7503065710660001', 'SALMA MUHURIDJA', 'GORONTALO', '1966-10-17', 'Perempuan', 'DESA BONGOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Mengurus Rumah Tangga'),
('7503065808630001', 'MARYAM YYUSUF', 'GORONTALO', '1963-12-18', 'Perempuan', 'DESA BONGOIME KEC. TILONGKABILA KAB. BONEBOLANGO', 'Dusun II', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Mengurus Rumah Tangga'),
('7503066904740001', 'SURIYANTI M KARIM', 'GORONTALO', '1974-04-29', 'Perempuan', 'DESA BONGOIME KEC. TILONGKABILA KAB. BONE BOLANGO', 'Dusun III', 'Bongoime', 'Tilongkabila', 'Islam', 'Kawin', 'Indoensia', 'Mengurus Rumah Tangga');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skd`
--

CREATE TABLE `tbl_skd` (
  `id_skd` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `no_surat_skd` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skd`
--

INSERT INTO `tbl_skd` (`id_skd`, `id_pg`, `NIK`, `no_surat_skd`, `ket`) VALUES
('SKD00001', 'PG00001', '7503061206720001', '02', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">Bahwa </span><span style=\"font-size:12.0pt\">yang bersangkutan tersebut benar - benar</span> <span style=\"font-size:12.0pt\">berdomisili&nbsp; di Dusun III (tiga) Desa Bongoime, Kecamatan&nbsp; Tilongkabila, Kabupaten. Bone Bolango.</span></span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skh`
--

CREATE TABLE `tbl_skh` (
  `id_skh` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `no_surat_skh` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skh`
--

INSERT INTO `tbl_skh` (`id_skh`, `id_pg`, `no_surat_skh`, `ket`) VALUES
('SKH00001', 'PG00001', '01', '<p>Menerangkan bahwa.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skkb`
--

CREATE TABLE `tbl_skkb` (
  `id_skkb` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `no_surat_skkb` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skkb`
--

INSERT INTO `tbl_skkb` (`id_skkb`, `id_pg`, `NIK`, `no_surat_skkb`, `ket`) VALUES
('SKKB00001', 'PG00001', '7503061206720001', '02', '<p>Menerangkan kepada yang bersangkutan.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id_sktm` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `no_surat_sktm` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id_sktm`, `id_pg`, `NIK`, `no_surat_sktm`, `ket`) VALUES
('SKTM00002', 'PG00001', '7503061206720001', '01', '<p>Menerangkan bahwa.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sku`
--

CREATE TABLE `tbl_sku` (
  `id_sku` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `no_surat_sku` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sku`
--

INSERT INTO `tbl_sku` (`id_sku`, `id_pg`, `NIK`, `no_surat_sku`, `ket`) VALUES
('SKU00001', 'PG00001', '7503061206720001', '01', '<p>Menerangkan kepada yang bersagkutan.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_s_kelahiran`
--

CREATE TABLE `tbl_s_kelahiran` (
  `id_s_kelahiran` varchar(30) NOT NULL,
  `no_surat_kelahiran` varchar(30) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jk_anak` varchar(25) NOT NULL,
  `nama_yg_lahir` varchar(100) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_s_kelahiran`
--

INSERT INTO `tbl_s_kelahiran` (`id_s_kelahiran`, `no_surat_kelahiran`, `hari`, `tanggal`, `jk_anak`, `nama_yg_lahir`, `nama_ibu`, `nama_ayah`, `id_pg`) VALUES
('SKLAHIR00001', '01', 'Senin', '2018-05-30', 'Perempuan', 'FATIMAH LIHIMI', '7503066904740001', '7503061206720001', 'PG00001'),
('SKLAHIR00002', '09', 'Jumat', '2019-09-29', 'Laki - Laki', 'FIKRAN LIHIMI', '7503066904740001', '7503061206720001', 'PG00001'),
('SKLAHIR00003', '011', 'Jumat', '2019-04-26', 'Perempuan', 'SINDY TAIB', '7503066904740001', '7503063012090002', 'PG00002'),
('SKLAHIR00004', '101', 'Rabu', '2007-01-12', 'Laki - Laki', 'SUPARDI LIHIMI', '7503066904740001', '7503061206720001', 'PG00001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_s_kematian`
--

CREATE TABLE `tbl_s_kematian` (
  `id_s_kematian` varchar(30) NOT NULL,
  `no_surat_skmati` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `meninggal_tanggal` date NOT NULL,
  `umur_meninggal` varchar(30) NOT NULL,
  `tmpt_meninggal` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_s_kematian`
--

INSERT INTO `tbl_s_kematian` (`id_s_kematian`, `no_surat_skmati`, `id_pg`, `NIK`, `meninggal_tanggal`, `umur_meninggal`, `tmpt_meninggal`, `ket`) VALUES
('SKMATI00003', '07', 'PG00001', '7503063012090002', '1990-04-12', '50 Tahun', 'Manado', '<p style=\"margin-left:48px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Bahwa nama tersebut diatas adalah benar-benar masyarakat Desa Bongoime Kecamatan</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Tilongkabila Kabupeten Bone Bolango.&nbsp;&nbsp; </span></span></span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_s_ket_hewan`
--

CREATE TABLE `tbl_s_ket_hewan` (
  `id_s_ket_hewan` varchar(30) NOT NULL,
  `no_surat_skhewan` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  `ciri_ciri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_s_ket_hewan`
--

INSERT INTO `tbl_s_ket_hewan` (`id_s_ket_hewan`, `no_surat_skhewan`, `id_pg`, `NIK`, `ket`, `ciri_ciri`) VALUES
('SKHEWAN00001', '01', 'PG00001', '7503061206720001', '<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Nama tersebut diatas m</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">emiliki</span></span> <span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">1</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"> ekor sapi jantan </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">yang akan dibawa oleh bapak <strong>RAMLI MOSII </strong>dengan mobil pick up<strong> DM 8425 DD </strong></span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Dari Desa Bongoime Kecamatan Tilongkabila Kabupaten Bone Bolango &nbsp;menuju Desa </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Bongo Tua</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"> Kecamatan </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Paguyaman Kab. Boalemo </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">untuk </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">dijual.</span></span></span></span></p>\r\n', '-  Hewan pertama memiliki warna bulu putih tanpa cap.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_s_ket_izin_keramaian`
--

CREATE TABLE `tbl_s_ket_izin_keramaian` (
  `id_s_ket_keramaian` varchar(30) NOT NULL,
  `no_surat_skik` varchar(30) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  `hari` varchar(100) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `hiburan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_s_ket_izin_keramaian`
--

INSERT INTO `tbl_s_ket_izin_keramaian` (`id_s_ket_keramaian`, `no_surat_skik`, `id_pg`, `NIK`, `ket`, `hari`, `tgl`, `waktu`, `tempat`, `hiburan`) VALUES
('SKIK00001', '01', 'PG00001', '7503061206720001', '<p>Menerangkan bahwa yang bersangkutan akan mengadakan <strong>ACARA PERNIKAHAN</strong></p>\r\n', 'Senin', '01 Januari 2019', 'Pukul 20:00 WITA', 'Dusun I', 'Orgen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `hak_akses` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`, `hak_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN PERTAMA (SUPER ADMINISTRATOR)', 'admin'),
(29, 'operator', '4b583376b2767b923c3e1da60d10de59', 'Operator', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bdnama`
--
ALTER TABLE `tbl_bdnama`
  ADD PRIMARY KEY (`id_bd_nama`),
  ADD KEY `id_instansi` (`id_pg`,`NIK`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `tbl_kepaladesa`
--
ALTER TABLE `tbl_kepaladesa`
  ADD PRIMARY KEY (`id_kepaladesa`),
  ADD KEY `id_pg` (`id_pg`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pg`);

--
-- Indexes for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tbl_skd`
--
ALTER TABLE `tbl_skd`
  ADD PRIMARY KEY (`id_skd`),
  ADD KEY `id_instansi` (`id_pg`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `tbl_skh`
--
ALTER TABLE `tbl_skh`
  ADD PRIMARY KEY (`id_skh`),
  ADD KEY `id_pg` (`id_pg`);

--
-- Indexes for table `tbl_skkb`
--
ALTER TABLE `tbl_skkb`
  ADD PRIMARY KEY (`id_skkb`),
  ADD KEY `id_instansi` (`id_pg`,`NIK`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id_sktm`),
  ADD KEY `id_instansi` (`id_pg`,`NIK`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `tbl_sku`
--
ALTER TABLE `tbl_sku`
  ADD PRIMARY KEY (`id_sku`),
  ADD KEY `id_instansi` (`id_pg`,`NIK`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `tbl_s_kelahiran`
--
ALTER TABLE `tbl_s_kelahiran`
  ADD PRIMARY KEY (`id_s_kelahiran`),
  ADD KEY `NIK` (`nama_ayah`,`id_pg`),
  ADD KEY `id_pg` (`id_pg`),
  ADD KEY `nama_ibu` (`nama_ibu`);

--
-- Indexes for table `tbl_s_kematian`
--
ALTER TABLE `tbl_s_kematian`
  ADD PRIMARY KEY (`id_s_kematian`),
  ADD KEY `id_instansi` (`id_pg`,`NIK`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `tbl_s_ket_hewan`
--
ALTER TABLE `tbl_s_ket_hewan`
  ADD PRIMARY KEY (`id_s_ket_hewan`),
  ADD KEY `id_instansi` (`id_pg`,`NIK`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `tbl_s_ket_izin_keramaian`
--
ALTER TABLE `tbl_s_ket_izin_keramaian`
  ADD PRIMARY KEY (`id_s_ket_keramaian`),
  ADD KEY `id_instansi` (`id_pg`,`NIK`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kepaladesa`
--
ALTER TABLE `tbl_kepaladesa`
  MODIFY `id_kepaladesa` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bdnama`
--
ALTER TABLE `tbl_bdnama`
  ADD CONSTRAINT `tbl_bdnama_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_bdnama_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `tbl_penduduk` (`NIK`);

--
-- Constraints for table `tbl_skd`
--
ALTER TABLE `tbl_skd`
  ADD CONSTRAINT `tbl_skd_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_skd_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `tbl_penduduk` (`NIK`);

--
-- Constraints for table `tbl_skh`
--
ALTER TABLE `tbl_skh`
  ADD CONSTRAINT `tbl_skh_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`);

--
-- Constraints for table `tbl_skkb`
--
ALTER TABLE `tbl_skkb`
  ADD CONSTRAINT `tbl_skkb_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_skkb_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `tbl_penduduk` (`NIK`);

--
-- Constraints for table `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD CONSTRAINT `tbl_sktm_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_sktm_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `tbl_penduduk` (`NIK`);

--
-- Constraints for table `tbl_sku`
--
ALTER TABLE `tbl_sku`
  ADD CONSTRAINT `tbl_sku_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_sku_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `tbl_penduduk` (`NIK`);

--
-- Constraints for table `tbl_s_kelahiran`
--
ALTER TABLE `tbl_s_kelahiran`
  ADD CONSTRAINT `tbl_s_kelahiran_ibfk_1` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_s_kelahiran_ibfk_2` FOREIGN KEY (`nama_ibu`) REFERENCES `tbl_penduduk` (`NIK`),
  ADD CONSTRAINT `tbl_s_kelahiran_ibfk_3` FOREIGN KEY (`nama_ayah`) REFERENCES `tbl_penduduk` (`NIK`);

--
-- Constraints for table `tbl_s_kematian`
--
ALTER TABLE `tbl_s_kematian`
  ADD CONSTRAINT `tbl_s_kematian_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_s_kematian_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `tbl_penduduk` (`NIK`);

--
-- Constraints for table `tbl_s_ket_hewan`
--
ALTER TABLE `tbl_s_ket_hewan`
  ADD CONSTRAINT `tbl_s_ket_hewan_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_s_ket_hewan_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `tbl_penduduk` (`NIK`);

--
-- Constraints for table `tbl_s_ket_izin_keramaian`
--
ALTER TABLE `tbl_s_ket_izin_keramaian`
  ADD CONSTRAINT `tbl_s_ket_izin_keramaian_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`),
  ADD CONSTRAINT `tbl_s_ket_izin_keramaian_ibfk_3` FOREIGN KEY (`NIK`) REFERENCES `tbl_penduduk` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
