-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 03:28 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(1, 'admin', 'admin', 'admin Sekolah', 1),
(2, 'user', 'user', 'user sekolah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukutamu`
--

CREATE TABLE `tb_bukutamu` (
  `id_buku` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`id_buku`, `nama`, `alamat`, `email`, `pesan`) VALUES
(3, 'anto', 'sewon', 'admin@admin.com', 'hallo tamu saya'),
(4, 'bagus', 'jogja', 'bagus@admin', 'pesan dari bagus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `kd_barang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `nama_inventaris` varchar(100) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `dibeli_oleh` varchar(50) NOT NULL,
  `nilai_pembelian` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `nilai_saat_ini` int(11) NOT NULL,
  `kondisi` varchar(30) NOT NULL,
  `pict` varchar(50) DEFAULT NULL,
  `ket` varchar(50) NOT NULL,
  `register` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `bahan` varchar(20) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id_inventaris`, `kd_barang`, `id_kategori`, `id_ruang`, `asal`, `nama_inventaris`, `tgl_pembelian`, `dibeli_oleh`, `nilai_pembelian`, `merk`, `nilai_saat_ini`, `kondisi`, `pict`, `ket`, `register`, `jumlah`, `bahan`, `satuan`) VALUES
(39, 'FK_001', 125, 4, 'Yayasan', '', '2018-02-01', 'Luciana', 2000000, 'Brother', 0, 'Baik', NULL, '', '001 - 002', 2, 'Besi', 'Buah'),
(40, 'MJG_001', 25, 21, 'Yayasan', '', '2018-02-02', 'Ariani', 10000000, 'Lokal', 0, 'Baik', NULL, '', '001 - 008', 8, 'Jati', 'Buah'),
(41, 'KRSG_001', 26, 21, 'Yayasan', '', '2018-02-02', 'Ariani', 3600000, 'Lokal', 0, 'Baik', NULL, '', '001 - 008', 8, 'Jati', 'Buah'),
(42, 'MJM_001', 27, 16, 'Yayasan', '', '2018-02-03', 'Kasih', 12500000, 'Lokal', 0, 'Baik', NULL, '', '001 - 050', 50, 'Jati', 'Buah'),
(43, 'KRSM_001', 28, 16, 'Yayasan', '', '2018-02-03', 'Ariani', 7500000, 'Lokal', 0, 'Baik', NULL, '', '001 - 050', 50, 'Jati', 'Buah'),
(44, 'KRSL_001', 29, 10, 'Yayasan', '', '2018-02-04', 'Kasih', 1225000, 'Chitose', 0, 'Baik', NULL, '', '001 - 050', 50, 'Besi', 'Buah'),
(45, 'WB_001', 30, 11, 'Yayasan', '', '2018-02-05', 'Luciana', 1000000, 'Lokal', 0, 'Baik', NULL, '', '001 - 002', 2, 'Melamin', 'Buah'),
(46, 'KGS_001', 31, 6, 'APBN', '', '2018-02-06', 'Kasih', 275000, 'Rinnai', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Buah'),
(47, 'TG_001', 126, 6, 'APBN', '', '2018-02-06', 'Kasih', 240000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Buah'),
(48, 'RG_001', 32, 6, 'APBN', '', '2018-02-06', 'Kasih', 75000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Buah'),
(49, 'SLG_001', 33, 6, 'APBN', '', '2018-02-06', 'Kasih', 45000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Alumunium', 'Buah'),
(50, 'RB_001', 34, 23, 'APBN', '', '2018-02-07', 'Ariani', 750000, 'Lokal', 0, 'Baik', NULL, '', '001 - 010', 10, 'Besi', 'Buah'),
(51, 'GML_001', 35, 13, 'Dana', '', '2018-02-08', 'Ariani', 22050000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Kuningan', 'Set'),
(52, 'DRM_001', 36, 13, 'Dana', '', '2018-02-07', 'Luciana', 4200000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Alumunium', 'Set'),
(53, 'PL_001', 37, 3, 'Dana', '', '2018-02-08', 'Kasih', 11528400, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Gipsum', 'Set'),
(54, 'KMP_002', 38, 5, 'Yayasan', '', '2018-02-09', 'Ariani', 3000000, 'Samsung', 0, 'Baik', NULL, '', '', 1, '', 'Set'),
(55, 'JMB_001', 39, 7, 'Yayasan', '', '2018-02-02', 'Kasih', 118000, 'Sahara', 0, 'Baik', NULL, 'Volume 10 liter', '', 1, 'Plastik', 'Buah'),
(56, 'KMP_003', 38, 11, 'Bos', '', '2018-02-09', 'Luciana', 4348500, 'Dell', 0, 'Baik', NULL, '', '', 1, '', 'Set'),
(57, 'TA_001', 40, 20, 'Bos', '', '2018-02-10', 'Ariani', 440000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Alumunium', 'Buah'),
(58, 'CB_001', 41, 8, 'Bos', '', '2018-02-07', 'Kasih', 4500000, 'Lokal', 0, 'Baik', NULL, '', '001 - 010', 10, 'Besi', 'Buah'),
(59, 'MJK_001', 42, 19, 'Bos', '', '2018-02-05', 'Ariani', 1680000, 'Lokal', 0, 'Baik', NULL, '', '001 - 003', 3, 'Jati', 'Buah'),
(60, 'EL_001', 43, 7, 'Bos', '', '2018-02-09', 'Kasih', 2200000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Kaca', 'Buah'),
(61, 'PT_003', 44, 9, 'Bos', '', '2018-02-16', 'Luciana', 700000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Jati', 'Buah'),
(62, 'LP_001', 45, 19, 'Bos', '', '2018-02-20', 'Luciana', 34425000, 'Axio', 0, 'Baik', NULL, '', '001 - 007', 7, '', 'Buah'),
(63, 'TV_001', 46, 3, 'Bos', '', '2018-02-09', 'Luciana', 2000000, 'Thosiba', 0, 'Baik', NULL, '', '', 1, '', 'Buah'),
(64, 'KMP_004', 38, 17, 'Bos', '', '2018-02-20', 'Ariani', 3000000, 'Lenovo', 0, 'Baik', NULL, '', '', 1, '', 'Set'),
(65, 'KMP_005', 38, 22, 'Bos', '', '2018-02-12', 'Luciana', 5000000, 'Thosiba', 0, 'Baik', NULL, '', '', 1, '', 'Buah'),
(66, 'MT_001', 47, 3, 'Bos', '', '2018-02-15', 'Ariani', 2500000, 'Lokal', 0, 'Baik', NULL, '', '', 1, '', 'Set'),
(67, 'TRS_001', 48, 1, 'Bos', '', '2018-02-06', 'Luciana', 6000000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Set'),
(68, 'SKAT_001', 49, 10, 'Bos', '', '2018-02-12', 'Luciana', 2000000, 'Lokal', 0, 'Baik', NULL, '', '', 1, '', 'Set'),
(69, 'TJ_001', 50, 2, 'Bos', '', '2018-02-21', 'Kasih', 500000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Alumunium', 'Buah'),
(70, 'LD_001', 51, 15, 'Bos', '', '2018-02-20', 'Kasih', 3250000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Jati', 'Buah'),
(71, 'PD_001', 52, 23, 'Bos', '', '2018-02-08', 'Kasih', 1500000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Melamin', 'Buah'),
(72, 'SDK_001', 53, 15, 'Yayasan', '', '2018-02-07', 'Kasih', 17000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Alumunium', 'Buah'),
(73, 'TK_001', 54, 15, 'Yayasan', '', '2018-02-06', 'Kasih', 21000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Logam', 'Buah'),
(74, 'TK_002', 55, 15, 'Yayasan', '', '2018-02-07', 'Kasih', 39600, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Logam', 'Buah'),
(75, 'BSM_001', 56, 15, 'Yayasan', '', '2018-02-15', 'Kasih', 88000, 'Lokal', 0, 'Baik', NULL, '', '001 - 002', 2, 'Logam', 'Buah'),
(76, 'RP_001', 57, 15, 'Yayasan', '', '2018-02-22', 'Ariani', 73000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Buah'),
(77, 'TSJ_001', 58, 15, 'Yayasan', '', '2018-02-17', 'Kasih', 32250, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Plastik', 'Buah'),
(78, 'PNC_001', 59, 15, 'Yayasan', '', '2018-02-16', 'Kasih', 60000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Alumunium', 'Buah'),
(79, 'GRP_001', 60, 15, 'Yayasan', '', '2018-02-19', 'Kasih', 24000, 'Lokal', 0, 'Baik', NULL, '', '001 - 002', 2, 'Logam', 'Dosin'),
(80, 'MG_002', 61, 6, 'Yayasan', '', '2018-02-07', 'Ariani', 1439900, 'Miyako', 0, 'Baik', NULL, '', '', 1, 'Stainless', 'Buah'),
(81, 'TS_001', 62, 12, 'Yayasan', '', '2018-02-18', 'Kasih', 310000, 'Lokal', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Buah'),
(82, 'LCD_001', 63, 11, 'Yayasan', '', '2018-02-16', 'Luciana', 25000000, 'Sony', 0, 'Baik', NULL, '', '001 - 002', 2, '', 'Buah'),
(83, 'HND_001', 64, 21, 'Yayasan', '', '2018-02-20', 'Luciana', 3000000, 'Canon', 0, 'Baik', NULL, '', '', 1, '', 'Buah'),
(84, 'PT_004', 65, 3, 'Yayasan', '', '2018-02-16', 'Kasih', 620000, 'Lokal', 0, 'Baik', NULL, 'Ukuran 209 x 133', '', 1, 'Jati', 'Buah'),
(85, 'PT_005', 65, 10, 'Yayasan', '', '2018-02-23', 'Kasih', 385000, 'Lokal', 0, 'Baik', NULL, 'Ukuran 209 x 88', '', 1, 'Jati', 'Buah'),
(86, 'JDL_001', 66, 3, 'Yayasan', '', '2018-02-07', 'Kasih', 420000, 'Lokal', 0, 'Baik', NULL, 'Ukuran 128 x 70 ', '001 - 002', 2, 'Jati', 'Buah'),
(87, 'TRL_001', 67, 19, 'Yayasan', '', '2018-02-08', 'Ariani', 1225000, 'Lokal', 0, 'Baik', NULL, 'Ukuran 110 x 60 ', '001 - 009', 9, 'Besi', 'Buah'),
(88, 'TRL_002', 67, 13, 'Yayasan', '', '2018-02-08', 'Ariani', 525000, 'Lokal', 0, 'Baik', NULL, 'Ukuran 120 x 70 ', '001 - 004', 4, 'Besi', 'Buah'),
(89, 'TRL_003', 67, 15, 'Yayasan', '', '2018-02-09', 'Ariani', 1125000, 'Lokal', 0, 'Baik', NULL, 'Ukuran 110 x 50', '001 - 008', 8, 'Besi', 'Buah'),
(90, 'PTB_001', 68, 24, 'Yayasan', '', '2018-02-22', 'Luciana', 1200000, 'Lokal', 0, 'Baik', NULL, 'Ukuran 320 x 180', '', 1, 'Jati', 'Buah'),
(91, 'TMB_001', 69, 9, 'Bos', '', '2018-02-09', 'Kasih', 250000, 'Kabuto', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Buah'),
(92, 'CLP_001', 70, 19, 'Bos', '', '2018-02-08', 'Luciana', 85100, 'Lokal', 0, 'Baik', NULL, '', '001 - 002', 2, 'Plastik', 'Buah'),
(93, 'FD_001', 71, 4, 'Bos', '', '2018-02-08', 'Luciana', 42650, 'Sandisk', 0, 'Baik', NULL, '', '', 1, 'Plastik', 'Buah'),
(94, 'STP_001', 72, 4, 'Bos', '', '2018-02-06', 'Ariani', 155000, 'Eagle 939', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Buah'),
(95, 'CTP_001', 73, 12, 'Bos', '', '2018-02-13', 'Ariani', 650000, 'Lokal', 0, 'Baik', NULL, '', '001 - 002', 2, 'Besi', 'Buah'),
(96, 'DF_001', 74, 14, 'Bos', '', '2018-02-05', 'Luciana', 488200, 'Cosmos', 0, 'Baik', NULL, 'Cosmos 12 DSE', '001 - 003', 3, '', 'Buah'),
(97, 'BXF_001', 75, 5, 'Bos', '', '2018-02-15', 'Luciana', 627100, 'Maspion', 0, 'Baik', NULL, 'Maspion JF-2101T', '001 - 003', 3, '', 'Buah'),
(98, 'TB_002', 76, 0, 'Bos', '', '2018-02-08', 'Ariani', 69800, 'Laica', 0, 'Baik', NULL, '', '', 1, '', 'Buah'),
(99, 'PPN_001', 77, 4, 'Bos', '', '2018-02-06', 'Ariani', 4000000, 'Lokal', 0, 'Baik', NULL, '', '001 - 005', 5, 'Kayu', 'Buah'),
(100, 'SPW_001', 78, 4, 'Bos', '', '2018-02-06', 'Luciana', 371500, 'Powerpack', 0, 'Baik', NULL, '', '', 1, 'Besi', 'Buah'),
(101, 'JMB_002', 39, 15, 'Bos', '', '2018-02-05', 'Kasih', 93750, 'Lion Star', 0, 'Baik', NULL, '', '', 1, 'Plastik', 'Buah'),
(102, 'PDGTL_001', 79, 7, 'APBN', '', '2018-02-06', 'Ariani', 21000000, '', 0, 'Baik', NULL, '', '', 1, '', 'Set'),
(103, 'SOFT_001', 80, 7, 'APBN', '', '2018-02-07', 'Luciana', 2500000, '', 0, 'Baik', NULL, '', '', 1, '', 'Set');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `penyusutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `penyusutan`) VALUES
(25, 'Meja Guru', 96),
(26, 'Kursi Guru', 96),
(27, 'Meja Murid', 96),
(28, 'Kursi Murid', 96),
(29, 'Kursi Lipat', 96),
(30, 'Whiteboard', 96),
(31, 'Kompor gas', 48),
(32, 'Regulator', 48),
(33, 'Selang', 48),
(34, 'Raket Badminton', 24),
(35, 'Gamelan', 96),
(36, 'Drum Set', 96),
(37, 'Plafon', 96),
(38, 'Komputer', 48),
(39, 'Jumbojar', 24),
(40, 'Tangga Alumunium', 48),
(41, 'Cetakan batako ', 96),
(42, 'Meja Komputer', 96),
(43, 'Etalase', 96),
(44, 'Pintu', 96),
(45, 'Laptop', 36),
(46, 'TV', 36),
(47, 'Meja Tamu', 96),
(48, 'Teralis sekolah', 96),
(49, 'Skat pintu kasa', 96),
(50, 'Tempat jemuran', 36),
(51, 'Lemari Dapur', 96),
(52, 'Papan data/Papan tulis', 48),
(53, 'Sendok sayur ', 24),
(54, 'Teko  MLTND ES 308 ', 48),
(55, 'Teko 13 TB ', 36),
(56, 'Baskom ', 36),
(57, 'Rak piring Printty ', 36),
(58, 'Tudung saji ', 36),
(59, 'Panci 36', 36),
(60, 'Garpu', 36),
(61, 'Magic com', 48),
(62, 'Tanki Semprot', 48),
(63, 'LCD proyektor', 36),
(64, 'Handycam', 48),
(65, 'Pintu Depan', 96),
(66, 'Jendela Depan', 96),
(67, 'Teralis', 96),
(68, 'Pintu Belakang', 96),
(69, 'Timbangan', 36),
(70, 'Coolpad', 36),
(71, 'Flashdisk', 36),
(72, 'Stappler', 36),
(73, 'Cetakan Paving Segi 4', 96),
(74, 'Desk Fan', 48),
(75, 'Box Fan', 48),
(76, 'Timbangan Badan', 36),
(77, 'Papan Nama', 48),
(78, 'Sealer Power Pack', 48),
(79, 'Papan digital interaktif', 48),
(80, 'Software pembelajaran', 36),
(81, 'Paper cutter', 36),
(82, 'Almari', 96),
(83, 'Kipas Angin', 36),
(84, 'Rak Buku', 96),
(85, 'Meteran', 36),
(86, 'Harddisk External', 48),
(87, 'UPS', 48),
(88, 'Gerobak Dorong', 96),
(89, 'Pagar', 96),
(90, 'Talud', 96),
(91, 'Printer', 48),
(92, 'Pintu plat besi', 96),
(93, 'Kanopi', 96),
(94, 'Pompa Air', 48),
(95, 'Pintu pagar kolam', 96),
(96, 'Pintu ruang kelas', 96),
(97, 'Pegangan kolam', 96),
(98, 'Pagar Kolam', 96),
(99, 'Digital keyboard', 48),
(100, 'Wireless', 48),
(101, 'Tenda', 48),
(102, 'Pintu alumunium', 96),
(103, 'Papan Data', 48),
(104, 'Sekat Rg perpus & pintu almari', 96),
(105, 'Modem', 36),
(106, 'White board', 48),
(107, 'Pintu Besi', 96),
(108, 'Bola voli pro team', 48),
(109, 'Gerobak songkro ', 48),
(110, 'Kompor', 48),
(111, 'Cetakan batako kecil', 96),
(112, 'Bola kaki specs', 36),
(113, 'Bola voli mitzuda', 36),
(114, 'Bola basket spalding', 36),
(115, 'Stopwatch', 36),
(116, 'Almari tempat TV', 96),
(117, 'Jam DInding', 48),
(118, 'Pompa Wazer', 48),
(119, 'AC', 48),
(120, 'Tiang Bendera', 96),
(121, 'TP Link', 36),
(122, 'Kalkulator', 24),
(123, 'Blender', 48),
(124, ' Gerobak arco ', 48),
(125, 'Filling kabinet', 48),
(126, 'Tabung Gas', 48);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_sub`
--

CREATE TABLE `tb_kategori_sub` (
  `id_kategori_sub` int(11) NOT NULL,
  `nama_sub_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `struktural` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `pict` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `aktif` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id`, `nama`, `jabatan`, `struktural`, `alamat`, `pict`, `no_hp`, `aktif`) VALUES
(1, 'Dra. Tri Iriani', 'Kepala Sekolah', 'Kepala Sekolah', 'Bopongan Tamanan Banguntapan Bantul Yogyakarta', 'tri ks.jpg', '081804271703', 1),
(17, 'Luciana Sutarti', 'Tata Usaha', 'Tata Usaha', 'Jomegatan Ngestiharjo Kasihan Bantul Yogyakarta', 'lucy.jpg', '081328190357', 1),
(22, 'Stephanus Yogi Nugroho', 'Bendahara', 'Bendahara', 'Sukoharjocupuwatu Purwomartani Kalasan Sleman', 'yog.jpg', '085729280597', 1),
(24, 'Yustina Budi Setyawati', 'Wakasek Urusan Kurikulum', 'Kurikulum', 'Waraklor Sumberdadi Mlati Sleman Yogyakarta', 'yustina.jpg', '082322918262', 1),
(25, 'Emanuella Prahastuti', 'Wakasek Urusan Kesiswaan', 'Kesiswaan', 'Timuran, Brontokusuman, Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta', 'ema.jpg', '087838615201', 1),
(26, 'Maria Yohana Dwi Karnaningsih', 'Wakasek Urusan Sarpras', 'Kepegawaian', 'Wonokerso Sariharjo Ngaglik Sleman Yogyakarta', 'my dwi.jpg', '081804203115', 1),
(27, 'Kristina Untaryati', 'Wakasek Urusan Humas', 'Humas', 'Mrican Caturtunggal Depok Sleman', 'kristina.jpg', '085868675898', 1),
(28, 'Nanda', 'Kepala Sekolah', 'Wakil Kepala', 'Yogyakarta', 'nanda.jpg', '087878787878', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`) VALUES
(1, 'Halaman'),
(2, 'Ruang Parkir'),
(3, 'Ruang Tamu'),
(4, 'Ruang TU'),
(5, 'Ruang Kep. Sek'),
(6, 'Ruang Kantin'),
(7, 'TKLB'),
(8, 'Gudang'),
(9, 'Ruang UKS'),
(10, 'Ruang Ibadah'),
(11, 'Ruang OSIS'),
(12, 'Gudang'),
(13, 'Ruang Kesenian'),
(14, 'Ruang Ket. Salon'),
(15, 'Ruang Ket. Boga'),
(16, 'Kelas'),
(17, 'Ruang BK'),
(18, 'Kolam Renang'),
(19, 'Ruang Komputer'),
(20, 'Kelas'),
(21, 'Ruang Guru'),
(22, 'Ruang Perpustakaan'),
(23, 'Ruang Kelas X'),
(24, 'Ruang Kelas XI'),
(25, 'Wastafel'),
(26, 'Kolam Kelas 10'),
(27, 'Kolam Kelas 11'),
(28, 'Kolam Kelas 12'),
(29, 'Lahan Perkebunan'),
(30, 'Lahan Pertanian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kategori_sub`
--
ALTER TABLE `tb_kategori_sub`
  ADD PRIMARY KEY (`id_kategori_sub`);

--
-- Indexes for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
