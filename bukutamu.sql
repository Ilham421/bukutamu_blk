-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 09:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `NIK` varchar(20) NOT NULL,
  `Nama` varchar(250) NOT NULL,
  `Instansi` varchar(250) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `NoHp` varchar(15) NOT NULL,
  `Tgl_visit` date NOT NULL,
  `Bidang` enum('Kepala Balai','Tata Usaha dan Kepegawaian','Bidang Penyelenggara','Bidang program dan evaluasi','TIK','Elektro','Pariwisata','Refrigeration dan Welding') NOT NULL,
  `Ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_tamu`
--

INSERT INTO `tb_tamu` (`NIK`, `Nama`, `Instansi`, `Alamat`, `NoHp`, `Tgl_visit`, `Bidang`, `Ket`) VALUES
('163553581', 'hdagdugu', 'uiahidfgai', 'qedbjabdb', '88913991', '2022-09-23', 'Bidang program dan evaluasi', 'dadad'),
('31213871371733', 'Bayu', 'BLK', 'Bekasi', '0813183818318', '2022-09-23', 'Pariwisata', 'Rombongan Si Canggih'),
('3172032702140001', 'Malik', 'BLK', 'Bekasi', '0813879178313', '2022-09-23', 'TIK', 'Rombongan Si Canggih'),
('3172032702140002', 'Ilham', 'BLK', 'Bekasi', '0813778137173', '2022-09-23', 'TIK', 'Rombongan Si Canggih');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`) VALUES
(1, 'Ilham', '$2y$10$LfgV./ikLuPnS6GKQ7pcJeGTSBLEeJLcJiR5jeWFpW.aekqoRlr1e', '2022-09-23'),
(2, 'Malika', '$2y$10$w5r7Hq7B6SL1r/pX/aPab.CJLG0b84OXectuDlIxf9uY0lQHTkGu6', '2022-09-23'),
(3, 'Bayu', '$2y$10$UmPnqY6mCfov31fr527z1.OUSxbvDVkSMbuErY3TiLYz9VSi2d.IG', '2022-09-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
