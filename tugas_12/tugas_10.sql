-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 13 Apr 2020 pada 17.39
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_10`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `no` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `jkel` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `saudara` varchar(3) NOT NULL,
  `warga_negara` varchar(20) NOT NULL,
  `penyakit` varchar(20) NOT NULL,
  `tinggi` varchar(3) NOT NULL,
  `berat` varchar(3) NOT NULL,
  `prestasi` varchar(20) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `nama_a` varchar(30) NOT NULL,
  `pendidikan_a` varchar(5) NOT NULL,
  `pekerjaan_a` varchar(20) NOT NULL,
  `telp_a` varchar(15) NOT NULL,
  `nama_i` varchar(30) NOT NULL,
  `pendidikan_i` varchar(5) NOT NULL,
  `pekerjaan_i` varchar(20) NOT NULL,
  `telp_i` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`no`, `nama`, `email`, `tempat_lahir`, `tanggal`, `bulan`, `tahun`, `jkel`, `agama`, `alamat`, `telp`, `saudara`, `warga_negara`, `penyakit`, `tinggi`, `berat`, `prestasi`, `hobi`, `nama_a`, `pendidikan_a`, `pekerjaan_a`, `telp_a`, `nama_i`, `pendidikan_i`, `pekerjaan_i`, `telp_i`) VALUES
(13, 'nabilah', 'fathnabilah@gmail.com', 'surabaya', '11', '05', '2001', 'perempuan', 'Islam', 'wiyung', '081378680302', '4', 'indonesia', 'biduran', '155', '55', 'lomba masak', 'menonton film', 'hari', 'S1', 'pebisnis', '08557575783', '', 'S1', 'ibu rumah tangga', '0834567123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
