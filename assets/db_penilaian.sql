-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2020 pada 11.23
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penilaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `nik` varchar(8) NOT NULL,
  `emp_name` varchar(128) NOT NULL,
  `departement` int(11) NOT NULL,
  `divisi` int(11) NOT NULL,
  `level_org` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employe`
--

INSERT INTO `employe` (`id`, `nik`, `emp_name`, `departement`, `divisi`, `level_org`, `password`) VALUES
(1, 'CG000241', 'Henry Charles', 3, 1, 'N-1', '05051978'),
(2, 'CG000446', 'Indra Yudison', 2, 1, 'N-1', '04021987'),
(3, 'CG000609', 'Fendi Sumarta', 4, 1, 'N-1', '23021986'),
(4, 'CG000046', 'Rinto Suharmoko', 5, 2, 'N-1', '02031978'),
(5, 'CG000111', 'Eko Budi Wibowo', 8, 2, 'N-1', '04051969'),
(6, 'CG000153', 'Richard Oktavianus', 10, 2, 'N-1', '06101976'),
(7, 'CG000225', 'Nurhidaya Rusdi', 9, 2, 'N-1', '08041975'),
(8, 'CG000269', 'Eko Prastia Firmansyah', 7, 2, 'N-1', '19031985'),
(9, 'CG000010', 'Wiwik Septriandewi', 13, 3, 'N-1', '29091967'),
(10, 'CG000054', 'Rosi Rachmawati', 14, 3, 'N-1', '20121975'),
(11, 'CG000208', 'Michael Hanindhya', 12, 3, 'N-1', '17101975'),
(12, 'CG000314', 'Setyo Wibowo', 15, 3, 'N-1', '01061979'),
(13, 'CG000520', 'Henry Setiawan', 16, 3, 'N-1', '06081981'),
(14, 'CG000063', 'Anas Saiful Bakhri', 20, 4, 'N-1', '27121978'),
(15, 'CG000217', 'Herry Zulfan', 18, 4, 'N-1', '20071977'),
(16, 'CG000267', 'Khaidir Kasim', 21, 4, 'N-1', '02111971'),
(17, 'CG000552', 'Ikhsan Wahyudie', 19, 4, 'N-1', '18121979'),
(18, 'CG000643', 'Belafonti', 25, 5, 'N-1', '29111987'),
(19, 'CG000378', 'Aida Nurandini', 24, 5, 'N-1', '04091978'),
(20, 'CG000585', 'Andry Mulyono', 23, 5, 'N-1', '16091985'),
(21, 'CG000067', 'Ayu Kurnia Agustin', 27, 6, 'N-1', '30081980'),
(22, 'CG000278', 'Anne Effendi', 28, 6, 'N-1', '06111974'),
(23, 'CG000619', 'Charles Gatan', 29, 6, 'N-1', '02081981'),
(24, 'CG000426', 'Agustina', 3, 1, 'N-2', '08081986'),
(25, 'CG000437', 'Nanda Adiya Pradana', 3, 1, 'N-2', '06041989'),
(26, 'CG000513', 'Mohamed Reza Hasyandi', 2, 1, 'N-2', '27111989'),
(27, 'CG000554', 'Sinung Raharjo', 4, 1, 'N-2', '25011988'),
(28, 'CG000566', 'Leonardus Dony Panova', 2, 1, 'N-2', '05111983'),
(29, 'CG000613', 'Bresti Alma Mustikaningrum', 3, 1, 'N-2', '23091992'),
(30, 'CG000077', 'Sofyan', 10, 2, 'N-2', '03071986'),
(31, 'CG000182', 'Feri Fachrudin Adinegara', 5, 2, 'N-2', '25021980'),
(32, 'CG000325', 'Rossa Laily', 9, 2, 'N-2', '09011991'),
(33, 'CG000411', 'FX Laga Satya Adi Pratama', 7, 2, 'N-2', '11101984'),
(34, 'CG000427', 'Robby Ismail', 9, 2, 'N-2', '17091983'),
(35, 'CG000448', 'Rekso Prabowo', 7, 2, 'N-2', '22121988'),
(36, 'CG000450', 'Reni Kristina', 7, 2, 'N-2', '14091982'),
(37, 'CG000516', 'Kurniati Sulthan', 9, 2, 'N-2', '21051986'),
(38, 'CG000557', 'Lilik Rahayu', 8, 2, 'N-2', '25071978'),
(39, 'CG000558', 'Fiona Ayu Vianthi', 8, 2, 'N-2', '10021982'),
(40, 'CG000608', 'Sastryani Syafri', 8, 2, 'N-2', '09011984'),
(41, 'CG000610', 'Retno Prasetyorini', 10, 2, 'N-2', '04041980'),
(42, 'CG000011', 'Mulayana Haris', 15, 3, 'N-2', '12041980'),
(43, 'CG000037', 'Karina Afriyanti', 13, 3, 'N-2', '21041982'),
(44, 'CG000053', 'Shinta Risnawatie', 14, 3, 'N-2', '30051979'),
(45, 'CG000180', 'Dian Haryanto', 15, 3, 'N-2', '31011984'),
(46, 'CG000221', 'Rusmanta', 13, 3, 'N-2', '14021974'),
(47, 'CG000247', 'Teja Permana', 15, 3, 'N-2', '01071980'),
(48, 'CG000275', 'Andrian Tantra', 12, 3, 'N-2', '12041984'),
(49, 'CG000324', 'Bintang Cemerlang Yoghastika', 12, 3, 'N-2', '14061986'),
(50, 'CG000417', 'Amar Fadhillah', 15, 3, 'N-2', '14081995'),
(51, 'CG000484', 'Pitra Zayanosa', 14, 3, 'N-2', '23041991'),
(52, 'CG000522', 'Natasha Soetio', 14, 3, 'N-2', '26091992'),
(53, 'CG000540', 'Bima Saputra Wijaya', 13, 3, 'N-2', '25031987'),
(54, 'CG000584', 'Diajeng Adisti Adjaraji', 12, 3, 'N-2', '02051984'),
(55, 'CG000598', 'Retno Dadari', 16, 3, 'N-2', '25121983'),
(56, 'CG000625', 'Prihambodo Dwi Sandhika', 16, 3, 'N-2', '08051984'),
(57, 'CG000014', 'Herry Nugroho', 20, 4, 'N-2', '19081977'),
(58, 'CG000109', 'Edwinda Ramadhani', 18, 4, 'N-2', '01101974'),
(59, 'CG000114', 'Hardiawan', 19, 4, 'N-2', '19111978'),
(60, 'CG000128', 'Joni', 18, 4, 'N-2', '25041978'),
(61, 'CG000184', 'Abdul Hamid Wijaya', 19, 4, 'N-2', '08041975'),
(62, 'CG000190', 'Iwan Setiawan', 19, 4, 'N-2', '14041979'),
(63, 'CG000193', 'Hadi Wibowo', 21, 4, 'N-2', '14011985'),
(64, 'CG000228', 'Kitson Hutabarat', 21, 4, 'N-2', '05081977'),
(65, 'CG000238', 'Farid Ridwan', 20, 4, 'N-2', '25081978'),
(66, 'CG000327', 'Griesye Widyaprimanika', 18, 4, 'N-2', '26091983'),
(67, 'CG000353', 'Lilik Sugiarto', 19, 4, 'N-2', '14091974'),
(68, 'CG000380', 'Matthews Mora', 20, 4, 'N-2', '08011980'),
(69, 'CG000389', 'Dadang Herdiyanto Nugroho', 21, 4, 'N-2', '13091984'),
(70, 'CG000422', 'Iwan Hernawan', 19, 4, 'N-2', '11061972'),
(71, 'CG000473', 'Berry Satya Yudhistira', 19, 4, 'N-2', '17091978'),
(72, 'CG000511', 'Funky Tri Doreta', 19, 4, 'N-2', '10031983'),
(73, 'CG000428', 'Richardo Nimrod Malton', 25, 5, 'N-2', '16021991'),
(74, 'CG000487', 'Angga Kurniawan', 24, 5, 'N-2', '05031985'),
(75, 'CG000551', 'M Dian Nur Cahyadi', 24, 5, 'N-2', '29051981'),
(76, 'CG000568', 'Rinaldi Distanto Hakim', 24, 5, 'N-2', '25111979'),
(77, 'CG000599', 'Eza Rinaldho Maystro', 23, 5, 'N-2', '03051989'),
(78, 'CG000612', 'Adila Hedianto Putri', 24, 5, 'N-2', '20061984'),
(79, 'CG000626', 'Jimmy Tandean', 22, 5, 'N-2', '06061983'),
(80, 'CG000068', 'Yessy Meilani', 28, 6, 'N-2', '15051980'),
(81, 'CG000189', 'Dewi Retno Sembodo', 27, 6, 'N-2', '28021980'),
(82, 'CG000287', 'Fenny Haryanto', 27, 6, 'N-2', '23021982'),
(83, 'CG000329', 'Mas Oka Hendriyana', 28, 6, 'N-2', '20101973'),
(84, 'CG000485', 'Fernando', 28, 6, 'N-2', '29051982'),
(85, 'CG000518', 'Marta Angelina', 29, 6, 'N-2', '01081990'),
(86, 'CG000555', 'Meutia Ikawidjaja', 29, 6, 'N-2', '22111993'),
(87, 'CG000429', 'Wahyudi', 26, 6, 'N-1', '01021989'),
(88, 'CG000462', 'Gandi Hafissoma Ruskandar', 26, 6, 'N-1', '23061990'),
(89, 'CG000415', 'Akhirul Kurniawan Akbar', 22, 5, 'N-1', '06121977');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_nilai`
--

