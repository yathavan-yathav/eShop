-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 07:00 PM
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
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_number` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `p_number`, `password`, `user_type`) VALUES
(1, 'admin', 'admin1@gmail.com', '0770712417', '123', 'admin'),
(2, 'Yathav', 'admin2@gmail.com', '0756246152', '200', 'admin'),
(3, 'sri', 'sed@gmail.com', '0775462451', '300', 'admin'),
(4, 'thana', 'than2@gmail.com', '0117595462', '5..', 'admin'),
(5, 'thenuz', 'the@gmail.com', '0764585652', '2651', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'KIMBER MICRO 9 RAPIDE SCORPIUS', 'UPC	669278332314,Caliber 9MM LUGER (9X19 PARA),Action SEMI AUTOMATIC,Capacity 7 ROUNDS,Barrel Length 3.15 BARREL,Weight	0.98 LBS.,Finish BLACK,Frame Material ALUMINUM, Slide Material STAINLESS STEEL', '$904.99 ', 'guns\\1.webp'),
(2, 'GLOCK\r\nG47 MOS', '9MM LUGER (9X19 PARA),STRIKER,17 ROUNDS,4.49 BARREL', '$620.00', 'guns\\2.webp'),
(3, 'HENRY\r\nBIG BOY BIRDSHEAD', '.38 SPECIAL/.357 MAGNUM,SINGLE/DOUBLE ACTION,6 ROUNDS,4 BARREL', '$859.99', 'guns\\3.webp'),
(4, 'KIMBER MICRO 9', '9MM LUGER (9X19 PARA),SEMI AUTOMATIC,10 ROUNDS,3 BARREL', '$599.99', 'guns\\4.webp'),
(5, 'HOWA M1500 APC CHASSIS\r\n', 'UPC - 682146880212,Action - BOLT ACTION,Barrel Length - 24 BARREL,Caliber- .308 WIN,Capacity - 10 ROUNDS,\r\nFinish - AMERICAN FLAG', '$1331.99', 'guns\\5.webp'),
(6, 'RUGER MODEL NINETY-SIX', 'UPC	GDC0004470341,Caliber	.22 LR,Action	SEMI AUTOMATIC,Capacity	10 ROUNDS,Barrel Length	18.5 BARREL,Weight	6 LBS.,Finish BLACK', '$899.99', 'guns\\6.webp'),
(7, 'RILEY DEFENSE RAK-47 CLASSICAL ', 'UPC	860247000702,Caliber	7.62X39MM,Action	SEMI AUTOMATIC,Capacity	30 ROUNDS,Barrel Length	16.25 BARREL,Weight	8.9 LBS.,Finish	WOOD AND BLACK', '$808.99', 'guns\\7.webp'),
(8, 'SIG SAUER MCX SPEAR LT RIFLE', 'UPC	798681660889,Action	SEMI AUTOMATIC,Barrel Length	16 BARREL,Caliber	7.62X39MM,Capacity	28 ROUNDS,Finish	COYOTE TAN,Weight	7.6 LBS.', '$2,499.99', 'guns\\8.webp'),
(9, 'SMITH & WESSON M&P15 (M4A3 MOD)', 'Action	DIRECT IMPINGEMENT,Barrel Length	16 BARREL,Caliber	5.56X45MM NATO,\r\nCapacity	30 ROUNDS,Receiver Material	ALUMINUM,Weight	6.25 LBS.,Color	BLACK,Twist	1:9,Barrel Type	M4 PROFILE', '$779.99', 'guns\\9.webp'),
(10, 'WEATHERBY ORION SKU ', 'UPC	ECOM37497396,Action	OVER UNDER,\r\nBarrel Length	26 BARREL,Capacity	2 ROUNDS,Finish	BLACK /W WOOD STOCK,weight  7 LBS.', '$902.49', 'guns\\10.webp'),
(17, 'Sniper', 'Long range\r\n12mm calliber\r\n8X scope', '1200$', 'guns\\11.webp');

-- --------------------------------------------------------

--
-- Table structure for table `supadmin`
--

CREATE TABLE `supadmin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'supadmin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supadmin`
--

INSERT INTO `supadmin` (`id`, `name`, `email`, `p_number`, `password`, `user_type`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '0766700517', '1020', 'supadmin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `p_number`, `password`, `user_type`) VALUES
(5, 'Yathavan', 'yathavan408@gmail.com', '0774518651', '123', 'user'),
(6, 'Yathav', 'yathu@gmail.com', '0753495338', '125', 'user'),
(7, 'admin1', 'admin1@gmail.com', '0770712417', '123', 'admin'),
(11, 'sathu', 'sathu@gmail.com', '0752365148', '0000', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supadmin`
--
ALTER TABLE `supadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `supadmin`
--
ALTER TABLE `supadmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
