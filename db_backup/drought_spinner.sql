-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2020 at 06:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `drought_spinner`
--

CREATE TABLE `drought_spinner` (
  `drought_spinner_id` int(11) NOT NULL,
  `drought_spinner_icon` varchar(100) NOT NULL,
  `drought_spinner_title` varchar(50) NOT NULL,
  `drought_spinner_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drought_spinner`
--

INSERT INTO `drought_spinner` (`drought_spinner_id`, `drought_spinner_icon`, `drought_spinner_title`, `drought_spinner_text`) VALUES
(1, 'flaticon-ecosystem', 'Ecosystem', 'Grassland ecosystem provides a huge number of ecological services and other economic products, it is essential for livestock and floral species to maintain balance condition.'),
(2, 'flaticon-loss', 'Economy', 'The drought destroys crops, reduces livestock numbers, and other resources. It has managed to reduce national GDP by 0.75% between 2006 and 2009.'),
(3, 'flaticon-climate-change', 'Climate', 'Climate change is likely to have drought conditions worse in the SW and SE Australia. It influences the fluxes of carbon, water, etc. within the grassland.'),
(4, 'flaticon-rain', 'Rainfall', 'In southeast Australia, late autumn and early winter rainfall have declined by 15% from the 1970s. Also, Western Australia has experienced a 15% decrease in cool season rainfall.'),
(5, 'flaticon-region', 'Regions', 'Queensland and New South Wales are experiencing severe drought nowadays. With drought declared for 57.6% of QLD and 16.4 percent of NSW.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drought_spinner`
--
ALTER TABLE `drought_spinner`
  ADD PRIMARY KEY (`drought_spinner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drought_spinner`
--
ALTER TABLE `drought_spinner`
  MODIFY `drought_spinner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
