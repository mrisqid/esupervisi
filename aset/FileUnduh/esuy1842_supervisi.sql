-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Feb 2020 pada 16.30
-- Versi server: 10.1.43-MariaDB-cll-lve
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esuy1842_supervisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
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
('', '', '0000-00-00', '', '', '', 'k1', 'SDS'),
('0137749650300013', 'Triwahyuni, S.Pd', '1971-08-05', '', '08126729616', 'Ranah Jorong batang Buo Nagari Biaro Gadang IVAngkek Candung', 'k4', 'SDS1'),
('0335745648200033', 'Bintoni, S.Pd', '1967-10-03', 'L', '081374596163', 'Ranah Batang Buo, Garegeh', 'k5', 'SDS1'),
('10307564', 'Novi Fitrianti, S.Pd', '1990-11-14', 'P', '085274789014', 'Jln TDR Bukit Apit', 'k5', 'SD13'),
('11', 'Aa', '1978-03-03', 'L', '0752', 'Coba', 'k3', 'SD15'),
('1449758660300012', 'Dini Haryaty, S.Pd', '1980-01-17', 'P', '081374316631', 'Jl. Sumurapak No.17 Bukittingg', 'k4', 'SDS1'),
('195812111981122002', 'Desnawati,S.Pd', '1958-12-11', 'P', '081363435656', 'Banto Laweh', 'k2', 'SD14'),
('195908271986032004', 'Rosmanetty. BR, A.Ma.', '1959-08-27', 'P', '081363285333', 'Jl. Tangah Jua II No. 15', 'k5', 'S002'),
('196006011982012005', 'Zuraida Kamil, S.Pdi', '1960-06-01', 'P', '085278246632', 'Komplek Mesjid Nurul Huda Panganak Bukittinggi', 'k4', 'SD04'),
('196107181982072002', 'Nelwati, A.Ma', '1961-07-18', 'P', '081363339476', 'Bukik Cangang', 'k6', 'SD07'),
('196107271983082001', 'Yusbeni,S.Pd', '1961-07-27', '', '081363319827', 'Kambing Tujuh Kb.Agam', 'k4', 'SD14'),
('196109111982022003', 'Hj. Zulbaidar, S.Pd', '1961-09-11', 'P', '085274249687', 'Jambak durian padang Luar', 'k4', 'SD12'),
('196206201983032003', 'Afrisma Dewi, S.Pd', '1962-06-20', 'P', '081363938568', 'Madiangin', 'k4', 'SD13'),
('196206291983032002', 'Eliyarni, S.Pd SD', '1962-06-29', 'P', '081363401474', 'Kubang Putiah', 'k6', 'S001'),
('196207061982021002', 'H. Hendri Danil', '1962-07-06', 'L', '082388284672', 'Jln. Bypass Pulai Anak Air MKS', 'k1', 'SD12'),
('196310011983032006', 'Anofia, S.Pd', '1963-10-01', 'P', '081267343810', 'Belakang Balok', 'k5', 'S001'),
('196311221984032002', 'Hj.Wendri, S.Pd', '1963-11-22', 'P', '08524649660', 'Gulai Bancah Pakoan', 'k1', 'SD10'),
('196312231985042001', 'Desmarini, S.Pd', '1963-12-23', 'P', '085100030626', 'Palatan Pulai, Gadut', 'k5', 'SD12'),
('196401221983032002', 'Dra. Yen Rina', '1964-01-22', 'P', '081363413503', 'Jl. Bukit Cangang', 'k5', 'S002'),
('196402151983052004', 'Nurfitri, S.Ag.', '1964-02-15', '', '081535444004', 'Jl. Bantolaweh No. 10 B', 'k6', 'S002'),
('196408031986032004', 'Lakmizar, S.Pd.', '1964-08-03', 'P', '081363889606', 'Jl. Tangah Jua Gang Tomat No. 27', 'k6', 'S002'),
('196408071984102003', 'Gusneli, S.Pd', '1964-08-07', 'P', ' 081374683328', 'Panganak', 'k4', 'SD13'),
('196502021986032009', 'Nurmizal Enel, S.Pd SD', '1965-02-02', 'P', '085274392122', 'Inkorba', 'k6', 'S001'),
('196508291988082001', 'Afriyeni, S.Pd.', '1965-08-29', '', '081267578907', 'Jl. Syeh Sulaiman Arrasuli 66 F', 'k2', 'S002'),
('196512161986032002', 'Murhanida, S.Pd.', '1965-12-16', 'P', '081266605365', 'Jl. Kusuma Bakti Gulai Bancah', 'k5', 'S002'),
('196611172007012006', 'Kasmayeti, S.Pd', '1966-11-17', '', '08126726187', 'Bukik Apit', 'k6', 'SD10'),
('196812012008012008', ' Desnimar.S.Pd. SD', '1968-12-01', 'P', '081266268405', 'JL. Kabun Pulasan', 'k4', 'SD11'),
('196905191991032002', 'Meiziarni, A.Ma', '1969-05-19', 'P', '081363348706', 'Komp. SDN 05 Pintu Kabun ', 'k2', 'SD07'),
('196905241991022001', 'Meiriza Refni, S.Pd', '0000-00-00', '', '085263798385', 'Simpang Tembok', 'k3', 'SD12'),
('196906082003122002', 'Musfia Irda, S.Pd.SD', '1969-06-08', 'P', '085263140823', 'Bukit Cangang ', 'k3', 'SD07'),
('197003072005012004', 'Esi Lauza, S.Pd', '1970-03-07', 'P', '081363320687', 'Birugo', 'k4', 'S001'),
('197109092002122002', 'Syafniwati, S.Pd', '1971-09-09', 'P', '081266927512', 'Inkorba', 'k1', 'S001'),
('197202082006042002', 'Ezi, S.Ag, M.Pd', '1972-02-08', 'P', '081363141979', 'Gurun Panjang', 'k1', 'SD10'),
('197210161997022001', 'Tri Suryani, S.Pd', '1972-10-16', 'P', '081363375868', 'Jln. Tabek Tuhua Bukit Apit Puhun Bukittinggi', 'k1', 'SD04'),
('197504272009012001', 'Husny, SS', '1975-04-27', 'P', '08127655480', 'Baso', 'k4', 'SD10'),
('197601171999122001', 'Bestin Zulfia,S.Pd', '1976-01-17', 'P', '085363528118', 'Jl.Gulai Bancah No.131', 'k4', 'SD14'),
('197807032011012001', 'Yulia Efnita, S.Pd', '1978-07-03', 'P', '081381586842', 'Jl Syech Ibrahim Musa No 23', 'k2', 'SD14'),
('198003132003122007', 'Fitrawati, S.Pd', '1980-03-13', 'P', '081363040270', 'Sungai Tanang Kec. Banuhampu Kab. Agam', 'k3', 'SD04'),
('198003302009012001', 'Mira Anggraini, S.Pd', '1980-03-30', 'P', '08126726958', 'Jln. Lingkar by Pass Pulai Anak Air Bukittinggi', 'k2', 'SD04'),
('198004232003122006', 'Neptriani, S.Pd', '1980-04-23', 'P', '081363916172', 'Gadut', 'k5', 'SD10'),
('198008142006042009', 'Aida Fitriyani, S.Pd. SD', '1980-08-14', 'P', '085364051900', 'Kabun Pulasan dalam 1 B Bukittinggi', 'k6', 'SD04'),
('198207062006042013', 'Ramadayanti, S.Pd', '0000-00-00', '', '081374783078', 'Panorama Baru', 'k5', 'SD13'),
('198302102010012014', 'Zakiah Heriyanti.S.Pd.SD', '1983-02-10', 'P', '085364654933', 'Jln. Sutan Syahrir 62 Bukittinggi', 'k3', 'SD11'),
('198302112009012002', 'Iin Fekasuri, S.Pd', '1983-02-11', 'P', '085274759293', 'Kubang Putiah', 'k4', 'SD07'),
('198311242008022002', 'Witra Nova Rini S.Pd', '1983-11-24', 'P', '081363203987', 'Bukit Apit', 'k4', 'SD13'),
('198402152008022001', 'Adilla Yussianne, S.Pd', '1984-02-15', 'P', '', '', 'k1', 'S001'),
('198402272009011002', 'Metrianis, S.Pd', '1984-02-27', 'L', '085263715969', 'Jln. Mr. Assaat Banto Darano', 'k5', 'SD07'),
('198505102008021001', 'Rahmat Firmansyah, S.Pd', '1985-05-10', 'L', '081374112503', 'Perum Graha Rahmat Indah Jln. Ipuh Loweh', 'k6', 'SD11'),
('198508072009032002', 'Dolli Agustin.S.Pd', '1985-08-07', 'P', '08116612304', 'Jln. Bukittinggi Medan ( GADUT )', 'k2', 'SD11'),
('198509112009012001', 'Efi Ferita', '1985-09-11', '', '081266215969', 'Sawah Dangka Tilatang Kamang', 'k2', 'SD13'),
('198511162008022001', 'Vevi Lesmana Sari, S.Pd', '1985-11-16', 'P', '081363446277', 'Jln. Tangah Jua Bukittinggi', 'k5', 'SD11'),
('198601202010012019', 'Zia Rahayu,S.Pd', '1986-01-20', 'P', '081363273132', 'Sungai Talang Jorong PSB, Kab.agam', 'k1', 'SD14'),
('198604112008022001', 'Yessy Asnora Y,S.Pd', '1986-04-11', '', '081267667500', 'Tapi Aman Jorong Koto Hilalang Kab. Agam', 'k1', 'SD14'),
('198608072009032004', 'Imelda Arnis, S.Pd', '1986-08-07', 'P', '081363031749', 'Jln. Pedati Bukit Apit Bukittinggi', 'k3', 'SD04'),
('198708312011012001', 'Ridha Hayati, S.Pd', '1987-08-31', '', ' 085356667342', 'Jln. Pendidikan No.152 Birugo Bungo', 'k2', 'SD12'),
('2235758659300033', 'Rahmi Fitria, S.PdI, S.Pd', '1980-08-08', 'P', '08126769399', 'Batu Taba, Agam', 'k2', 'SDS'),
('3334752655300003', 'Ismaliza, S.Ag., S.Pd', '1974-10-02', 'P', '081374261230', 'Tilatang Kamang', 'k1', 'SDS'),
('5146756657300033', 'Surya Eka Putri, S.Pd', '1978-10-13', 'P', '085272448440', 'Jl. Panorama Baru Bukittinggi', 'k1', 'SDS1'),
('6535759661300030', 'Rusmaya Sihotang, S.Pd', '1981-10-03', 'P', '081363613114', 'Jl. Hadjrad Talao Bukittinggi', 'k6', 'SDS1'),
('6951755657210072', 'Reni Fianti, S.Pd', '1977-07-17', 'P', '081267804282', 'Koto Baru', 'k5', 'SDS'),
('7147746648300073', 'Burhafversi, S.Pd', '1968-08-15', 'L', '081363010363', 'Pintu Kabun', 'k1', 'SDS'),
('7652752654300042', ' Yelli Asmara, S.Pd', '1974-03-20', 'P', '081374699532', 'Panganak', 'k4', 'SDS'),
('9541745647300022', 'Henny Feranita Br. Panjaitan', '1989-10-31', 'P', '085264574442', 'Wisma Ganting Permai No. C-38 ', 'k5', 'SDS1'),
('9649 7636 6421 0132', 'Kesuma Wardani. Ama', '1985-03-17', 'P', '082115348595', 'Komp. SD Negeri 11 BAP Bukit Apit', 'k1', 'SD11'),
('9938747649300102', 'Imyas Safita, SS., S.Pd', '1969-06-06', 'P', '085365368082', 'Padang Lua', 'k2', 'SDS'),
('anggunpurnamasari', 'Anggun Purnama Sari, S.Pd', '1994-04-18', 'P', '085274072807', 'Banto Laweh', 'k1', 'SD10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `Id_Jadwal` int(11) NOT NULL,
  `NIP_Kepsek_Jadwal` varchar(50) NOT NULL,
  `NIP_Guru_Jadwal` varchar(50) NOT NULL,
  `Kode_Kelas_Jadwal` varchar(50) NOT NULL,
  `Kode_Sekolah_Jadwal` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Tanggal_Jadwal` date NOT NULL,
  `Hari` varchar(50) NOT NULL,
  `Jam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`Id_Jadwal`, `NIP_Kepsek_Jadwal`, `NIP_Guru_Jadwal`, `Kode_Kelas_Jadwal`, `Kode_Sekolah_Jadwal`, `Semester`, `Tanggal_Jadwal`, `Hari`, `Jam`) VALUES
