-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 08:08 PM
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
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `assigned` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `audience` varchar(255) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `ads` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `cost` int(255) NOT NULL,
  `revenue` int(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `name`, `assigned`, `type`, `audience`, `sponsor`, `ads`, `date`, `cost`, `revenue`, `ctype`, `description`) VALUES
(3, 'Indigo Clarke', 'Carter Hernandez', 'Banner ADS', 'Qui assumenda porro ', 'Aut quo laborum Mag', 'Id cillum duis dict', '1979-06-18', 75, 53, 'Poor', 'Dolor et neque ut qu'),
(4, 'Lucas Buckley', 'Ray England', 'Referral Program ', 'Nesciunt unde proid', 'Reprehenderit aut do', 'Consequatur Adipisc', '1973-12-21', 9, 90, 'Poor', 'Voluptates sed vero '),
(5, 'Ulla Hayden', 'Carter Hernandez', 'Referral Program', 'Autem eiusmod ration', 'Reiciendis ad minima', 'Inventore nisi deser', '1981-11-20', 36, 72, 'Select An Option', 'Consequatur sed adip'),
(6, 'Fleur Fitzpatrick', 'Carter Hernandez', 'Partners', 'Elit sequi duis mol', 'Id ut est totam volu', 'Voluptatum dolor exe', '2018-08-05', 75, 68, 'Excellent', 'Nostrum exercitation'),
(7, 'Derek Bush', 'Carter Hernandez', 'Banner ADS', 'Quia ea laborum Non', 'Reprehenderit fugiat', 'Rerum veniam anim c', '1974-04-18', 51, 25, 'Excellent', 'Dolores voluptas eum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
