-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 08:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jersey`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(7) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `page_url` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`name`, `size`, `quantity`, `price`, `page_url`, `id`) VALUES
('CHENNAI SUPER KINGS HOME KIT 2023-2024', 'l', 5, 9495, 'csk.php', 1),
('FC BARCELONA HOME KIT 2023-2024', 'l', 5, 37500, 'fcb.php', 2),
('MANCHESTER UNITED HOME KIT 2023-2024', 'xl', 5, 17995, 'mu.php', 3);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `card_holder_name` varchar(30) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `shipping_address` varchar(60) DEFAULT NULL,
  `product_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `email`, `password`, `card_holder_name`, `card_number`, `shipping_address`, `product_value`) VALUES
(1, 'rk123@gmail.com', '12345678', 'rohith kumar42', 2147483647, '46 Muthu Nagar, Uppilipalayam', 0),
(2, 'rk1234@gmail.com', 'qwer1234', 'rohith kumar42', 2147483647, '46 Muthu Nagar', 0),
(3, '1rk1234@gmail.com', 'qwerty123456', 'rohith kumar42', 1234567, '46 Muthu Nagar, Uppilipalayam', 0),
(4, 'Cbaalraj@gmail.com', '123456789', 'RK', 123456789, '46 Muthu Nagar', 0),
(5, 'Cbaalraj@gmail.com', '123456789', 'RK', 456123, '46 Muthu Nagar', 15000),
(6, 'Cbaalraj@gmail.com', 'qwer1234556', 'rohith kumar42', 12345678, '46 Muthu Nagar', 9495),
(7, 'Cbaalraj@gmail.com', '123456789', 'rohith kumar42', 123232, '46 Muthu Nagar', 0),
(8, 'Cbaalraj@gmail.com', '1234567', 'rohith kumar42', 12345678, '46 Muthu Nagar', 9495),
(9, 'Cbaalraj@gmail.com', 'qwert1234', 'RK', 123456, '46 Muthu Nagar singanallur', 9495),
(10, 'Cbaalraj@gmail.com', '123456789', 'RK', 123456, '46 Muthu Nagar', 1899),
(11, 'Cbaalraj@gmail.com', 'qwerty123', 'RK', 456123, 'Muthu Nagar', 1899),
(12, 'Cbaalraj@gmail.com', 'qwert123', 'RK', 12346, '46 Muthu Nagar', 9495),
(13, 'Cbaalraj@gmail.com', 'qwert123', 'RK', 12346, '46 Muthu Nagar', 9495),
(14, 'Cbaalraj@gmail.com', 'qwerty123', 'RK', 12345678, '46 Muthu Nagar 641015', 9495),
(15, 'Cbaalraj@gmail.com', '123456', 'rohith kumar42', 123456, '46 Muthu Nagar 641015', 9495),
(16, 'Cbaalraj@gmail.com', '123456', 'RK', 123456, '46 Muthu Nagar 641015', 0),
(17, 'Cbaalraj@gmail.com', 'wqeqewqe', 'wqeqwe', 684654, '46 Muthu Nagar', 0),
(18, 'Cbaalraj@gmail.com', '1234555', 'rohith kumar42', 8464, '46 Muthu Nagar', 0),
(19, 'Cbaalraj@gmail.com', 'qweqwe', 'RK', 15464, '46 Muthu Nagar', 0),
(20, 'Cbaalraj@gmail.com', 'qwerty123', 'rohith kumar', 546454, '46 Muthu Nagar', 0),
(21, 'Cbaalraj@gmail.com', '12344', 'wqeqwe', 486484, '46 Muthu Nagar', 0),
(22, 'Cbaalraj@gmail.com', '1234568486', 'RK', 68541658, '46 Muthu Nagar', 0),
(23, 'rohithkumarcbaalraj@gmail.com', 'qwerty123', 'Rohith Kumar', 4887, '46 Muthu Nagar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cskhome`
--

CREATE TABLE `cskhome` (
  `size` varchar(7) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cskhome`
--

INSERT INTO `cskhome` (`size`, `count`) VALUES
('S', 25),
('M', 25),
('L', 25),
('XL', 30),
('XXL', 30);

-- --------------------------------------------------------

--
-- Table structure for table `cskquantity`
--

CREATE TABLE `cskquantity` (
  `id` int(11) NOT NULL,
  `size` varchar(7) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cskquantity`
--

INSERT INTO `cskquantity` (`id`, `size`, `quantity`) VALUES
(73, '', 5),
(74, '', 1),
(75, '', 1),
(76, 's', 1),
(77, 's', 1),
(78, '', 0),
(79, 's', 2),
(80, '', 0),
(81, 'l', 4),
(82, '', 0),
(83, '', 0),
(84, '', 0),
(85, '', 0),
(86, '', 0),
(87, 'xxl', 5),
(88, '', 0),
(89, 'xxl', 2),
(90, '', 0),
(91, '', 0),
(92, '', 0),
(93, 'l', 1),
(94, '', 0),
(95, 'm', 1),
(96, '', 0),
(97, '', 0),
(98, '', 0),
(99, '', 0),
(100, 's', 1),
(101, '', 0),
(102, '', 0),
(103, '', 0),
(104, 'm', 5),
(105, '', 0),
(106, 's', 5),
(107, '', 0),
(108, '', 0),
(109, 'l', 5);

-- --------------------------------------------------------

--
-- Table structure for table `fcbhome`
--

CREATE TABLE `fcbhome` (
  `size` varchar(5) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fcbhome`
--

INSERT INTO `fcbhome` (`size`, `count`) VALUES
('S', 30),
('M', 30),
('L', 30),
('XL', 30),
('XXl', 30);

-- --------------------------------------------------------

--
-- Table structure for table `muhome`
--

CREATE TABLE `muhome` (
  `size` varchar(7) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muhome`
--

INSERT INTO `muhome` (`size`, `count`) VALUES
('s', 30),
('m', 30),
('l', 30),
('xl', 25),
('xxl', 30);

-- --------------------------------------------------------

--
-- Table structure for table `muquantity`
--

CREATE TABLE `muquantity` (
  `id` int(11) NOT NULL,
  `size` varchar(6) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muquantity`
--

INSERT INTO `muquantity` (`id`, `size`, `quantity`) VALUES
(25, '', 0),
(26, '', 0),
(27, 'xxl', 2),
(28, '', 0),
(29, '', 0),
(30, 'xxl', 4),
(31, '', 0),
(32, 'm', 3),
(33, '', 0),
(34, 'xxl', 5),
(35, '', 0),
(36, '', 0),
(37, '', 0),
(38, '', 0),
(39, 'xl', 5);

-- --------------------------------------------------------

--
-- Table structure for table `productchosed`
--

CREATE TABLE `productchosed` (
  `id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productchosed`
--

INSERT INTO `productchosed` (`id`, `number`) VALUES
(1, 0),
(2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `id` int(11) NOT NULL,
  `size` varchar(6) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`id`, `size`, `quantity`) VALUES
(1, '', 0),
(2, 's', 1),
(3, '', 0),
(4, 'm', 2),
(5, '', 0),
(6, '', 0),
(7, '', 0),
(8, 'xl', 2),
(9, '', 0),
(10, '', 0),
(11, '', 0),
(12, '', 0),
(13, 'xxl', 5),
(14, 'xxl', 5),
(15, '', 0),
(16, '', 0),
(17, '', 0),
(18, '', 0),
(19, '', 0),
(20, '', 0),
(21, '', 0),
(22, '', 0),
(23, '', 0),
(24, '', 0),
(25, '', 0),
(26, '', 0),
(27, '', 0),
(28, '', 0),
(29, '', 0),
(30, '', 0),
(31, '', 0),
(32, 'm', 5),
(33, '', 0),
(34, 'l', 5),
(35, NULL, 0),
(36, NULL, 5),
(37, NULL, 0),
(38, NULL, 0),
(39, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `realmadridhome`
--

CREATE TABLE `realmadridhome` (
  `size` varchar(7) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `realmadridhome`
--

INSERT INTO `realmadridhome` (`size`, `count`) VALUES
('S', 30),
('M', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cskquantity`
--
ALTER TABLE `cskquantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muquantity`
--
ALTER TABLE `muquantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productchosed`
--
ALTER TABLE `productchosed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cskquantity`
--
ALTER TABLE `cskquantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `muquantity`
--
ALTER TABLE `muquantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `productchosed`
--
ALTER TABLE `productchosed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
