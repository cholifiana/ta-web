-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2015 at 10:07 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dataadmin`
--

CREATE TABLE IF NOT EXISTS `dataadmin` (
  `kode_admin` int(11) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `no` text NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataadmin`
--

INSERT INTO `dataadmin` (`kode_admin`, `nama_admin`, `no`, `alamat`, `jabatan`, `password`) VALUES
(1, 'nn', '085601302712', 'jl. Baru No 25 Yogyakarta', 'Kasir', 'nn'),
(2, 'd', '2324', 'www', 'w', 'w'),
(3, 'kasir', '09090909', 'Sleman', 'kasir', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` varchar(10) NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `jlh_beli` int(5) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `kode_barang`, `jlh_beli`, `tgl_beli`) VALUES
('1', '3', 2, '2014-06-15'),
('1', '1', 2, '2014-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int(12) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_barang`, `nama_barang`, `harga`, `stok`, `kategori`) VALUES
('1', 'baju muslim', 300000, '16', 'Baju Muslim Dewasa'),
('3', 'Dress Anak', 100000, '12', 'Baju Anak'),
('2', 'Long Dress', 250000, '13', 'Baju Wanita');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
