-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 07:20 PM
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
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `did` varchar(3) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `category` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`did`, `dname`, `detail`, `category`, `date`) VALUES
('001', 'wednesday', 'โรงเรียนที่มีแต่เหล่าตัวประหลาดสุดเฮฮา', 'comedy', '2022-11-23'),
('002', 'crows zero II', 'โรงเรียนที่มีตะนักเลงแก่งแย่งชิงดีกัน', 'action', '2009-09-10'),
('003', 'black adam', 'หนุ่มกล้ามโตมีพลังสายฟ้า', 'action', '2022-07-29'),
('004', 'triple x', 'โหดมันบู๊ล้างผลาญบุกป่าระเบิดภูเขา', 'action', '2002-08-09'),
('005', 'meg', 'หนีฉลามยักในตำนาน', 'horror', '2018-08-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`did`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
