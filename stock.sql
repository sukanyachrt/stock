-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 02:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `depart`
--

CREATE TABLE `depart` (
  `id` int(11) NOT NULL,
  `departname` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `depart`
--

INSERT INTO `depart` (`id`, `departname`, `status`) VALUES
(1, 'IT', '1'),
(2, 'ช่างซ่อมบำรุง', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `depart` int(11) NOT NULL,
  `status_emp` int(1) NOT NULL,
  `role_emp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `username`, `password`, `fname`, `lname`, `empid`, `depart`, `status_emp`, `role_emp`) VALUES
(1, '00001', '123456', 'กัญญา', 'รัตนเพชร์', '00001', 1, 1, 'user'),
(2, '00002', '123456', 'กิ่งดาว', 'ดารณี', '00002', 1, 1, 'admin'),
(4, '00003', '123456', 'กชกร', 'ดารณี', '00003', 2, 1, 'admin'),
(6, '00004', '123456', 'กุลณัฐ', 'กุลปรียาวัฒน์', '00004', 1, 1, 'admin'),
(7, 'admin', '123456', 'admin', 'admin', '00005', 1, 1, 'admin'),
(8, '00006', '123456', 'วรนุช', 'วงศ์สวรรค', '00006', 1, 0, 'user'),
(9, 'admin', '123456', 'อาภาพร', 'นคร', '00008', 2, 0, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productid` varchar(10) NOT NULL,
  `barcode` varchar(15) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `imageproduct` text NOT NULL,
  `status` varchar(1) NOT NULL,
  `typeproduct` int(11) NOT NULL,
  `numproduct` int(11) NOT NULL,
  `dateinsert` datetime NOT NULL,
  `nameinsert` varchar(255) NOT NULL,
  `dateupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productid`, `barcode`, `productname`, `unit`, `imageproduct`, `status`, `typeproduct`, `numproduct`, `dateinsert`, `nameinsert`, `dateupdate`) VALUES
(16, '1234567890', '1234567890123', 'ยางลบ', 3, '', '1', 3, 11, '2023-11-26 17:41:40', 'nameinsert', '2023-11-30 16:31:44'),
(17, '1234567890', '1234567890124', 'ปากกา', 2, '', '1', 3, 20, '2023-11-26 17:42:10', 'nameinsert', '2023-11-26 17:42:10'),
(18, '1234567890', '1234567890125', 'เมาส์', 2, '', '1', 1, 5, '2023-11-26 17:43:44', 'nameinsert', '2023-11-26 17:43:44'),
(19, '1234567890', '1234567890126', 'น้ำ', 1, '', '1', 3, 50, '2023-11-30 16:18:15', 'nameinsert', '2023-11-30 16:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `id` int(11) NOT NULL,
  `nametype` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `nametype`, `status`) VALUES
(1, 'อุปกรณ์ไอที', '1'),
(2, 'น้ำหมึก', '1'),
(3, 'อื่นๆ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `nameunit` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `nameunit`, `status`) VALUES
(1, 'ชิ้น', '1'),
(2, 'อัน', '1'),
(3, 'แท่ง', '0'),
(4, 'เล่ม', '1');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `employuse` varchar(255) NOT NULL,
  `numwithdraw` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `typewithdraw` varchar(20) NOT NULL,
  `dateinsert` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `productid`, `employuse`, `numwithdraw`, `status`, `typewithdraw`, `dateinsert`) VALUES
(13, 16, 'ฉััน', '3', '1', 'เบิกสินค้า', '2023-11-29 16:28:09'),
(14, 17, 'ฉััน', '1', '1', 'เบิกสินค้า', '2023-11-29 16:28:09'),
(15, 18, 'ฉััน', '1', '1', 'เบิกสินค้า', '2023-11-29 16:28:09'),
(16, 18, 'me too', '2', '1', 'เบิกสินค้า', '2023-11-29 22:31:51'),
(17, 17, 'me too', '7', '1', 'เบิกสินค้า', '2023-11-29 22:31:51'),
(18, 16, 'me too', '1', '1', 'เบิกสินค้า', '2023-11-29 22:31:51'),
(19, 18, 'nong', '2', '1', 'คืนสินค้า', '2023-11-30 22:33:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depart` (`depart`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit` (`unit`),
  ADD KEY `typeproduct` (`typeproduct`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depart`
--
ALTER TABLE `depart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `depart` FOREIGN KEY (`depart`) REFERENCES `depart` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `typeproduct` FOREIGN KEY (`typeproduct`) REFERENCES `producttype` (`id`),
  ADD CONSTRAINT `unit` FOREIGN KEY (`unit`) REFERENCES `units` (`id`);

--
-- Constraints for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD CONSTRAINT `productid` FOREIGN KEY (`productid`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
