-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 08:08 AM
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
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pg` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pg`, `nama`, `jk`, `jabatan`, `alamat`, `notelp`) VALUES
('PG00001', 'AMIN SULEMAN', 'Pria', 'Kepala Desa Bongoime', 'Desa Bongoime Kec. Tilongkabila Kab. Bone Bolango', '085213121415'),
('PG00002', 'RIZKA LAHMUDA', 'Pria', 'Kasie Pelayanan', 'Desa Bongoime Kec. Tilongkabila Kab. Bone Bolango', '085213121090');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `t_lahir` varchar(4) NOT NULL,
  `bln_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `j_kel` varchar(20) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `s_nikah` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`no_ktp`, `nama`, `agama`, `tmpt_lahir`, `t_lahir`, `bln_lahir`, `tgl_lahir`, `j_kel`, `pekerjaan`, `s_nikah`) VALUES
('777327654485248', 'RIVALDY SAPUTRA AGUS', 'Islam', 'INDONESIA', '1999', 'April', '28', 'pria', 'BELUM ADA', 'Belum Nikah'),
('7770974352986', 'RIVALDO DWIPUTRA AGUS', 'Islam', 'GORONTALO', '2006', 'Maret', '29', 'pria', 'BELUM ADA', 'Belum Nikah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skd`
--

CREATE TABLE `tbl_skd` (
  `id_skd` varchar(30) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `nama_warga` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skd`
--

INSERT INTO `tbl_skd` (`id_skd`, `id_instansi`, `id_pg`, `nama_warga`, `ttl`, `jk`, `pekerjaan`, `status`, `agama`, `alamat`, `ket`) VALUES
('SKD00001', 1, 'PG00002', 'Rivaldy Saputra Agus', 'Gorontalo, 28 April 1999', 'Pria', 'BELUM ADA', 'Nikah', 'Islam', 'Jln. Samudra Pasai Kel. Tamalate', 'Bahwa yang bersangkutan tersebut benar - benar berdomisili  di Dusun III (tiga) Desa Bongoime, Kecamatan  Tilongkabila, Kabupaten. Bone Bolango.'),
('SKD00002', 1, 'PG00001', 'Rivaldo Dwiputra Agus', 'Gorontalo, 29, Maret 2006', 'Pria', 'Siswa', 'Belum Nikah', 'Islam', 'Jln. Samudra Pasai Kel. Tamalate', 'Bahwa yang bersangkutan tersebut benar - benar berdomisili  di Dusun III (tiga) Desa Bongoime, Kecamatan  Tilongkabila, Kabupaten. Bone Bolango.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skh`
--

CREATE TABLE `tbl_skh` (
  `id_skh` varchar(30) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_pg` varchar(30) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skh`
--

INSERT INTO `tbl_skh` (`id_skh`, `id_instansi`, `id_pg`, `ket`) VALUES
('SKH00001', 1, 'PG00001', 'Menerangkan bahwa KARTU TANDA PENDUDUK ( KTP ) dengan NIK 7503062805690001, SURAT IZIN MENGEMUDI ( SIM ), dan SURAT TANDA NOMOR KENDERAAN (STNK) atas nama LETFIN HABIBIE telah hilang ( tercecer ).'),
('SKH00002', 1, 'PG00001', 'Menerangkan bahwa Kartu Badan Penyelengara Jaminan Sosial (BPJS Kesehatan) a/n FATRIAWATI LUKMAN dengan No.BPJS Kesehatan 0001380273671 telah hilang  (tercecer).'),
('SKH00003', 1, 'PG00002', 'Menerangkan bahwa Kartu AS Telkomsel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminpertama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_instansi`
--
ALTER TABLE `tbl_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pg`);

--
-- Indexes for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `tbl_skd`
--
ALTER TABLE `tbl_skd`
  ADD PRIMARY KEY (`id_skd`),
  ADD KEY `id_instansi` (`id_instansi`,`id_pg`),
  ADD KEY `id_pg` (`id_pg`);

--
-- Indexes for table `tbl_skh`
--
ALTER TABLE `tbl_skh`
  ADD PRIMARY KEY (`id_skh`),
  ADD KEY `id_pg` (`id_pg`),
  ADD KEY `id_instansi` (`id_instansi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_skd`
--
ALTER TABLE `tbl_skd`
  ADD CONSTRAINT `tbl_skd_ibfk_1` FOREIGN KEY (`id_instansi`) REFERENCES `tbl_instansi` (`id_instansi`),
  ADD CONSTRAINT `tbl_skd_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`);

--
-- Constraints for table `tbl_skh`
--
ALTER TABLE `tbl_skh`
  ADD CONSTRAINT `tbl_skh_ibfk_1` FOREIGN KEY (`id_instansi`) REFERENCES `tbl_instansi` (`id_instansi`),
  ADD CONSTRAINT `tbl_skh_ibfk_2` FOREIGN KEY (`id_pg`) REFERENCES `tbl_pegawai` (`id_pg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
