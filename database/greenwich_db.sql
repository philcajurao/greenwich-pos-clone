-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 12:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenwich_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccounts`
--

CREATE TABLE `adminaccounts` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminaccounts`
--

INSERT INTO `adminaccounts` (`id`, `username`, `fname`, `lname`, `email`, `contact`, `password`) VALUES
(10, '12123123', 'CRIS PHILIP', 'CAJURAO', 'philcajurao@gmail.com', '09123456789', '222'),
(11, 'admin', 'Admin', 'Admin', 'jamaicajadesantos@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cashieraccounts`
--

CREATE TABLE `cashieraccounts` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashieraccounts`
--

INSERT INTO `cashieraccounts` (`id`, `username`, `fname`, `lname`, `email`, `contact`, `password`) VALUES
(1, 'hilai_73', 'Phil', 'Cajurao', 'philcajurao@gmail.com', '09123456789', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(255) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `item` varchar(50) NOT NULL,
  `itemdescription` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cash` varchar(255) NOT NULL,
  `custchange` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `cashier`, `item`, `itemdescription`, `price`, `cash`, `custchange`, `date`) VALUES
(8, 'hilai_73', '1245', '123456', '6789', '1234', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 10:06 AM'),
(9, 'hilai_73', '1245', '123456', '6789', '1234', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 10:06 AM'),
(10, 'hilai_73', '1245', '123456', '6789', '12341', ' ₱ 12218.00', 'Sunday, Dec 12 2021 | 10:09 AM'),
(11, 'hilai_73', '1245', '123456', '6789', '12341', ' ₱ 12218.00', 'Sunday, Dec 12 2021 | 10:09 AM'),
(12, 'hilai_73', '1245', '123456', '6789', '1', ' ₱ -6788.00', 'Sunday, Dec 12 2021 | 12:30 PM'),
(13, 'hilai_73', '1245', '123456', '6789', '1', ' ₱ -6788.00', 'Sunday, Dec 12 2021 | 12:30 PM'),
(14, 'hilai_73', '1245', '123456', '6789', '12314', ' ₱ 5525.00', 'Sunday, Dec 12 2021 | 12:33 PM'),
(15, 'hilai_73', '1245', '123456', '6789', '12314', ' ₱ 5525.00', 'Sunday, Dec 12 2021 | 12:33 PM'),
(16, 'hilai_73', '1245', '123456', '6789', '&#8369; 12341.00', ' ₱ 5552.00', 'Sunday, Dec 12 2021 | 12:34 PM'),
(17, 'hilai_73', '1245', '123456', '6789', '&#8369; 12341.00', ' ₱ 5552.00', 'Sunday, Dec 12 2021 | 12:34 PM'),
(18, 'hilai_73', '1245', '123456', '6789', '123', ' ₱ -6666.00', 'Sunday, Dec 12 2021 | 12:40 PM'),
(19, 'hilai_73', '1245', '123456', '6789', '123', ' ₱ -6666.00', 'Sunday, Dec 12 2021 | 12:40 PM'),
(20, 'hilai_73', '1245', '123456', '6789', '123', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 12:41 PM'),
(21, 'hilai_73', '1245', '123456', '6789', '123', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 12:41 PM'),
(22, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123114123', ' ₱ 122972892.00', 'Sunday, Dec 12 2021 | 12:45 PM'),
(23, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123114123', ' ₱ 122972892.00', 'Sunday, Dec 12 2021 | 12:45 PM'),
(24, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123114123', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 12:47 PM'),
(25, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123114123', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 12:47 PM'),
(26, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 12:47 PM'),
(27, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 12:47 PM'),
(28, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 12:48 PM'),
(29, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 12:48 PM'),
(30, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123', ' ₱ -141108.00', 'Sunday, Dec 12 2021 | 01:27 PM'),
(31, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123', ' ₱ -141108.00', 'Sunday, Dec 12 2021 | 01:27 PM'),
(32, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123', ' ₱ -141108.00', 'Sunday, Dec 12 2021 | 01:27 PM'),
(33, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 01:28 PM'),
(34, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 01:28 PM'),
(35, 'hilai_73', 'Bago', 'Hoy eto nagp', '141231', '123', ' ₱ 0.00', 'Sunday, Dec 12 2021 | 01:28 PM'),
(36, 'hilai_73', '222', '4567', '67890', '1234556', ' ₱ 1166666.00', 'Sunday, Dec 12 2021 | 01:43 PM'),
(37, 'hilai_73', '222', '4567', '67890', '1234556', ' ₱ 1166666.00', 'Sunday, Dec 12 2021 | 01:43 PM'),
(38, 'hilai_73', '222', '4567', '67890', '1234556', ' ₱ 1166666.00', 'Sunday, Dec 12 2021 | 01:43 PM'),
(39, 'hilai_73', '123', '123', '123', '124', ' ₱ 1.00', 'Sunday, Dec 12 2021 | 01:44 PM'),
(40, 'hilai_73', '123', '123', '123', '124', ' ₱ 1.00', 'Sunday, Dec 12 2021 | 01:44 PM'),
(41, 'hilai_73', '123', '123', '123', '124', ' ₱ 1.00', 'Sunday, Dec 12 2021 | 01:44 PM'),
(42, 'hilai_73', '123', '4123', '1234', '2000', ' ₱ 766.00', 'Wednesday, Mar 30 2022 | 04:20 PM'),
(43, 'hilai_73', '123', '4123', '1234', '2000', ' ₱ 766.00', 'Wednesday, Mar 30 2022 | 04:20 PM'),
(44, 'hilai_73', '123', '4123', '1234', '2000', ' ₱ 766.00', 'Wednesday, Mar 30 2022 | 04:20 PM'),
(45, 'hilai_73', '1245', '123456', '6789', '', ' ₱ 0.00', 'Wednesday, Jun 21 2023 | 03:54 PM'),
(46, 'hilai_73', '1245', '123456', '6789', '', ' ₱ 0.00', 'Wednesday, Jun 21 2023 | 03:54 PM'),
(47, 'hilai_73', '1245', '123456', '6789', '', ' ₱ 0.00', 'Wednesday, Jun 21 2023 | 03:54 PM');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(255) NOT NULL,
  `item` varchar(50) NOT NULL,
  `itemdescription` varchar(255) NOT NULL,
  `originalprice` varchar(255) NOT NULL,
  `sellingprice` varchar(255) NOT NULL,
  `profiteach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `item`, `itemdescription`, `originalprice`, `sellingprice`, `profiteach`) VALUES
(57, '3456', '12345', '3234', '6789', 'Php 3555.00'),
(59, '12341', '12341', '123', '1234', '&#8369; 1111.00'),
(60, '123', '1234', '1234', '12345', '11111.00'),
(61, '123', '1234', '1234', '12345', '11111.00'),
(63, '1', '1', '123', '1234', '&#8369; 1111.00'),
(64, '1', '1', '123', '1234', '&#8369; 1111.00'),
(65, '1', '1', '123', '1234', '&#8369; 1111.00'),
(66, '1', '1', '123', '1234', '&#8369; 1111.00');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(255) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `cashier`, `item`, `price`, `date`) VALUES
(41, '', 'asd', '141', 'Thursday 9th of December 2021 03:26:51 PM'),
(42, '', 'asdasd', '14123', 'Thursday, December 9 2021 | 03:29:14 PM'),
(43, 'hilai_73', 'qwewqe', '12341', 'Thursday, Dec 9 2021 | 03:42:07 PM'),
(44, '', '123', '1231231', 'Thursday, Dec 9 2021 | 09:05 PM'),
(45, '', '12314', '14123', 'Thursday, Dec 9 2021 | 09:13 PM'),
(46, '', '124123', '14123', 'Thursday, Dec 9 2021 | 09:15 PM'),
(47, '', '12314123', '12314', 'Thursday, Dec 9 2021 | 09:16 PM'),
(48, 'hilai_73', '1234123', '141231', 'Thursday, Dec 9 2021 | 09:19 PM'),
(49, '', '1241231', '141231', 'Thursday, Dec 9 2021 | 09:23 PM'),
(50, '', '12341', '124123', 'Thursday, Dec 9 2021 | 09:18 PM'),
(51, '', '12314123', '124123', 'Thursday, Dec 9 2021 | 09:19 PM'),
(52, 'hilai_73', '123', '132', 'Sunday, Dec 12 2021 | 08:51 AM'),
(53, 'hilai_73', '123', '123', 'Sunday, Dec 12 2021 | 08:54 AM'),
(54, 'hilai_73', '123', '3432', 'Sunday, Dec 12 2021 | 08:54 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashieraccounts`
--
ALTER TABLE `cashieraccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cashieraccounts`
--
ALTER TABLE `cashieraccounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
