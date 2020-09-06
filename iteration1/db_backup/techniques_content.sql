-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 01:56 PM
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
-- Table structure for table `techniques_content`
--

CREATE TABLE `techniques_content` (
  `techn_cont_id` int(11) NOT NULL,
  `techn_cont_title2` varchar(25) NOT NULL,
  `techn_cont_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techniques_content`
--

INSERT INTO `techniques_content` (`techn_cont_id`, `techn_cont_title2`, `techn_cont_content`) VALUES
(1, 'CONTINUOUS GRAZING', 'Most simple, popular, and low effort on labour'),
(2, 'CONTINUOUS GRAZING', 'Temporary fencing is used'),
(3, 'CONTINUOUS GRAZING', 'Damages soil, stream banks, and native vegetation'),
(4, 'CONTINUOUS GRAZING', 'Low productivity and unsustainable development in the long-term'),
(5, 'ROTATIONAL GRAZING', 'Can be implemented immediately'),
(6, 'ROTATIONAL GRAZING', 'Enhances nutritious level of grassland'),
(7, 'ROTATIONAL GRAZING', 'Express higher stocking rates of paddock-by-paddock'),
(8, 'ROTATIONAL GRAZING', 'Decrease the methane emissions from livestock'),
(9, 'SEASONAL GRAZING', 'Longer regrowth time for the grassland'),
(10, 'SEASONAL GRAZING', 'Easily combined with other techniques'),
(11, 'SEASONAL GRAZING', 'Great chance to adjust the grazing regime of the year'),
(12, 'SEASONAL GRAZING', 'Limited time consumption and less farming infrastructure management'),
(13, 'PATCH-BURN GRAZING', 'Enable recovery of used patches of grassland'),
(14, 'PATCH-BURN GRAZING', 'Cost-saving technology requires less costly infrastructure or fencing'),
(15, 'PATCH-BURN GRAZING', 'Only suitable for paddock larger than 20 acres'),
(16, 'PATCH-BURN GRAZING', 'May takes longer time to burn all patches (3 years)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `techniques_content`
--
ALTER TABLE `techniques_content`
  ADD PRIMARY KEY (`techn_cont_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `techniques_content`
--
ALTER TABLE `techniques_content`
  MODIFY `techn_cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
