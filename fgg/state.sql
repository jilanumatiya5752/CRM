-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 08:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `country_id`) VALUES
(1, 'ANDHRA PRADESH', '105'),
(2, 'ASSAM', '105'),
(3, 'ARUNACHAL PRADESH', '105'),
(4, 'BIHAR', '105'),
(5, 'GUJRAT', '105'),
(6, 'HARYANA', '105'),
(7, 'HIMACHAL PRADESH', '105'),
(8, 'JAMMU & KASHMIR', '105'),
(9, 'KARNATAKA', '105'),
(10, 'KERALA', '105'),
(11, 'MADHYA PRADESH', '105'),
(12, 'MAHARASHTRA', '105'),
(13, 'MANIPUR', '105'),
(14, 'MEGHALAYA', '105'),
(15, 'MIZORAM', '105'),
(16, 'NAGALAND', '105'),
(17, 'ORISSA', '105'),
(18, 'PUNJAB', '105'),
(19, 'RAJASTHAN', '105'),
(20, 'SIKKIM', '105'),
(21, 'TAMIL NADU', '105'),
(22, 'TRIPURA', '105'),
(23, 'UTTAR PRADESH', '105'),
(24, 'WEST BENGAL', '105'),
(25, 'DELHI', '105'),
(26, 'GOA', '105'),
(27, 'PONDICHERY', '105'),
(28, 'LAKSHDWEEP', '105'),
(29, 'DAMAN & DIU', '105'),
(30, 'DADRA & NAGAR', '105'),
(31, 'CHANDIGARH', '105'),
(32, 'ANDAMAN & NICOBAR', '105'),
(33, 'UTTARANCHAL', '105'),
(34, 'JHARKHAND', '105'),
(35, 'CHATTISGARH', '105');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
