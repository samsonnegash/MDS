-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 07:33 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_register_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `data` varchar(1000) NOT NULL,
  `Qrcode` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `data`, `Qrcode`) VALUES
(113, '', '830332'),
(114, '', '488936'),
(115, '', '580567'),
(116, '', '605610'),
(117, '', '977020'),
(118, '', '556028'),
(119, '', '525633'),
(120, '', '996931'),
(121, '', '924900'),
(122, '', '915396'),
(123, '', '624619'),
(124, '', '553245'),
(125, '', '521540'),
(126, '', '612867'),
(127, '', '939260'),
(128, '', '849689'),
(129, '', '595822'),
(130, '', '905153'),
(131, '', '513525'),
(132, '', '907621'),
(133, 'Doc1.pdf', '926396'),
(140, 'Doc1.jpg.txt', '983150'),
(142, 'Doc1.pdf', '561961'),
(144, 'base.html', '524170'),
(147, 'Doc1.pdf', '675031'),
(149, 'Doc1.jpg.docx', '648383'),
(150, 'Doc1.pdf', '656723'),
(156, 'Doc1.pdf', '858634'),
(162, 'Lab 3 - Network Theorems - Copy.docx', '460054'),
(164, 'Doc1.docx', '872535'),
(168, 'Doc1.jpg.docx', '977277'),
(172, 'base.html', '655444'),
(175, 'Doc1.jpg.docx', '591743'),
(177, 'Doc1.jpg.docx', '787742'),
(180, 'Doc1.pdf', '566526'),
(182, 'IMG_20191020_133129.jpg', '954130'),
(183, 'Doc1.jpg.txt', '687317'),
(189, 'IMG_20191020_133129.jpg', '748890'),
(190, 'Doc1.jpg.txt', '741728'),
(191, 'Doc1.docx', '657051');

-- --------------------------------------------------------

--
-- Table structure for table `fordoc`
--

CREATE TABLE `fordoc` (
  `id` int(100) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fordoc`
--

INSERT INTO `fordoc` (`id`, `docname`, `password`) VALUES
(1, 'samson', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(255) NOT NULL,
  `Qrnum` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`) VALUES
(1, 'John Smith', 'john', '12345'),
(2, 'asda', 'asdasd', 'asdasdasdasd'),
(3, 'm,.', 'm,', 'mk,l'),
(4, 'hjk', 'hj', 'hjkl'),
(5, 'sam', 'sam', '1122'),
(6, '???', '??', 'ghj'),
(7, 'samson negash', 'sami', '1122'),
(8, 'samson negash', 'samit', 'sam'),
(9, 'samson', 'samisha', 'yonasbruk'),
(10, 'samson negash', 'sami', '@@'),
(11, 'samson', 'sami', '123'),
(12, 'yohannes', 'yo', '123'),
(13, 'wer', 'dfg', 'ghj'),
(14, 'samuel', 'samu', '112233'),
(15, 'sami', 'sam', '123'),
(16, 'sam', 'sdfghjkl', 'cvbnm,.'),
(17, 'fg', 'bnm', 'hj'),
(18, 'samson negash', 'sami', '12345'),
(19, 'yohannes', 'jo', '1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fordoc`
--
ALTER TABLE `fordoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `fordoc`
--
ALTER TABLE `fordoc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
