-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 03:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `id_tutorial` text NOT NULL,
  `bintang` int(11) NOT NULL,
  `komen_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `nama`, `email`, `id_tutorial`, `bintang`, `komen_review`) VALUES
(4, 'Stevani', 'stev@gmail.com', '7', 1, 'jelek'),
(5, 'Ron', 'ron@gmail.com', '3', 4, 'video tutorial sangat jelas'),
(6, 'Stevani', 'stev@gmail.com', '4', 5, 'tes'),
(7, 'Stevani', 'stev@gmail.com', '3', 4, 'lumayan');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `link_video` text NOT NULL,
  `average_star` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id`, `judul`, `link_video`, `average_star`) VALUES
(3, 'Cara Push Up yang Benar!', 'https://www.youtube.com/watch?v=IODxDxX7oi4', '0'),
(4, 'Yuk Lihat Cara Sit Up yang Benar', '	https://www.youtube.com/watch?v=amaKamAUjAY', '0'),
(7, 'Cara Bisa Pull Up!', 'https://www.youtube.com/watch?v=xf7ctwjcYjo', '0'),
(9, 'Yuk Lihat Cara Squat yang Benar Yuk!', 'https://www.youtube.com/watch?v=YaXPRqUwItQ', '0'),
(10, 'Cara Melatih Biceps dengan Benar!', 'https://www.youtube.com/watch?v=hl1IhtlIX9o', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_dpn` text NOT NULL,
  `nama_blkg` text NOT NULL,
  `no` varchar(13) NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama_dpn`, `nama_blkg`, `no`, `jabatan`) VALUES
(1, 'tep', 'tep', '', '', '', 'admin'),
(3, '12', '12', 'abs', 'abs', '3692581470', ''),
(4, 'ijo.com', '123', 'adi', 'adi', '123', ''),
(5, 'ijo.com', '123', 'adi', 'adi', '123', ''),
(6, 'ijo.com', '123', 'adi', 'adi', '123', ''),
(7, 'ron@gmail.com', 'ron99', 'tes', 'tes', '0', ''),
(8, 'stev@gmail.com', 'stev99', 'Stevani', 'Wirya', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
