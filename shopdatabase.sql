-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 02:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(30) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `cat_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`id`, `title`, `price`, `images`, `summary`, `content`, `status`, `cat_id`) VALUES
(100, 'Corsair Vengeance RGB', 6000001, 'corsair.png', '', '<h4>Type: DDR5</h4><h4>Capacity: 32Gb</h4><h4>Speed: Up to 5600Mhz</h4>', 1, 12),
(1001, 'GSkill Trident Z5 RGB', 10000000, 'trident.png', NULL, '<h4>\r\nType: DDR5\r\n</h4>\r\n<h4>\r\nCapacity: 64Gb\r\n</h4>\r\n<h4>\r\nSpeed: Up to 6000Mhz\r\n</h4>', 1, 12),
(1002, 'MSI Gaming RTX 3070', 15000000, 'rtx3070.png', NULL, '<h4>\r\nType: GDDR6\r\n</h4>\r\n<h4>\r\nCapacity: 8Gb\r\n</h4>\r\n<h4>\r\nSpeed at Default: Unknown \r\n</h4>\r\n<h4>\r\nSpeed at Overclocked: 1845Mhz\r\n</h4>\r\n', 1, 11),
(1003, 'ASUS ROG STRIX RTX 4090 (LIMITED)', 35000000, 'rtx4090.png', '<h2>LIMITED ITEM. Product receiving time can take up to 3 months.</h2>', '<h4>\r\nType: GDDR6X\r\n</h4>\r\n<h4>\r\nCapacity: 24Gb\r\n</h4>\r\n<h4>\r\nSpeed at Default: 2610Mhz \r\n</h4>\r\n<h4>\r\nSpeed at Overclocked: 2640Mhz\r\n</h4>\r\n', 1, 11),
(1006, 'Samsung 870 QVO', 12000000, 'samsung.png', '', '<h4>Capacity: 2Tb</h4><h4>Writing Speed: 5.600Mb/s -> 12.000Mb/s</h4>', 0, 13),
(1007, 'Glorious Model O', 800000, 'glorious.png', NULL, '<h4>\r\nWired: Yes\r\n</h4>\r\n<h4>\r\nResponse Rate: 0-16ms\r\n</h4>\r\n<h4>\r\nWeight: 59g\r\n</h4>\r\n', 1, 14),
(1008, 'Racer Cobra Pro', 1000000, 'razer.png', NULL, '<h4>\r\nWired: No\r\n</h4>\r\n<h4>\r\nResponse Rate: 0-12ms\r\n</h4>\r\n<h4>\r\nWeight: 77g\r\n</h4>\r\n', 1, 14),
(1010, 'Monsgeek M1 QMK', 800000, 'mons.png', NULL, '<h4>\r\nLED: Yes\r\n</h4>\r\n<h4>\r\nType: Mechanical\r\n</h4>\r\n<h4>\r\nWeight: 2Kg\r\n</h4>', 1, 14),
(2000, 'TUF Gaming GTX 1650', 6000000, 'gtx1650.png', NULL, '<h4>\r\nType: GDDR6\r\n</h4>\r\n<h4>\r\nCapacity: 4Gb\r\n</h4>\r\n<h4>\r\nSpeed at Default: 1635Mhz \r\n</h4>\r\n<h4>\r\nSpeed at Overclocked: 1665Mhz\r\n</h4>\r\n', 1, 11),
(2001, 'Kingston Fury RGB', 17990000, 'kingston.png', NULL, '<h4>\r\nType: DDR4\r\n</h4>\r\n<h4>\r\nCapacity: 16Gb\r\n</h4>\r\n<h4>\r\nSpeed: Up to 3733Mhz\r\n</h4>\r\n', 1, 12),
(2002, 'Kingston KC3000', 26090000, 'kingstonssd.png', '', '<h4>\r\nCapacity: 512Gb\r\n</h4>\r\n<h4>\r\nWriting Speed: 3.900Mb/s -> 7.000Mb/s\r\n</h4>\r\n', 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(30) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `cat_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `title`, `price`, `images`, `summary`, `content`, `status`, `cat_id`) VALUES
(2, 'Sentinel A3070', 23000001, 'sentinel.jpg', '', '<h4>CPU: Intel Core i9-12900K (16 Cores, 24 threads)</h4>\r\n\r\n<h4>Motherboard: ASUS Rog Strix Z790-E</h4>\r\n\r\n<h4>RAM: 32Gb DDR5</h4>\r\n\r\n<h4>Storage: 1Tb SSD</h4>\r\n\r\n<h4>VGA: RTX 3070 Ti</h4>\r\n\r\n<h4>OS: Windows 11</h4>\r\n', 0, 8),
(3, 'Sniper I3060', 19000000, 'sniper.jpg', NULL, '<h4>\r\nCPU: Intel Core i5-12400F (6 Cores, 12 threads)\r\n</h4>\r\n<h4>\r\nMotherboard: ASUS Prime B760M\r\n</h4>\r\n<h4>\r\nRAM: 8Gb DDR4\r\n</h4>\r\n<h4>\r\nStorage: 512Gb SSD\r\n</h4>\r\n<h4>\r\nVGA: RTX 3060\r\n</h4>\r\n<h4>\r\nOS: Windows 11\r\n</h4>', 0, 8),
(4, 'Sniper I4060', 20000000, 'sniper2.png', '', '<h4>\r\nCPU: Intel Core i5-13600K (14 Cores, 20 threads)\r\n</h4>\r\n<h4>\r\nMotherboard: MSI Pro B660M\r\n</h4>\r\n<h4>\r\nRAM: 16Gb DDR4\r\n</h4>\r\n<h4>\r\nStorage: 512Gb SSD\r\n</h4>\r\n<h4>\r\nVGA: RTX 4060\r\n</h4>\r\n<h4>\r\nOS: Windows 11\r\n</h4>', 1, 8),
(22, 'Asus Supercenter', 32900000, 'asus.jpg', '\r\n', '<h4>\r\nCPU: Intel Core i7-1255U (10 Cores, 12 threads)\r\n</h4>\r\n<h4>\r\nRAM: 16Gb DDR5\r\n</h4>\r\n<h4>\r\nStorage: 512Gb SSD\r\n</h4>\r\n<h4>\r\nOS: Windows 11\r\n</h4>\r\n\r\n', 1, 7),
(24, 'CLXRA Custom PC', 56400000, 'CLX.png', '<h2>Building time can take up to 14 days depending on the complexity of it\'s components.</h2>\r\n', '<h4>CPU: Intel Core i7-14700KF (20 Cores, 28 threads)</h4><h4>Motherboard: ASUS Rog Strix Z790-E</h4><h4>RAM: 32Gb DDR4</h4><h4>Storage: 1Tb SSD</h4><h4>VGA: RTX 4070 </h4><h4>OS: Windows 11 PRO</h4>', 1, 9),
(2007, 'HP EliteOne 840 G9', 25000000, 'elite.png', NULL, '<h4>\r\nCPU: Intel Core i7-12700 (10 Cores, 12 threads)\r\n</h4>\r\n<h4>\r\nRAM: 16Gb DDR5\r\n</h4>\r\n<h4>\r\nStorage: 512Gb SSD\r\n</h4>\r\n<h4>\r\nOS: Windows 11\r\n</h4>\r\n', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `quyen` tinyint(4) DEFAULT 1,
  `trangthai` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `password`, `quyen`, `trangthai`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(2, 'nhanvien', '900150983cd24fb0d6963f7d28e17f72', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbcategory`
--

CREATE TABLE `tbcategory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cat_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcategory`
--

INSERT INTO `tbcategory` (`cat_id`, `cat_name`, `cat_status`) VALUES
(7, 'AIO', 1),
(8, 'Prebuilt', 1),
(9, 'Custom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbcategory2`
--

CREATE TABLE `tbcategory2` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cat_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcategory2`
--

INSERT INTO `tbcategory2` (`cat_id`, `cat_name`, `cat_status`) VALUES
(11, 'GPU', 1),
(12, 'RAM', 1),
(13, 'Storage', 1),
(14, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbchitiethoadon`
--

CREATE TABLE `tbchitiethoadon` (
  `id` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giamua` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbchitiethoadon`
--

INSERT INTO `tbchitiethoadon` (`id`, `mahd`, `masp`, `soluong`, `giamua`) VALUES
(5, 9, 4, 3, 1800000),
(7, 9, 3, 5, 1900000),
(8, 10, 25, 2, 200000),
(9, 10, 24, 3, 3000000),
(10, 16, 24, 2, 3000000),
(11, 16, 2, 1, 1500000),
(12, 17, 3, 1, 2000000),
(13, 18, 24, 1, 3000000),
(14, 21, 24, 1, 3000000),
(16, 23, 22, 3, 1000000),
(17, 23, 3, 2, 2000000),
(18, 24, 2, 1, 1500000),
(19, 24, 3, 1, 2000000),
(20, 25, 24, 1, 3000000),
(21, 26, 2, 1, 60190000),
(22, 27, 4, 1, 26090000),
(23, 30, 100, 1, 90000000),
(24, 30, 2001, 1, 17990000),
(25, 31, 100, 1, 90000000),
(26, 31, 2001, 1, 17990000),
(27, 35, 3, 1, 17990000);

-- --------------------------------------------------------

--
-- Table structure for table `tbhoadon`
--

CREATE TABLE `tbhoadon` (
  `mahd` int(11) NOT NULL,
  `tennguoimua` varchar(30) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dienthoai` varchar(15) NOT NULL,
  `ngaydat` datetime NOT NULL DEFAULT current_timestamp(),
  `ngaynhan` datetime NOT NULL DEFAULT current_timestamp(),
  `trangthai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbhoadon`
--

INSERT INTO `tbhoadon` (`mahd`, `tennguoimua`, `diachi`, `dienthoai`, `ngaydat`, `ngaynhan`, `trangthai`) VALUES
(9, 'nguyễn văn nam', 'Hà nội', '0123456789', '2021-08-13 17:28:14', '2021-08-13 17:28:14', 1),
(10, 'Nguyễn Trọng Tâm', 'Định Công - Hà nội', '0912356004', '2021-09-15 21:00:22', '2021-09-26 00:00:00', 3),
(16, 'Lê Văn Quý', 'Nam Định', '0912356004', '2021-09-18 15:24:18', '2020-09-19 00:00:00', 0),
(17, 'Nguyễn Văn Nam', 'Hà nội', '1234567', '2021-09-18 15:30:44', '2020-09-19 00:00:00', 0),
(18, 'Nguyễn Văn Dũng', 'Hà nội', '0912356004', '2021-09-18 15:47:17', '2021-09-19 00:00:00', 0),
(21, 'Nguyễn Văn Dũng3', 'Hà nội', '0912356004', '2021-09-18 15:51:26', '2021-09-26 00:00:00', 0),
(23, 'Vũ văn Hiệu', 'Hà nội', '012345674', '2021-09-19 14:21:19', '2021-09-19 00:00:00', 2),
(24, 'Nguyễn Ngọc Long', 'Nam Định', '0912356004', '2021-09-19 17:25:48', '2021-09-26 00:00:00', 2),
(25, 'vdwdvdvddvs', 'dsvvdsvdsvdsvds', '64565566565', '2023-10-19 18:45:33', '0000-00-00 00:00:00', 0),
(26, 'sss', 'ssss', 'ssss', '2023-10-31 17:41:07', '0000-00-00 00:00:00', 0),
(27, 'vdwdvdvddvs', 'dsds', 'sdsds', '2023-10-31 20:42:29', '0000-00-00 00:00:00', 3),
(28, 'vdwdvdvddvs', 'dsvvdsvdsvdsvds', '23323232323', '2023-10-31 20:49:42', '0000-00-00 00:00:00', 0),
(29, 'dddd', 'fdfdfd', 'fdfdf', '2023-11-01 17:40:49', '0000-00-00 00:00:00', 0),
(30, 'dddd', 'fdfdfd', 'fdfdf', '2023-11-01 17:44:36', '0000-00-00 00:00:00', 0),
(31, 'ssdsd', 'sddsds', 'dsds', '2023-11-01 17:44:44', '0000-00-00 00:00:00', 0),
(32, 'ssdsd', 'sddsds', 'dsds', '2023-11-01 17:45:16', '0000-00-00 00:00:00', 0),
(33, 'ssdsd', 'sddsds', 'dsds', '2023-11-01 17:46:00', '0000-00-00 00:00:00', 0),
(34, 'ssdsd', 'sddsds', 'dsds', '2023-11-01 17:47:37', '0000-00-00 00:00:00', 0),
(35, 'vdwdvdvddvs', 'dsvvdsvdsvdsvds', 'sdsds', '2023-11-01 17:48:04', '0000-00-00 00:00:00', 0),
(36, 'vdwdvdvddvs', 'dsvvdsvdsvdsvds', '64565566565', '2023-11-01 17:48:23', '0000-00-00 00:00:00', 0),
(53, 'Hien', '123 Thai Ha', '0900440077', '2023-11-01 19:13:48', '0000-00-00 00:00:00', 0),
(54, 'scs', 'scscs', 'cscscs', '2023-11-01 19:21:58', '0000-00-00 00:00:00', 0),
(55, 'wdwdd', 'wddwwddw', 'wdwddwdw', '2023-11-01 19:30:07', '0000-00-00 00:00:00', 0),
(56, 'NGUYEN DUC TRONG', '999 ngo thi nhuan', '90000900009', '2023-11-01 19:30:57', '0000-00-00 00:00:00', 0),
(57, 'hiendepzai', '70 dungbuoi', '45454020202', '2023-11-01 19:35:04', '0000-00-00 00:00:00', 0),
(58, 'dung700', 'dung700', 'dung700', '2023-11-01 19:44:09', '0002-02-02 00:00:00', 1),
(59, 'o', '1', '2', '2023-11-01 19:48:22', '0000-00-00 00:00:00', 0),
(61, 'fhghf', '12 ndh', '0968743223', '2023-11-01 20:01:50', '0000-00-00 00:00:00', 0),
(62, 'hiendepzaaaiaiia', 'nah', '090', '2023-11-06 20:38:37', '0000-00-00 00:00:00', 0),
(63, 'hiendepzaaaiaiia', 'nah', '090', '2023-11-06 20:39:11', '0000-00-00 00:00:00', 0),
(64, 'hiendepzaaaiaiia', 'nah', '090', '2023-11-06 20:43:01', '0000-00-00 00:00:00', 2),
(65, 'hiendepzaaaiaiia', 'nah', '090', '2023-11-06 20:45:00', '0000-00-00 00:00:00', 0),
(66, 'sdsds', 'hien', 'idk', '2023-11-06 20:45:40', '0000-00-00 00:00:00', 0),
(68, 'hien', 'hien', 'hien', '2023-11-06 20:46:54', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_username` (`username`);

--
-- Indexes for table `tbcategory`
--
ALTER TABLE `tbcategory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbcategory2`
--
ALTER TABLE `tbcategory2`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_mahd_masp` (`mahd`,`masp`),
  ADD KEY `idx_mahd` (`mahd`),
  ADD KEY `idx_masp` (`masp`);

--
-- Indexes for table `tbhoadon`
--
ALTER TABLE `tbhoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2004;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbcategory`
--
ALTER TABLE `tbcategory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbcategory2`
--
ALTER TABLE `tbcategory2`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbhoadon`
--
ALTER TABLE `tbhoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  ADD CONSTRAINT `tbchitiethoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `tbhoadon` (`mahd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