(8, '196612181986032002', '12345678', 'k6', 'S001', '1', '0000-00-00', 'Senin', '01:03-01:03'),
(9, '196401211983022001', '121212', 'k6', 'S002', '2', '0000-00-00', 'Senin', '09:32-09:32'),
(10, '196401211983022001', '121212', 'k1', 'S001', '2', '0000-00-00', 'Senin', '12:26-14:27'),
(11, '196209011981122001', '196204161983032005', 'k3', 'S001', '2', '2019-09-02', 'Senin', '08:03-11:03'),
(19, '196401211983022001', '195908271986032004', 'k1', 'S002', '2', '2019-04-24', 'Senin', '15:21-15:21'),
(21, '196612181986032002', '196310011983032006', 'k5', 'S001', '1', '2019-06-01', 'Senin', '08:00-10:00'),
(22, '196612181986032002', '196204161983032005', 'k3', 'S001', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(23, '196612181986032002', '196206291983032002', 'k6', 'S001', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(24, '196612181986032002', '196502021986032009', 'k6', 'S001', '1', '2019-10-01', 'Selasa', '08:00-10:00'),
(25, '196612181986032002', '197109092002122002', 'k1', 'S001', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(27, '196401211983022001', '196408031986032004', 'k6', 'S002', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(28, '196401211983022001', '196402151983052004', 'k6', 'S002', '1', '2019-09-02', 'Senin', '08:00-10:30'),
(29, '196401211983022001', '196401221983032002', 'k5', 'S002', '1', '2019-07-01', 'Senin', '08:33-10:33'),
(30, '196401211983022001', '196512161986032002', 'k1', 'S002', '1', '0000-00-00', 'Selasa', '08:35-10:35'),
(31, '196401211983022001', '196508291988082001', 'k2', 'S002', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(32, '196502261986032004', '196006011982012005', 'k1', 'SD04', '1', '2019-07-01', 'Senin', '08:00-10:00'),
(33, '196502261986032004', '197210161997022001', 'k1', 'SD04', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(35, '196502261986032004', '198003302009012001', 'k2', 'SD04', '1', '2019-10-01', 'Senin', '08:00-10:00'),
(36, '196502261986032004', '198008142006042009', 'k6', 'SD04', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(37, '196502261986032004', '198608072009032004', 'k3', 'SD04', '1', '2019-12-02', 'Senin', '08:00-10:00'),
(38, '196502261986032004', '198003132003122007', 'k3', 'SD04', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(39, '197204271999122002', '196206201983032003', 'k4', 'SD13', '1', '2019-07-01', 'Senin', '08:00-10:00'),
(40, '197204271999122002', '196408071984102003', 'k4', 'SD13', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(41, '197204271999122002', '198207062006042013', 'k5', 'SD13', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(42, '197204271999122002', '198311242008022002', 'k4', 'SD13', '1', '2019-10-01', 'Selasa', '08:00-10:00'),
(43, '197204271999122002', '198509112009012001', 'k2', 'SD13', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(44, '3937759661200032', '2235758659300033', 'k2', 'SDS', '1', '2019-07-01', 'Senin', '08:00-10:00'),
(45, '3937759661200032', '3334752655300003', 'k1', 'SDS', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(46, '3937759661200032', '6951755657210072', 'k5', 'SDS', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(47, '3937759661200032', '7147746648300073', 'k1', 'SDS', '1', '2019-10-01', 'Selasa', '08:00-10:00'),
(48, '3937759661200032', '7652752654300042', 'k4', 'SDS', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(49, '3937759661200032', '9938747649300102', 'k2', 'SDS', '1', '2019-12-02', 'Senin', '08:00-10:00'),
(50, '196402091983082001', '195812111981122002', 'k2', 'SD14', '1', '2019-07-01', 'Senin', '08:00-10:00'),
(51, '196402091983082001', '196107271983082001', 'k4', 'SD14', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(52, '196402091983082001', '197601171999122001', 'k4', 'SD14', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(53, '196402091983082001', '197807032011012001', 'k2', 'SD14', '1', '2019-10-01', 'Selasa', '08:00-10:00'),
(54, '196402091983082001', '198601202010012019', 'k1', 'SD14', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(55, '196402091983082001', '198604112008022001', 'k1', 'SD14', '1', '2019-12-02', 'Senin', '08:00-10:01'),
(56, '196410021984102001', '196706212007012006', 'k1', 'SD07', '1', '2019-07-01', 'Senin', '08:00-10:05'),
(58, '196410021984102001', '196906082003122002', 'k3', 'SD07', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(59, '196410021984102001', '198302112009012002', 'k4', 'SD07', '1', '2019-10-01', 'Selasa', '08:00-10:00'),
(60, '196410021984102001', '198402272009011002', 'k5', 'SD07', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(61, '196508061987081001', '196311221984032002', 'k1', 'SD10', '1', '2019-07-01', 'Senin', '08:00-10:00'),
(62, '196508061987081001', '196611172007012006', 'k6', 'SD10', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(63, '196508061987081001', '197202082006042002', 'k1', 'SD10', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(65, '196508061987081001', '197504272009012001', 'k4', 'SD10', '1', '2019-10-01', 'Selasa', '08:00-10:00'),
(66, '196508061987081001', '198004232003122006', 'k5', 'SD10', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(67, '196508061987081001', 'anggunpurnamasari', 'k1', 'SD10', '1', '2019-12-02', 'Senin', '08:00-10:00'),
(68, '197211101995022001', '196812012008012008', 'k4', 'SD11', '1', '2019-07-01', 'Senin', '08:00-10:00'),
(69, '197211101995022001', '198302102010012014', 'k3', 'SD11', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(71, '197211101995022001', '198505102008021001', 'k6', 'SD11', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(72, '197211101995022001', '198508072009032002', 'k2', 'SD11', '1', '2019-10-01', 'Selasa', '08:00-10:00'),
(73, '197211101995022001', '198511162008022001', 'k5', 'SD11', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(74, '197211101995022001', '9649 7636 6421 0132', 'k1', 'SD11', '1', '2019-12-02', 'Senin', '08:00-10:00'),
(75, '8952741643300022', '0137749650300013', 'k4', 'SDS1', '1', '2019-07-01', 'Senin', '08:00-10:00'),
(76, '8952741643300022', '0335745648200033', 'k5', 'SDS1', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(77, '8952741643300022', '1449758660300012', 'k4', 'SDS1', '1', '2019-09-02', 'Senin', '08:00-10:00'),
(78, '8952741643300022', '5146756657300033', 'k1', 'SDS1', '1', '2019-10-01', 'Selasa', '08:00-10:00'),
(79, '8952741643300022', '6535759661300030', 'k6', 'SDS1', '1', '2019-11-04', 'Senin', '08:00-10:00'),
(80, '8952741643300022', '9541745647300022', 'k5', 'SDS1', '1', '2019-12-02', 'Senin', '08:00-10:00'),
(82, '196612181986032002', '197003072005012004', 'k4', 'S001', '1', '2019-12-02', 'Senin', '08:00-10:00'),
(84, '196410021984102001', '196905191991032002', 'k2', 'SD07', '1', '2019-08-05', 'Senin', '08:00-10:00'),
(85, '197204271999122002', '10307564', 'k5', 'SD13', '1', '2019-12-02', 'Senin', '08:00-10:00'),
(86, '196410021984102001', '196107181982072002', 'k6', 'SD07', '1', '2019-12-02', 'Senin', '08:00-10:00'),
(89, '196508061987081001', '111', 'k1', 'SD10', '2', '2019-04-05', 'Senin', '18:08-18:06'),
(90, '', '2235758659300033', 'k1', 'SDS', '1', '2019-04-29', 'Senin', '19:23-19:23'),
(91, '', '2235758659300033', 'k1', 'SDS', '2', '2019-05-07', 'Senin', '09:24-10:24'),
(92, '', '2235758659300033', 'k1', 'SDS', '2', '2019-05-01', 'Kamis', '19:25-19:25'),
(93, '', '0137749650300013', 'k1', 'SDS1', '2', '2019-05-06', 'Senin', '19:33-19:33'),
(94, '', '222', 'k1', 'SDS1', '1', '2019-05-15', 'Senin', '19:48-19:48'),
(95, '', '2235758659300033', 'k1', 'SDS', '2', '2019-05-14', 'Senin', '20:22-21:24'),
(96, '', '2235758659300033', 'k1', 'SDS', '2', '2019-05-14', 'Senin', '20:22-21:24'),
(97, '', '', '', '', '', '0000-00-00', '', '-'),
(98, '196612181986032002', '', 'k1', 'S001', '', '0000-00-00', 'Senin', '-'),
(99, '196401211983022001', '195908271986032004', 'k1', 'S002', '', '0000-00-00', 'Senin', '-'),
(100, '196401211983022001', '195908271986032004', 'k1', 'S002', '', '0000-00-00', 'Senin', '-'),
(101, '3937759661200032', '2222222', 'k4', 'SDS', '2', '2019-07-10', 'Rabu', '08:30-10:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
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

CREATE TABLE `kepsek` (
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
('196209011981122001', 'Nelfia, SH', '1962-08-31', 'P', '081363471854', 'Jln. Perintis Kemerdekaan No.31'),
('196401211983022001', 'Dra. Sri Ramayenti', '1969-01-21', 'P', '082317197000', 'Komp SDN 04 Garegeh'),
('196402091983082001', 'Dra. HJ. Elfa. A', '1964-02-09', 'P', '085274011963', 'JL.Mandiangin No 49 E'),
('196410021984102001', 'Hj. Asnijar, S.Pd', '1964-10-02', 'P', '085272784887', 'Tangah Jua'),
('196502261986032004', 'Nurhayati, S.Pd', '1965-02-26', 'P', '085365242699', 'Jln Flamboyan III no.3 Inkorba Bukittinggi'),
('196508061987081001', 'Nofiar Arif, S.Pd', '1965-08-06', 'L', '081363354947', 'Pintu Kabun'),
('196612181986032002', 'Dra. Deswita', '1969-12-18', 'P', '082169733700', 'Gurun Panjang'),
('197204271999122002', 'Nevi Gumaira, S.Pd', '1972-04-27', 'P', '085272948028', 'Parit Antang'),
('197211101995022001', 'Nefri Asnisah, S.Pd', '1972-11-10', 'P', '081363435656', 'Perumahan Lambah Prima BLOK D No.1 Ampek Angkek'),
('3937759661200032', 'Gantino Habibi, M.Pd', '1981-06-05', 'L', '085274646891', 'Perumahan Rachill Blok C 2'),
('8952741643300022', 'R. Sorta Situngkir, S.Pd', '1962-06-20', 'P', '085274995683', 'Ranah Batang Buo, Garegeh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
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
  `File` varchar(100) NOT NULL,
  `File2` varchar(100) NOT NULL,
  `File3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`Id_Nilai`, `Id_Jadwal_Nilai`, `NIP_Guru_Nilai`, `tgl_a`, `Skor_A`, `tgl_b`, `Skor_B`, `tgl_c`, `Skor_C`, `Komentar`, `File`, `File2`, `File3`) VALUES
(25, '45', '3334752655300003', '2019-04-21', '92.85', '2019-04-21', '83.03', '2019-06-20', '79.71', 'perlu pengelompokan siswa dengan baik', 'WALLPAPER 2016B.jpg', '', ''),
(26, '47', '7147746648300073', '2019-04-21', '100', '2020-02-05', '17.63', '2019-04-21', '100', 'Pembelajaran telah terlaksana dengan baik, namun dalam', '', '', ''),
(27, '98', '2235758659300033', '2019-05-30', '100', '2019-05-30', '85.93', '2019-05-30', '83.86', 'Tingkatkan lagi prestasinya....', 'Animasi bergerak untuk powerpoint (1) - tepuk tangan.gif', '', ''),
(28, '54', '198601202010012019', '2019-06-20', '85.71', '2019-06-20', '84.15', '2019-06-20', '78.65', '', '', '', ''),
(29, '54', '198601202010012019', '2019-06-20', '85.71', '2019-06-20', '84.15', '2019-06-20', '78.65', '', '', '', ''),
(30, '54', '198601202010012019', '2019-06-20', '85.71', '2019-06-20', '84.15', '2019-06-20', '78.65', '', '', '', ''),
(31, '54', '198601202010012019', '2019-06-20', '78.57', '2019-06-20', '84.15', '2019-06-20', '78.65', '', '', '', ''),
(32, '54', '198601202010012019', '2019-06-20', '92.85', '2019-06-20', '84.15', '2019-06-20', '78.65', '', '', '', ''),
(33, '54', '198601202010012019', '2019-06-20', '92.85', '2019-06-20', '84.15', '2019-06-20', '78.65', '', '', '', ''),
(34, '54', '198601202010012019', '2019-06-20', '92.85', '2019-06-20', '84.15', '2019-06-20', '78.65', '', '', '', ''),
(35, '60', '198402272009011002', '2019-06-20', '100', '2019-06-20', '95.08', '0000-00-00', '', '', '', '', ''),
(36, '60', '198402272009011002', '2019-06-20', '85.71', '2019-06-20', '95.08', '0000-00-00', '', '', '', '', ''),
(37, '60', '198402272009011002', '2019-06-20', '85.71', '2019-06-20', '95.08', '0000-00-00', '', '', '', '', ''),
(38, '60', '198402272009011002', '2019-06-20', '85.71', '2019-06-20', '95.08', '0000-00-00', '', '', '', '', ''),
(39, '45', '3334752655300003', '2019-06-20', '100', '0000-00-00', '', '0000-00-00', '', 'perlu pengelompokan siswa dengan baik', 'WALLPAPER 2016B.jpg', '', ''),
(40, '33', '197210161997022001', '2019-06-20', '85.71', '0000-00-00', '', '0000-00-00', '', '', '', '', ''),
(41, '71', '198505102008021001', '2019-06-20', '35.71', '2019-06-20', '92.18', '0000-00-00', '', '', '', '', ''),
(42, '60', '198402272009011002', '2019-06-20', '85.71', '2019-06-20', '95.08', '0000-00-00', '', '', '', '', ''),
(43, '53', '197807032011012001', '2019-06-20', '100', '0000-00-00', '', '0000-00-00', '', '', '', '', ''),
(44, '74', '9649 7636 6421 0132', '2019-06-20', '85.71', '2019-06-20', '86.60', '2019-06-20', '87.38', '', '', '', ''),
(45, '44', '2235758659300033', '2019-09-10', '78.57', '2019-09-10', '86.38', '2019-09-10', '81.51', 'Lengkapi lagi Kelengkapan Administrasi kelasnya...', '', '', ''),
(46, '45', '3334752655300003', '2019-12-08', '71.42', '0000-00-00', '', '0000-00-00', '', '', '', '', ''),
(47, '45', '3334752655300003', '2019-12-25', '0', '0000-00-00', '', '0000-00-00', '', '', '', '', ''),
(48, '47', '7147746648300073', '2020-02-05', '28.57', '2020-02-05', '17.63', '0000-00-00', '', 'Pembelajaran telah terlaksana dengan baik, namun dalam', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `Kode_Sekolah` varchar(50) NOT NULL,
  `Nama_Sekolah` varchar(50) NOT NULL,
  `NIP_Kepsek_Sekolah` varchar(50) NOT NULL,
  `Foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`Kode_Sekolah`, `Nama_Sekolah`, `NIP_Kepsek_Sekolah`, `Foto`) VALUES
('S001', 'SD Negeri 01 Benteng Pasar Atas', '196612181986032002', 'sdn01bentengpasaratas.png'),
('S002', 'SD Negeri 02 Percontohan', '196401211983022001', 'sdn02percontohan.png'),
('SD04', 'SD Negeri 04 Bukit Apit Puhun', '196502261986032004', 'sdn04bukitapitpuhun.png'),
('SD07', 'SD Negeri 07 Teladan Bukik Cangang', '196410021984102001', 'sdn07teladan.JPG'),
('SD10', 'SD Negeri 10 ATTS', '196508061987081001', 'sdn10atts.png'),
('SD11', 'SD Negeri 11 Bukit Apit Puhun', '197211101995022001', 'sdn11bukikapitpuhun.png'),
('SD13', 'SD Negeri 13 Bukit Apit Puhun', '197204271999122002', 'sdn13bukitapitpuhun.png'),
('SD14', 'SD Negeri 14 ATTS', '196402091983082001', '14atts.png'),
('SDS', 'SD Swasta Al Azhar Bukittinggi', '3937759661200032', 'sdswastaalazhar.png'),
('SDS1', 'SD Swasta Fransiskus Bukittinggi', '8952741643300022', 'sdswastafransiskus.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_User`, `Id_Usergroup_User`, `Username`, `Password`, `Foto`) VALUES
(56, 2, '3937759661200032', '$2y$10$DnW33A9URMRO5S4ne8qmtewfNIfvk7eHjg/OnL0a92modwxXNy01i', 'gantino habibi.jpg'),
(57, 1, 'riski', '$2y$10$FX5fKkhuaNdMOioy89oX2u8sCNKjBmty1xIRV9hDlOW0nSfqbzdYW', '14582__ais.database.model.file.FotoMahasiswa_2001sk.jpg'),
(58, 1, 'darmansyah', '$2y$10$oo5tTYna1EouWOlAo9aaf.ig98Mja4fyIkAld.senLZf7JK9qZ5ze', 'IMG_20181101_115115_298red.JPG'),
(63, 1, 'deniputri', '$2y$10$Xj0B.KMgT13NHQOnVTpefemiBiPyAje0pOaGd3N7eEthqHCh5iusy', ''),
(64, 2, '196612181986032002', '$2y$10$U..qu11q5Y8ALSTHlIxqaebGIXEL0nKFms5uU3FU5wb/0y.ufJuH2', 'images[1][10].jpg'),
(65, 2, '196401211983022001', '$2y$10$DYTLH8HcHaN0U9NTS3KKVeKJ4fmprsSmZVZdObuDJGwyp2TGcMeEa', 'images[1][10].jpg'),
(66, 2, '196502261986032004', '$2y$10$yJf24Ay9msxVZLlKhYXQIOlER4JF1WiW3rpSarQzF9FfIAEfUmvb2', 'images[1][10].jpg'),
(67, 2, '197204271999122002', '$2y$10$0A6cDx1FAeQjSxCC.hq80uFJCCiP.d52EsYBPUlOpsdvsqGjot7W2', 'images[1][10].jpg'),
(68, 2, '196402091983082001', '$2y$10$AfGrvakirXm7MveIV/X8U.QWQkBLk58RE7QMkI8jQpawXQOWFuChC', 'images[1][10].jpg'),
(69, 2, '196410021984102001', '$2y$10$lJtSfM3reUJDIGCq1jxjo.Fy6Cez8A.ZFapXC1EjRc0CT7dF/86wm', 'images[1][10].jpg'),
(70, 2, '196508061987081001', '$2y$10$ypU4aScopZVcl4FamapNF.M/nwvi2CdjGtL71QXosPdr/tb0h7oEu', 'images[1][10].jpg'),
(71, 2, '197211101995022001', '$2y$10$SXgqIg3XzDNNt5grlMOBCOE1w2nGihXdr9vjr1wqYsajeXt1NJYIC', 'images[1][10].jpg'),
(72, 3, '196310011983032006', '$2y$10$XRx8MSVldiOGLenThuU0TOf8QrjSsM4VYG6a4Bmb1sr/Xv9JirGoK', 'images[1][10].jpg'),
(73, 3, '196204161983032005', '$2y$10$AOOH.pr5L8Xr.SGVRCRlYeSwmOsWJnXqsEW5l4kCnCqYDOJE7s786', 'images[1][10].jpg'),
(74, 3, '196204161983032005', '$2y$10$pNYthRZTAaVD8a07ToaWFuk8i8kaDOVPWtqyFYX75LZzmD2X//r12', 'images[1][10].jpg'),
(75, 3, '196206291983032002', '$2y$10$YWMKdpeLASWeEERnLQg2qu.nthsV0unF0shDcQmZY3Mx/LGhigHSS', 'images[1][10].jpg'),
(76, 3, '196502021986032009', '$2y$10$Zj9.ggxUnCqPriSkknkdY./Eq3amzscW84sJh0Z374pS3PPEGJA4C', 'images[1][10].jpg'),
(77, 3, '197109092002122002', '$2y$10$hyzAQnsBmKQVMNBAGSbqYu4YWopp9msRIuWxw3oA6auILc743R.JC', 'images[1][10].jpg'),
(78, 3, '196401221983032002', '$2y$10$kkcIEE8RMvR1Fbp0uUBanevYpfEAh0AasjecvPH94o0FAKl6SNllC', 'images[1][10].jpg'),
(79, 3, '196402151983052004', '$2y$10$XfvG834A7F4xxWRjisrxrOO45bP4ZD6onbOtNGCOOmtzijAgwIuta', 'logo.PNG'),
(80, 3, '196408031986032004', '$2y$10$whodOUNfvwSzm/hHbLkugOzT1NWnTK17iOTdKwa6ZzzkgEbV7HJru', 'images[1][10].jpg'),
(81, 3, '196402151983052004', '$2y$10$GIkmFGkjVvhEMyq6jdUg9ODmECWfqRybGCArbObBTCcEAHd2Rs95C', 'images[1][10].jpg'),
(82, 3, '195908271986032004', '$2y$10$rr2.Z3vgNeekaswt.NuXBeKPf5o38ybm7AEHJAAV0NyPMTx1XGfPC', 'images[1][10].jpg'),
(83, 3, '196512161986032002', '$2y$10$lRKRtUKUUt0QvsDERUNjiu0f3l3v0rW.UcAh1oK0gGu4/nhYmWqf.', 'images[1][10].jpg'),
(84, 3, '196508291988082001', '$2y$10$JhVnbjRpiPQhDDLwXm5XIOJbXPbQ1YrWHAXlJJqzwlTnUTVneiymC', 'images[1][10].jpg'),
(85, 3, '196006011982012005', '$2y$10$v/HEoajfqUUTqI/CJ4S8muD.TDPbrm4Az4SGLb0FdQJrEX7hqhb7S', 'images[1][10].jpg'),
(86, 3, '198003302009012001', '$2y$10$xL.hJ2nq.9zDLAW7iiQErOhM8W/1O4Xix0h9glI8Sq19N5BVP1Obi', 'images[1][10].jpg'),
(87, 3, '198003132003122007', '$2y$10$QQ1p9pKNlq45kSTkZmu5meFDlSsuJVMk2hY9Lm1HSnYLUMXzTu50q', 'images[1][10].jpg'),
(88, 3, '198008142006042009', '$2y$10$X0KbZMX5oMppS0elWKrJoulj5x1yjfdYDHJXMMwD2P7KDvclTcBIu', 'images[1][10].jpg'),
(89, 3, '197210161997022001', '$2y$10$o73ZbW3qtzjs4o05RTlmU.MwanwU02x040wPJULQUC.wk.Bd4UV32', 'images[1][10].jpg'),
(90, 3, '198608072009032004', '$2y$10$B0KnoO4VubRh9bNZWUAipeIR9Fi1YMq5TpnHuX4eRs4a8WULBvBQm', 'images[1][10].jpg'),
(91, 3, '196206201983032003', '$2y$10$9asThYyKxMoIRT4tNxHnV.qzDGhgGniI9170ay.Yk.rnBCkmkEn3i', 'images[1][10].jpg'),
(92, 3, '196408071984102003', '$2y$10$aRa9pWTtA1AIsjVyPZUoq.nFli.ymONnsU7zzjS5yvFenwAI1Dthy', 'images[1][10].jpg'),
(93, 3, '198207062006042013', '$2y$10$OM2GWLuIsbxBsltCkdUi3eELjdrGvHAfJHd7RKppBPU2kfhwjUmSO', 'images[1][10].jpg'),
(94, 3, '198311242008022002', '$2y$10$Lrjajr1qqYgYTLWq1pDG7ejygETnl5Y5O3j0FAWJV709jLvdDjvT6', 'images[1][10].jpg'),
(95, 3, '198311242008022002', '$2y$10$Er72pwTnVM7eSopaSw1bH.8EoGplMGjeMXv4Bai2r3IMlbVqPLIJK', 'images[1][10].jpg'),
(96, 3, '2235758659300033', '$2y$10$RMUwgFAQdgiktBdb6g090e/vEEq2E4NU2Vxt5VhqNDWfIc5/DSnVi', 'images[1][10].jpg'),
(97, 3, '3334752655300003', '$2y$10$pcDHa5hkoy8ccCeqycpWKuJujLU.HVgzU7x5USx.T5qqZSDyxQX8W', 'images[1][10].jpg'),
(98, 3, '6951755657210072', '$2y$10$p57JzqAhGVHdCw5aEbAZuuk2HGpTc0OGh2BYIvohTc2sY092Ajndy', 'images[1][10].jpg'),
(99, 3, '7147746648300073', '$2y$10$Lnx3otlP/c8g8PjYvtAn8Omd/mY7UOApsXCvsSzaLX3o2AYVa/hQy', 'images[1][10].jpg'),
(100, 3, '7652752654300042', '$2y$10$vfMUvUF4F/52m33LaFidDewbwH20I4erFsMT8Y7LmJeWR77IBV/ve', 'images[1][10].jpg'),
(101, 3, '9938747649300102', '$2y$10$OGNDtQ7FErT9LapX/T7epu/8G7Tv2p5BIJeFw2tsqmZ5RPRe.tVtu', 'images[1][10].jpg'),
(102, 3, '196107271983082001', '$2y$10$PfkrjfWR7XCuNsBzjCYqzOLZcRdvTFIYwCSFMbBB8r4LXjZa3xMfW', 'images[1][10].jpg'),
(104, 3, '197807032011012001', '$2y$10$JiazHCHY6NScvlDRj6BfOOK0d4WEApbl6qkiw/oyIOGmf1o0wUrpO', 'images[1][10].jpg'),
(105, 3, '198601202010012019', '$2y$10$VC8XeiRMAQ5Bxiic4OmxWO1.fW522DRxNoacQ4u5SdDPYsFN7v6k6', 'images[1][10].jpg'),
(106, 3, '198604112008022001', '$2y$10$281uEg9PB5Svec/1GsT/kurK9v2gPuabxh5gkkFjoZm685ZRy0.x2', 'images[1][10].jpg'),
(107, 3, '195812111981122002', '$2y$10$p2IdP9Ssx3Q3FUwBlwvX0uO0LS8/91Xdy6otxIjHufSspkXQ0X5W.', 'images[1][10].jpg'),
(108, 3, '196706212007012006', '$2y$10$LDiTWrGa.ZrTJAw1EhiEB.3osj7vymiuDbQgvJyp6oLZ192LH5.lq', 'images[1][10].jpg'),
(109, 3, '196905191991032002', '$2y$10$THbheBWLWExdewbdnK3ar.odM5QX/FDVdaksldhjeon71vc7fCbQi', 'images[1][10].jpg'),
(110, 3, '196906082003122002', '$2y$10$pXxVyngZT.zvcBvIqejncejl6KahKHaNpBma81glJk2EWXt2KTCF2', 'images[1][10].jpg'),
(111, 3, '198302112009012002', '$2y$10$40Z.6WUUf1FDIAhYmdfn.uYpw4F.MQgLfBU7NEYvT6pypZ6GwAPOa', 'images[1][10].jpg'),
(112, 3, '198402272009011002', '$2y$10$NcKvfLuypgUwXBasrcx25ejVfijb2tZUAYBZ./LHta1g1ty48JHsm', 'images[1][10].jpg'),
(113, 3, '196311221984032002', '$2y$10$v7Df.gd7XxT9Fa0B8clUzuAIjEBCGn9NhUZEBUQ/KcPM8D0tJCf8G', 'images[1][10].jpg'),
(114, 3, '196611172007012006', '$2y$10$yRqOG48kKqVzjOAwJpSWo.RPoAtBRxE/MixoGdapNRjOs2JvDCpQm', 'images[1][10].jpg'),
(116, 3, '197504272009012001', '$2y$10$k4h8QTlDBtjPJ4VpA90pyOr7EgDP2qQoxp4opZMwhJaJRqZ/OoH/S', 'images[1][10].jpg'),
(117, 3, '198004232003122006', '$2y$10$uS6ILqCuPMQzsEYPNxBWxe6la4QgR6jLw0wHn8YKk9QbwaJgiLFC.', 'images[1][10].jpg'),
(118, 3, 'anggunpurnamasari', '$2y$10$J5j3/sApPtJWUuKJzlhkfurOJdsjbSboYar22oDhexSQk5D.mBvUu', 'images[1][10].jpg'),
(119, 3, '196812012008012008', '$2y$10$/FNvfHDq/aUVq8fNVabUOuVX3EUEZbewnKdULiEYEJVV0t0PD3uCK', 'images[1][10].jpg'),
(120, 3, '198302102010012014', '$2y$10$ZMCqk.dHQ1FyiYO00o95geJI501iUnwWBnb9ViuzzmI2Zx3CWXrpK', 'images[1][10].jpg'),
(121, 3, '198505102008021001', '$2y$10$EJKWPz7fD3kM/VtEag/pJeiEPoodga3L8pRGw0drpW3WNEo5aZC7.', 'images[1][10].jpg'),
(122, 3, '198508072009032002', '$2y$10$mvOGFw366MYctqsJpZWab.gLcz3tN7U9ytxp7g1MRURd9NkupiLhK', 'images[1][10].jpg'),
(123, 3, '9649 7636 6421 0132', '$2y$10$qIK7W7uY3YxtOCjOZcMmFOyOIxue4WViTaFu8WeYsG6Djo7hss3OK', 'images[1][10].jpg'),
(124, 3, '0137749650300013', '$2y$10$jFH6smUoQCf16VxfeYO4gukjVSqntdY8bi/MkNSH9unBKU1e8GP8W', 'images[1][10].jpg'),
(125, 3, '0335745648200033', '$2y$10$Xk/SWxqGl4JAq3P8bAFPDejHAjJn/E1MbZIIIcajqPL.sBR4gLEu6', 'images[1][10].jpg'),
(126, 3, '1449758660300012', '$2y$10$lcRdc/GWgvaovTiHl2eH7u3WR79GeyV85GE8GSEqIHC3HhFFgdSNK', 'images[1][10].jpg'),
(127, 3, '5146756657300033', '$2y$10$1ESpCsn52RoyX57bzPmfWeacXlnzOvyZlv9wbXALJYjZHukKIkA3G', 'images[1][10].jpg'),
(128, 3, '6535759661300030', '$2y$10$SdT1LZxUzDwe6zD6Msful.a6yWyn4SX8NY/jEjS54pReGQ2iSQbw6', 'images[1][10].jpg'),
(129, 3, '9541745647300022', '$2y$10$OUTcDoVmntl6zb3pphwcB.KC53.gBUlmbi4SjI1VkRuUu4KJ998TK', 'images[1][10].jpg'),
(130, 2, '8952741643300022', '$2y$10$Im/NB9.S.N6HWA3bIWwG0eKD18NXswy1/VHAWFDd4433cG8k3xjlG', 'images[1][10].jpg'),
(131, 3, '197003072005012004', '$2y$10$9Bu8x3ugxwwIbBLuZnsLNOO0IqhsAEuBLzNb1GPUUiH7pF3RjsJf6', 'images[1][10].jpg'),
(133, 3, '197202082006042002', '$2y$10$tO6YKd9397i8G9XeajWUs.tj.TCaB2ThdW2q7dM6NPVKjt4IzWwCy', 'images[1][10].jpg'),
(134, 3, '196107181982072002', '$2y$10$pJ9ZfnHem9SlqbNuCjUBbu/mZO/I7sP3PSXr.jeDJ4aN.omVInnui', 'images[1][10].jpg'),
(135, 1, 'Arifmiboy', '$2y$10$oDuBYYrWTuWnRNI6n0XULui82ovUjPBvVGEFvVVgdkd4QeH/1TwKq', 'foto 11-1.jpg'),
(136, 1, 'boy', '$2y$10$wu4MTbeg6ScoLHi/Mlnv6OjY13OnsKHgEdGki6yi3cfp2erpIs2nS', 'images.jpg'),
(137, 1, 'Fauza', '$2y$10$/R2.kvQxmlKXiULBxp8q1.WzpBYixmCPjHURGnCV/BX0wOzKCWUg6', ''),
(138, 1, 'Arifmiboy2', '$2y$10$3yZvvFgePVlTvc8D1tLuDO89lqWVslU9w7.qdAf4HrTLIYSOhN1DK', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usergroup`
--

CREATE TABLE `usergroup` (
  `Id_Usergroup` int(11) NOT NULL,
  `Nama_Usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP_Guru`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Id_Jadwal`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_Kelas`);

--
-- Indeks untuk tabel `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`NIP_Kepsek`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Id_Nilai`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`Kode_Sekolah`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- Indeks untuk tabel `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id_Usergroup`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `Id_Jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `Id_Nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT untuk tabel `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id_Usergroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
