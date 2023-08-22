-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 08:23 AM
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
-- Database: `e-market`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `username`, `email`, `feedback`) VALUES
(24, 'abd mahamdeh', 'abuawad@gmail.com', 'fffff'),
(25, 'abd mahamdeh', 'abuawad@gmail.com', 'FOOOOOOOOOOOOOOOOD'),
(26, 'abd mahamdeh', 'abuawad@gmail.com', 'FOOOOOOOOOOOOOOOOD'),
(27, 'abd mahamdeh', 'abuawad@gmail.com', 'WOOOOOOOOO'),
(28, 'abd mahamdeh', 'abuawad@gmail.com', 'WOOOOOOOOO');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `email`, `password`, `username`, `img`) VALUES
(21, 'feras@gmail.com', '123', 'Mohammad1              ', ''),
(22, 's11923551@stu.najah.edu', 'ss', 'Mohammad1', ''),
(23, 'tsu.test223@gmail.com', '1', 'AMER', ''),
(24, 'tsu.test@gmail.com', '1', 'Mohammad Zagha', ''),
(25, 'abuawad@gmail.com', '12', 'abd mahamdeh', '');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `ammount` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `userid`, `productid`, `ammount`, `price`) VALUES
(0, 0, 1, 1, 1),
(54, 23, 2, 1, 150),
(55, 23, 2, 1, 150),
(56, 23, 3, 1, 100),
(56, 23, 4, 1, 80),
(56, 23, 5, 1, 130),
(57, 23, 3, 1, 100),
(58, 23, 2, 1, 150),
(62, 24, 2, 1, 150),
(64, 25, 2, 1, 150),
(64, 25, 3, 1, 100),
(64, 25, 5, 1, 130),
(65, 25, 1, 1, 100),
(65, 25, 2, 1, 150),
(65, 25, 3, 1, 100),
(66, 25, 1, 1, 100),
(66, 25, 10, 1, 580),
(66, 25, 12, 1, 850),
(99999, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `userid`, `address`, `price`) VALUES
(53, 23, 'adres', 150),
(54, 23, 'adres', 150),
(55, 23, 'h', 150),
(56, 23, 'Aseera ST', 310),
(57, 23, 'hahhaa', 100),
(58, 23, 'ASERA ', 150),
(59, 21, 'asd', 150),
(60, 21, 'asd', 150),
(61, 24, 'asera', 380),
(62, 24, 'asera', 150),
(63, 25, 'ABUAWAD STREET', 380),
(64, 25, 'DDD', 380),
(65, 25, 'ABSADASDAS', 350),
(66, 25, 'asera', 1530);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_price`, `p_img`, `category`) VALUES
(1, 'CASE-H500P-ARGB', 100, 'upload/CASE-H500P-ARGB-4-6767410.png', 'CC'),
(2, 'CASE-LI-PC-011D', 150, 'upload/CASE-LI-PC-011D-3736682.png', 'CC'),
(3, 'P120-CTYSTAL', 100, 'upload/gallery-p120-crystal-15-4194246.jpeg', 'CC'),
(4, 'CASE-MX660-T', 80, 'upload/CASE-MX660-T-6059420.png', 'CC'),
(5, 'H500-ARGB', 130, 'upload/H500-ARGB-6847292.png', 'CC'),
(10, 'CPU INTEL I5 11400F TRAY', 580, 'upload/CPU-I5-11400F-T-9088116.png', 'CP'),
(11, 'CPU INTEL I9 12900K BOX', 2800, 'upload/CPU-I9-12900K-B-2997152.png', 'CP'),
(12, 'CPU INTEL I5 10600K BOX', 850, 'upload/CPU-I5-10600K-B-2547458.png', 'CP'),
(13, 'CPU INTEL I5 11400F BOX', 590, 'upload/CPU-I5-11400F-B-700850.png', 'CP'),
(14, 'CPU AMD RYZEN 9 7900X BOX', 2490, 'upload/CPU-7900X-BOX-3713772.png', 'CP'),
(15, 'CPU AMD RYZEN 5 5600X BOX', 1100, 'upload/ryzen-5-5600x-1255056.png', 'CP'),
(16, 'GPU POWERCOLOR RED DEVIL RX6700XT 12GBD6', 2100, 'upload/GPU-PC-6700XT-1149943.png', 'GC'),
(17, 'GPU ASUS DUAL GTX1660S-O6G-EVO', 1370, 'upload/GPU-AS-2060-6GE-3650035.png', 'GC'),
(18, 'GPU ASUS TUF RTX3060-O12G-V2-GAMING', 1300, 'upload/GPU-AS-TUF3060V-2205827.png', 'GC'),
(19, 'GPU ASUS TUF RTX3080-O10G-V2-GAMING', 3700, 'upload/GPU-ZT-2060-3740018.png', 'GC'),
(20, 'PSU CORSAIR RM750 750W 80+ GOLD', 450, 'upload/PSU-RM750-GOLD-4207256.png', 'PS'),
(21, 'PSU ANTEC EAG650 PRO EC 650W 80+ GOLD', 330, 'upload/PSU-EAG650-GOLD-2186264.png', 'PS'),
(22, 'PSU ASUS ROG THOR 850P 850W 80+', 950, 'upload/PSU-THOR-850P.png', 'PS'),
(23, 'PSU CORSAIR CX750F RGB 750W 80+', 590, 'upload/PSU-CX750F-B-RG.png', 'PS'),
(24, 'PSU MWE650 V2 230V 650W 80+', 280, 'upload/PSU-EAG650-GOLD.png', 'PS'),
(25, 'MB ASUS TUF B450-PLUS GAMING AM4', 410, 'upload/b450-plus-tuf.png', 'MB'),
(26, 'MB ASUS PRIME B450M-A GAMING AM4', 335, 'upload/b450m-a.png', 'MB'),
(27, 'MB ASUS TUF B450M-PRO GAMING AM4', 395, 'upload/b450m-pro-tuf.webp', 'MB'),
(28, 'MB ASUS PRIME X570-PRO GAMING AM4', 1250, 'upload/x570-pro-prime.webp', 'MB'),
(29, 'MB GIGABYTE B450 AORUS PRO GAMING', 510, 'upload/b450-aorus-pro.webp', 'MB'),
(30, 'MONITOR AOC 27G2U/BK 27\" IPS 144HZ', 990, 'upload/MONITOR-AOC-27G2U.png', 'CM'),
(31, 'MONITOR AOC C27G1 27\'\' CURVED VA', 920, 'upload/c27g1.png', 'CM'),
(32, 'MONITOR LG 27UL500-W 27\" IPS 4K', 1330, 'upload/27UL500-W.png', 'CM'),
(33, 'MONITOR ASUS TUF VG259QM 24.5\" IPS', 1780, 'upload/ASUS-TUF-VG259QM.png', 'CM'),
(34, 'MONITOR LG ULTRAGEAR 27GL850-B 27\'\'', 1890, 'upload/MT-LG-27GL850-B-.png', 'CM'),
(35, ' LAPTOP ASUS ROG STRIX 15.6\" R9-5900HX SSD512 RAM1', 7500, 'upload/G513QY-HF001.webp', 'LT'),
(36, 'LAPTOP ASUS VIVOBOOK 15\" i5-1135G7 SSD512 RAM8 W10', 3200, 'upload/K513EQ-L1201T.webp', 'LT'),
(37, 'Ux5401ea Kn146w.png LAPTOP ASUS ZENBOOK OLED14\" i5', 4650, 'upload/UX5401EA-KN146W.webp', 'LT'),
(38, 'APPLE MACBOOK AIR M2 13.6\" 8CORE CPU RAM16 SSD256 ', 5600, 'upload/MAC-Z15S000T3.webp', 'LT'),
(39, 'LAPTOP ACER NITRO 5 15.6\" i5-12500H SSD512 RAM16 3', 4500, 'upload/ACER-NH.QFJEC_.003.webp', 'LT'),
(40, 'Usb3 Adapter Tplink Ue330 3 Port Hub.png USB3 ADAP', 115, 'upload/USB3-ADAPTER-TPLINK-UE330-3-PORT-HUB.jpg', 'LA'),
(41, 'Dlink Dwa 131.png USB2 ADAPTER WIRELESS D-LINK N30', 35, 'upload/DLINK-DWA-131.png', 'LA'),
(42, ' USB NETWORK ADAPTER D-LINK DUB-1312 3.0 GIGABIT E', 75, 'upload/ADAPTER-DUB1312-2.jpg', 'LA'),
(43, ' UGREEN CONSOLE CABLE 50773 USB-A TO LAN RJ45 1.5M', 72, 'upload/CABLE-50773-1.5.jpg', 'LA'),
(44, ' UNIVERSAL LAPTOP ADAPTER HUNTKEY ', 105, 'upload/HUNTKEY-ES65W.png', 'LA'),
(45, ' ETHERNET ADAPTER UGREEN USB-C-3PORT+LAN CM416HUB', 99, 'upload/UGREEN-10917.webp', 'LA'),
(46, ' ADAPTER UGREEN 50533 USB-C FEMALE TO USB3.0 MALE', 50, 'upload/UGREEN-50533.webp', 'LA'),
(47, ' COOLER LAPTOP COOLERMASTER ERGOSTAND III 17\"', 200, 'upload/CL-NP-ERGOSTAND-III.webp', 'LA'),
(48, 'HEADSET LOGITECH G432 7.1', 220, 'upload/G432.png', 'H'),
(49, 'HEADSET SOUND BlasterX H6 GAMING', 270, 'upload/Blasterx-H6.png', 'H'),
(50, 'HEADSET RAZER KRAKEN TOURNAMENT', 300, 'upload/razer-touner-green.png', 'H'),
(51, 'Corsair Void Elite Rgb Usb HEADSET CORSAIR VOID EL', 360, 'upload/CORSAIR-VOID-ELITE-RGB-USB.png', 'H'),
(52, ' STEREO HEADPHONE SILVERLINE SL-', 20, 'upload/HS-SL-111ST.png', 'H'),
(53, 'HEADSET LOGITECH G PRO-X', 680, 'upload/HS-G-PROX.png', 'H');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderid`,`userid`,`productid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
