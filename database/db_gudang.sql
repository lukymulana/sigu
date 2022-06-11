-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 04:20 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(6) NOT NULL COMMENT 'Kode barang',
  `nama_barang` text NOT NULL COMMENT 'Nama barang',
  `kode_kategori` varchar(6) NOT NULL COMMENT 'Kode kategori',
  `kode_supplier` varchar(6) NOT NULL,
  `stok` char(3) NOT NULL COMMENT 'stok barang',
  `satuan` varchar(10) NOT NULL COMMENT 'satuan suatu barang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `kode_kategori`, `kode_supplier`, `stok`, `satuan`) VALUES
('BR-1', 'Indomie', 'KT-1', 'SP-1', '30', 'Pcs'),
('BR-2', 'Masker', 'KT-2', 'SP-2', '15', 'Pcs'),
('BR-3', 'Nabati', 'KT-1', 'SP-3', '5', 'Pcs');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `no_faktur` varchar(30) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `kode_barang` varchar(6) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `kode_supplier` varchar(6) NOT NULL,
  `user_id` varchar(6) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `kondisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`no_faktur`, `tanggal_keluar`, `kode_barang`, `jumlah`, `kode_supplier`, `user_id`, `keterangan`, `kondisi`) VALUES
('0/BK/2020', '2020-03-18', 'BR-1', '3', 'SP-1', 'US-1', 'Kebutuhan Karyawan', 'OK'),
('1/BK/2020', '2020-04-25', 'BR-1', '13', 'SP-1', 'US-1', 'Kebutuhan Karyawan', 'OK'),
('2/BK/2020', '2020-06-04', 'BR-3', '5', 'SP-3', 'US-8', 'Syukuran Divisi', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `no_faktur` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_barang` varchar(6) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kode_supplier` varchar(6) NOT NULL,
  `user_id` varchar(6) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`no_faktur`, `tanggal_masuk`, `kode_barang`, `jumlah`, `kode_supplier`, `user_id`, `kondisi`) VALUES
('1/BM/2020', '2020-03-16', 'BR-1', 23, 'SP-1', 'US-1', 'OK'),
('2/BM/2020', '2020-04-24', 'BR-1', 3, 'SP-1', 'US-1', 'OK'),
('3/BM/2020', '2020-05-29', 'BR-1', 20, 'SP-1', 'US-1', 'OK'),
('4/BM/2020', '2020-05-31', 'BR-2', 5, 'SP-2', 'US-1', 'OK'),
('6/BM/2020', '2020-06-03', 'BR-3', 10, 'SP-3', 'US-8', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` varchar(6) NOT NULL COMMENT 'Kode kategori barang',
  `nama_kategori` varchar(30) NOT NULL COMMENT 'Nama kategori barang',
  `no_rak` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`, `no_rak`) VALUES
('KT-1', 'Makanan', '1'),
('KT-2', 'Alat', '2'),
('KT-3', 'Lainnya', '3');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` varchar(6) NOT NULL COMMENT 'Kode supplier',
  `nama_supplier` varchar(30) NOT NULL COMMENT 'Nama supplier',
  `alamat` text NOT NULL COMMENT 'Alamat supplier',
  `notelp` varchar(13) NOT NULL COMMENT 'No telepon supplier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `notelp`) VALUES
('SP-1', 'PT. Indofood', 'Jl. Raya Cikopo No.Km. 13', '(0264) 313511'),
('SP-2', 'Arista Latindo', 'Jl. KH.Moh.Mansyur No.128, RT.3/RW.12, Tanah Sereal, Kec. Tambora, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11270', '062218740982'),
('SP-3', 'PT. Unilever', 'KIM', '089127634');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(6) NOT NULL COMMENT 'Id user',
  `username` varchar(10) NOT NULL COMMENT 'Username user',
  `password` varchar(8) NOT NULL COMMENT 'Password user',
  `nama` varchar(30) NOT NULL COMMENT 'Nama user',
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `level`) VALUES
('US-1', 'staff', 'staff', 'staff', 'admin'),
('US-2', 'operator', 'operator', 'operator', 'user'),
('US-3', 'destaria', '18048', 'Destaria Wilandini', 'admin'),
('US-4', 'adit', '18083', 'Aditya Wijaya', 'admin'),
('US-5', 'rijal', '18118', 'Rijaludin Trilaksana', 'admin'),
('US-6', 'ajie', '18120', 'Dharma Ajie Nur Rois', 'admin'),
('US-7', 'lalang', '18121', 'Lalang Gunawan', 'admin'),
('US-8', 'luky', '18200', 'Luky Mulana', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_kategori` (`kode_kategori`),
  ADD KEY `kode_supplier` (`kode_supplier`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`no_faktur`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_supplier` (`kode_supplier`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
