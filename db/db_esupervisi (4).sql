-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Apr 2019 pada 06.12
-- Versi Server: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_esupervisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `NIP_Guru` varchar(50) NOT NULL,
  `Nama_Guru` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Kode_Kelas_Guru` varchar(50) NOT NULL,
  `Kode_Sekolah_Guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP_Guru`, `Nama_Guru`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`, `Kode_Kelas_Guru`, `Kode_Sekolah_Guru`) VALUES
('121212', 'fd', '2019-03-13', 'L', '3333333', 'asddssa', 'k6', 'S002'),
('12345678', 'amad', '2019-03-10', 'L', '12231', 'poros', 'k1', 'S001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `Id_Jadwal` int(11) NOT NULL,
  `NIP_Kepsek_Jadwal` varchar(50) NOT NULL,
  `NIP_Guru_Jadwal` varchar(50) NOT NULL,
  `Kode_Kelas_Jadwal` varchar(50) NOT NULL,
  `Kode_Sekolah_Jadwal` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Tanggal_Jadwal` date NOT NULL,
  `Hari` varchar(50) NOT NULL,
  `Jam` varchar(11) NOT NULL,
  `Skor` varchar(5) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`Id_Jadwal`, `NIP_Kepsek_Jadwal`, `NIP_Guru_Jadwal`, `Kode_Kelas_Jadwal`, `Kode_Sekolah_Jadwal`, `Semester`, `Tanggal_Jadwal`, `Hari`, `Jam`, `Skor`, `Keterangan`) VALUES
(8, '196612181986032002', '12345678', 'k6', 'S001', '1', '0000-00-00', 'Senin', '01:03-01:03', '', ''),
(9, '196401211983022001', '121212', 'k6', 'S002', '2', '0000-00-00', 'Senin', '09:32-09:32', '', ''),
(10, '196401211983022001', '121212', 'k1', 'S001', '2', '0000-00-00', 'Senin', '12:26-14:27', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `Kode_Kelas` varchar(50) NOT NULL,
  `Nama_Kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`Kode_Kelas`, `Nama_Kelas`) VALUES
('k1', '1'),
('k2', '2'),
('k3', '3'),
('k4', '4'),
('k5', '5'),
('k6', '6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepsek`
--

CREATE TABLE IF NOT EXISTS `kepsek` (
  `NIP_Kepsek` varchar(50) NOT NULL,
  `Nama_Kepsek` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `No_Telp` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepsek`
--

INSERT INTO `kepsek` (`NIP_Kepsek`, `Nama_Kepsek`, `Tanggal_Lahir`, `JK`, `No_Telp`, `Alamat`) VALUES
('196401211983022001', 'Dra. Sri Ramayenti', '1969-01-21', 'P', '082317197000', 'Komp SDN 04 Garegeh'),
('196502261986032004', 'Nurhayati, S.Pd', '1965-02-26', 'P', '085365242699', 'Jln Flamboyan III no.3 Inkorba Bukittinggi'),
('196612181986032002', 'Dra. Deswita', '1969-12-18', 'P', '082169733700', 'Gurun Panjang'),
('2516026', 'Muhammad Risqi Darmawan', '1998-11-04', 'L', '081275623044', 'Ladang Cakiah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `Id_Nilai` int(11) NOT NULL,
  `Id_Jadwal_Nilai` varchar(50) NOT NULL,
  `NIP_Guru_Nilai` varchar(50) NOT NULL,
  `tgl_a` date NOT NULL,
  `Skor_A` varchar(5) NOT NULL,
  `tgl_b` date NOT NULL,
  `Skor_B` varchar(5) NOT NULL,
  `tgl_c` date NOT NULL,
  `Skor_C` varchar(5) NOT NULL,
  `Komentar` text NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`Id_Nilai`, `Id_Jadwal_Nilai`, `NIP_Guru_Nilai`, `tgl_a`, `Skor_A`, `tgl_b`, `Skor_B`, `tgl_c`, `Skor_C`, `Komentar`, `File`) VALUES
(4, '9', '121212', '2019-04-07', '100', '2019-04-07', '85.71', '2019-04-07', '88', 'hjk', '4.pdf'),
(7, '10', '121212', '2019-04-09', '35.71', '2019-04-09', '79.46', '2019-04-09', '86.33', 'iop', '[1] SILABUS TEMATIK 1.zip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `Kode_Sekolah` varchar(50) NOT NULL,
  `Nama_Sekolah` varchar(50) NOT NULL,
  `NIP_Kepsek_Sekolah` varchar(50) NOT NULL,
  `Foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`Kode_Sekolah`, `Nama_Sekolah`, `NIP_Kepsek_Sekolah`, `Foto`) VALUES
('S001', 'SD Negeri 01 Benteng Pasar Atas', '196612181986032002', 's1.JPG'),
('S002', 'SD Negeri 02 Percontohan', '196401211983022001', 's2.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_User` int(11) NOT NULL,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_User`, `Id_Usergroup_User`, `Username`, `Password`, `Foto`) VALUES
(1, 1, 'admin', '$2y$10$tna4CzutLi/9Ze23jpwDW.aur99SQ7S3Q/zh0929TIfXGxy4DH256', 'favico.PNG'),
(42, 1, 'admintua', '$2y$10$A/2syMLkvEb9cbjaHLl2u.OC2q2Eewnn/2UeuFtS.SVKBbfuN7uUG', 'js.jpg'),
(43, 2, '196612181986032002', '$2y$10$QnpFg1XKzbweZLhU7OEgauzVliT/2IiQvVcrE4GlyPEQI63.z7zou', '1.png'),
(44, 2, '12345678', '$2y$10$8su7Ac1HuurnWS3DQR/xT.7d33lxd7jA4JxsN1FSeRi30z0ILouFm', 'IMG-20190317-WA0006.jpg'),
(45, 2, '196502261986032004', '$2y$10$cD6Lv/op75/gs.k7kG3qoupLjcoeCjLgK46vQxFQPHRrMyySATihC', 'IMG-20190317-WA0006.jpg'),
(49, 2, '196401211983022001', '$2y$10$HmWOxDA//UsFVlcW4PEvJ.W.65DXdXbzSvj0XC/.NSow/Iukup4c2', '3.jpg'),
(50, 1, 'ahmad', '$2y$10$DCG/iS0tyqTmHbj8u.cdPe1bIHHqzb2dnTjqQTJYs9QQjn61eQGHq', 'favico.PNG'),
(51, 3, '121212', '$2y$10$9RUblxvqA7IgmkhKuRpnlegCqm2FhfeAJGgNp6Y8OgCHSUKrFV4e.', 'facebok.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usergroup`
--

CREATE TABLE IF NOT EXISTS `usergroup` (
  `Id_Usergroup` int(11) NOT NULL,
  `Nama_Usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usergroup`
--

INSERT INTO `usergroup` (`Id_Usergroup`, `Nama_Usergroup`) VALUES
(1, 'Administrator'),
(2, 'Kepsek'),
(3, 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP_Guru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id_Jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_Kelas`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`NIP_Kepsek`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Id_Nilai`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`Kode_Sekolah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id_Usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `Id_Jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `Id_Nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id_Usergroup` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
