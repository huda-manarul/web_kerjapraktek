-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 05:15 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'mana', '001', 'Manarul Huda');

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `kuota_dosen` int(11) NOT NULL,
  `sisa_kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`nip`, `nama_dosen`, `kuota_dosen`, `sisa_kuota`) VALUES
('1', 'legendary', 5, 5),
('2', 'super', 5, 4),
('3', 'aryan', 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `data_informasi`
--

CREATE TABLE `data_informasi` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_informasi`
--

INSERT INTO `data_informasi` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_berita`) VALUES
(4, 'Notice Me Senpai', '<p>Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai</p>\r\n', '2018-05-21 03:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa_kp`
--

CREATE TABLE `data_mahasiswa_kp` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL,
  `tempat_kp` varchar(50) NOT NULL,
  `alamat_tempat_kp` text NOT NULL,
  `penyelia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa_kp`
--

INSERT INTO `data_mahasiswa_kp` (`nim`, `nama`, `jenis_kegiatan`, `tempat_kp`, `alamat_tempat_kp`, `penyelia`) VALUES
('A11.2015.09063', 'Bagus Duta', 'KP', 'Dinas Kesehatan Prov Jateng', 'Semarang Tengah', '-'),
('A11.2015.09277', 'Aldino Ivan Putra', 'KP', 'DKP Prov Jateng', 'Semarang Tengah', '-'),
('A11.2015.09279', 'Manarul Huda', 'KP', 'DKP Prov Jateng', 'Semarang Tengah', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_mhasiswa_sidang`
--

CREATE TABLE `data_mhasiswa_sidang` (
  `nim` varchar(15) NOT NULL,
  `nama_project` text NOT NULL,
  `krs` varchar(30) NOT NULL,
  `sk_kp` varchar(30) NOT NULL,
  `laporan_kp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_informasi`
--
ALTER TABLE `data_informasi`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `data_mahasiswa_kp`
--
ALTER TABLE `data_mahasiswa_kp`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `data_mhasiswa_sidang`
--
ALTER TABLE `data_mhasiswa_sidang`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_informasi`
--
ALTER TABLE `data_informasi`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
