-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 01:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazing-grazing`
--

-- --------------------------------------------------------

--
-- Table structure for table `techniques`
--

CREATE TABLE `techniques` (
  `techn_id` int(11) NOT NULL,
  `techn_title` varchar(25) NOT NULL,
  `techn_img` varchar(45) NOT NULL,
  `techn_ico` varchar(255) NOT NULL,
  `techn_continue` varchar(50) DEFAULT NULL,
  `techn_brochure` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techniques`
--

INSERT INTO `techniques` (`techn_id`, `techn_title`, `techn_img`, `techn_ico`, `techn_continue`, `techn_brochure`) VALUES
(1, 'CONTINUOUS GRAZING', 'continuous-grazing.gif', 'fa-check;fa-check;fa-times;fa-times', '', ''),
(2, 'ROTATIONAL GRAZING', 'rotational-grazing.gif', 'fa-check;fa-check;fa-check;fa-check', 'rotational.php', 'rotational_grazing_brochure.pdf'),
(3, 'SEASONAL GRAZING', 'seasonal_animation.gif', 'fa-check;fa-check;fa-check;fa-check', 'seasonal.php', 'seasonal_grazing_brochure.pdf'),
(4, 'PATCH-BURN GRAZING', 'patch-burn.gif', 'fa-check;fa-check;fa-times;fa-times', 'patch-burn.php', 'patch-burn_grazing_brochure.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `techniques`
--
ALTER TABLE `techniques`
  ADD PRIMARY KEY (`techn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `techniques`
--
ALTER TABLE `techniques`
  MODIFY `techn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