CREATE TABLE `hasil_nilai` (
  `id` int(11) NOT NULL,
  `nik_self` varchar(8) NOT NULL,
  `nik_target` varchar(8) NOT NULL,
  `hub` enum('Peers','Subordinate') DEFAULT NULL,
  `jwb_1` int(1) NOT NULL,
  `jwb_2` int(1) NOT NULL,
  `jwb_3` int(1) NOT NULL,
  `jwb_4` int(1) NOT NULL,
  `jwb_5` int(1) NOT NULL,
  `jwb_6` int(1) NOT NULL,
  `jwb_7` int(1) NOT NULL,
  `jwb_8` int(1) NOT NULL,
  `jwb_9` int(1) NOT NULL,
  `jwb_10` int(1) NOT NULL,
  `jwb_11` int(1) NOT NULL,
  `jwb_12` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_nilai`
--

INSERT INTO `hasil_nilai` (`id`, `nik_self`, `nik_target`, `hub`, `jwb_1`, `jwb_2`, `jwb_3`, `jwb_4`, `jwb_5`, `jwb_6`, `jwb_7`, `jwb_8`, `jwb_9`, `jwb_10`, `jwb_11`, `jwb_12`) VALUES
(1, 'CG000010', 'CG000054', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'CG000010', 'CG000208', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'CG000010', 'CG000314', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'CG000010', 'CG000520', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'CG000046', 'CG000111', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'CG000046', 'CG000153', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'CG000046', 'CG000225', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'CG000046', 'CG000269', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'CG000054', 'CG000010', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'CG000054', 'CG000208', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'CG000054', 'CG000314', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'CG000054', 'CG000520', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'CG000063', 'CG000217', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'CG000063', 'CG000267', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'CG000063', 'CG000552', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'CG000153', 'CG000046', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'CG000153', 'CG000111', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'CG000153', 'CG000225', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'CG000153', 'CG000269', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'CG000208', 'CG000010', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'CG000208', 'CG000054', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'CG000208', 'CG000314', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'CG000208', 'CG000520', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'CG000217', 'CG000063', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'CG000217', 'CG000267', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'CG000217', 'CG000552', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'CG000225', 'CG000046', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'CG000225', 'CG000111', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'CG000225', 'CG000153', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'CG000225', 'CG000269', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'CG000241', 'CG000446', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'CG000241', 'CG000609', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'CG000267', 'CG000063', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'CG000267', 'CG000217', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 'CG000267', 'CG000552', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 'CG000269', 'CG000046', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 'CG000269', 'CG000111', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 'CG000269', 'CG000153', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 'CG000269', 'CG000225', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 'CG000314', 'CG000010', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 'CG000314', 'CG000054', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 'CG000314', 'CG000208', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 'CG000314', 'CG000520', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 'CG000378', 'CG000643', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 'CG000378', 'CG000585', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 'CG000520', 'CG000010', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 'CG000520', 'CG000054', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 'CG000520', 'CG000208', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 'CG000520', 'CG000314', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 'CG000552', 'CG000063', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 'CG000552', 'CG000217', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 'CG000552', 'CG000267', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 'CG000585', 'CG000643', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 'CG000585', 'CG000378', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 'CG000643', 'CG000378', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 'CG000643', 'CG000585', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(122, 'CG000010', 'CG000446', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(123, 'CG000010', 'CG000046', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(124, 'CG000010', 'CG000269', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(125, 'CG000046', 'CG000609', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(126, 'CG000046', 'CG000217', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(127, 'CG000046', 'CG000063', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(128, 'CG000054', 'CG000241', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(129, 'CG000054', 'CG000446', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(130, 'CG000054', 'CG000267', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(131, 'CG000054', 'CG000269', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(132, 'CG000063', 'CG000241', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(133, 'CG000063', 'CG000378', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(134, 'CG000063', 'CG000225', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(135, 'CG000063', 'CG000111', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(136, 'CG000153', 'CG000446', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(137, 'CG000153', 'CG000585', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(138, 'CG000153', 'CG000217', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(139, 'CG000153', 'CG000267', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(140, 'CG000153', 'CG000552', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(141, 'CG000208', 'CG000446', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(142, 'CG000217', 'CG000585', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(143, 'CG000217', 'CG000378', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(144, 'CG000217', 'CG000046', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(145, 'CG000225', 'CG000241', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(146, 'CG000225', 'CG000609', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(147, 'CG000225', 'CG000217', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(148, 'CG000225', 'CG000063', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(149, 'CG000225', 'CG000552', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(150, 'CG000241', 'CG000585', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(151, 'CG000241', 'CG000378', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(152, 'CG000241', 'CG000063', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(153, 'CG000241', 'CG000267', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(154, 'CG000241', 'CG000552', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(155, 'CG000241', 'CG000619', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(156, 'CG000241', 'CG000225', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(157, 'CG000241', 'CG000153', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(158, 'CG000241', 'CG000046', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(159, 'CG000267', 'CG000153', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(160, 'CG000267', 'CG000111', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(161, 'CG000269', 'CG000446', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(162, 'CG000269', 'CG000619', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(163, 'CG000314', 'CG000278', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(164, 'CG000378', 'CG000241', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(165, 'CG000378', 'CG000609', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(166, 'CG000378', 'CG000217', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(167, 'CG000378', 'CG000552', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(168, 'CG000378', 'CG000067', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(169, 'CG000520', 'CG000609', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(170, 'CG000520', 'CG000585', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(171, 'CG000520', 'CG000378', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(172, 'CG000520', 'CG000619', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(173, 'CG000520', 'CG000278', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(174, 'CG000552', 'CG000067', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(175, 'CG000552', 'CG000278', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(176, 'CG000552', 'CG000225', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(177, 'CG000552', 'CG000153', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(178, 'CG000552', 'CG000269', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(179, 'CG000552', 'CG000111', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(180, 'CG000585', 'CG000241', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(181, 'CG000585', 'CG000609', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(182, 'CG000643', 'CG000067', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(189, 'CG000429', 'CG000067', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(190, 'CG000429', 'CG000278', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(191, 'CG000429', 'CG000619', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(192, 'CG000429', 'CG000462', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(193, 'CG000619', 'CG000067', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(194, 'CG000619', 'CG000278', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(195, 'CG000619', 'CG000429', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(196, 'CG000619', 'CG000462', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(198, 'CG000415', 'CG000520', 'Peers', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dept`
--

CREATE TABLE `tbl_dept` (
  `id_dept` int(11) NOT NULL,
  `id_div` int(11) NOT NULL,
  `nama_dept` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `departement` (`departement`),
  ADD KEY `divisi` (`divisi`);

--
-- Indeks untuk tabel `hasil_nilai`
--
ALTER TABLE `hasil_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dept`
--
ALTER TABLE `tbl_dept`
  ADD PRIMARY KEY (`id_dept`),
  ADD KEY `id_div` (`id_div`);

--
-- Indeks untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT untuk tabel `hasil_nilai`
--
ALTER TABLE `hasil_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT untuk tabel `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
