-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 04:14 PM
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
-- Database: `vsga2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_wisata`
--

CREATE TABLE `order_wisata` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `package` varchar(20) NOT NULL,
  `duration` int(11) NOT NULL,
  `attendees` int(11) NOT NULL,
  `food` tinyint(1) NOT NULL,
  `hot_spring` tinyint(1) NOT NULL,
  `paint_ball` tinyint(1) NOT NULL,
  `cost` decimal(10,0) NOT NULL,
  `bill` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_wisata`
--

INSERT INTO `order_wisata` (`id`, `name`, `phone`, `date`, `package`, `duration`, `attendees`, `food`, `hot_spring`, `paint_ball`, `cost`, `bill`) VALUES
(1, 'Fey', '088211111111', '2024-08-10', '', 1, 7, 0, 1, 0, 155000, 1085000),
(2, 'Akmal', '088212222222', '2024-08-24', '', 1, 2, 0, 0, 0, 225000, 450000),
(3, 'Luna', '082121212121', '2024-08-17', '', 0, 1, 0, 0, 0, 35000, 35000),
(4, 'Gyn', '088211234567', '2024-09-14', '', 2, 2, 1, 1, 1, 490000, 1960000),
(5, 'Raka', '1094102991', '2024-08-16', '', 3, 4, 0, 1, 1, 290000, 3480000),
(6, 'Zachra', '1844383', '2024-08-30', '', 2, 4, 0, 0, 1, 200000, 1600000),
(7, 'Agya', '094931', '2024-08-16', '', 2, 2, 1, 1, 1, 490000, 1960000),
(8, 'dasd', '12124', '2024-08-10', '', 2, 2, 0, 0, 0, 65000, 260000),
(9, 'aza', '123123', '2024-08-17', '', 3, 3, 0, 0, 0, 65000, 585000),
(10, 'ahmad', '0987654', '2024-08-09', '', 1, 2, 1, 1, 1, 490000, 980000),
(11, 'syalwa atikah', '098765480', '2024-10-12', '', 2, 1, 0, 1, 1, 290000, 580000),
(12, 'Feyza', '1844383', '2024-08-24', '', 2, 1, 1, 0, 0, 320000, 640000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_wisata`
--
ALTER TABLE `order_wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_wisata`
--
ALTER TABLE `order_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
