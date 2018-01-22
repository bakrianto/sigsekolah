-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 07:41 AM
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
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id_inventaris`, `id_kategori`, `id_ruang`, `asal`, `nama_inventaris`, `tgl_pembelian`, `dibeli_oleh`, `nilai_pembelian`, `merk`, `nilai_saat_ini`, `kondisi`, `pict`, `ket`) VALUES
(2, 1, 2, 'Hibah', 'kursi', '2017-11-01', 'ari', 200000, 'olimpic', 100000, 'Kondisi 80-100%', 'meja.jpg', ''),
(3, 5, 1, 'BOS', 'meja', '2017-11-02', 'ari', 300000, 'lokal', 290000, 'Kondisi 80-100%', 'meja.jpg', ''),
(4, 1, 4, 'APBN', 'rak', '2017-11-01', 'ari', 500000, 'lokal', 400000, 'Kerusakan 10-50%', 'meja.jpg', ''),
(5, 5, 1, 'APBD', 'meja', '2017-11-01', 'ari', 300000, 'olimpic', 250000, 'Kerusakan 50-90%', 'meja.jpg', ''),
(7, 5, 3, 'Yayasan', 'jam dinding', '2017-11-02', 'edi', 20000, 'kasio', 10000, 'Kondisi 80-100%', 'meja.jpg', ''),
(8, 5, 1, 'Komite Sekolah', 'sapu lidi', '2017-11-01', 'ari', 15000, 'local', 5000, 'Kerusakan 10-50%', 'meja.jpg', ''),
(10, 2, 4, 'Dana', 'komputer', '2017-11-01', 'budi', 3000000, 'Thosiba', 2800000, 'Kondisi 80-100%', 'meja.jpg', ''),
(11, 2, 3, 'Dana', 'meja', '2017-12-07', 'sopo', 250000, 'lokal', 150000, 'Kondisi 80-100%', '1566_y8oXYt93.jpg', ''),
(12, 1, 27, 'Bos', 'papan tulis', '2018-01-02', 'Saya', 100000, 'olimpic', 100000, 'Kondisi 80-100%', 'WP_20171009_057.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kelas'),
(2, 'Kantor'),
(3, 'WC'),
(4, 'Kolam'),
(5, 'Outdoor');

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
  `no_hp` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id`, `nama`, `jabatan`, `struktural`, `alamat`, `pict`, `no_hp`) VALUES
(1, 'Budi', 'Kepala Sekolah', 'Komite', 'Bantul', 'WP_20171009_026 yustina.jpg', 235435),
(17, 'Bambang', 'Guru', 'Yayasan', 'Bantul', 'sekolah.jpg', 8978),
(18, 'bahlul', 'bendahara', 'Komite', 'jogja', '284-AUK177a1.jpg', 45645);

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
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
