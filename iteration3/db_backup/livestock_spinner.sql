-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 07:00 PM
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
-- Table structure for table `livestock_spinner`
--

CREATE TABLE `livestock_spinner` (
  `livestock_spinner_id` int(11) NOT NULL,
  `livestock_spinner_icon` varchar(100) NOT NULL,
  `livestock_spinner_title` varchar(50) NOT NULL,
  `livestock_spinner_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_spinner`
--

INSERT INTO `livestock_spinner` (`livestock_spinner_id`, `livestock_spinner_icon`, `livestock_spinner_title`, `livestock_spinner_text`) VALUES
(1, 'flaticon-livestock', 'Livestock', 'The numbers are drastically reducing since 1970s and will extinct in 2060 if no action will be taken! The following numbers are alarming!'),
(2, 'flaticon-meat', 'Beef', 'Production of beef is greatly impacted by the beef cattle numbers. Eventually there won\'t beef remain. The following numbers are alarming!'),
(3, 'flaticon-milk', 'Milk', 'Production of milk is greatly impacted by the dairy cattle numbers. Eventually there won\'t milk remain. The following numbers are alarming!'),
(4, 'flaticon-sheep-1', 'Wool', 'Production of wool is greatly impacted by the sheep numbers. Wool is used for blankets, carpenting and yarn production. Eventually there won\'t wool remain!'),
(5, 'flaticon-region', 'Land use', 'Livestock is important to preserve the grasslands, though, the right grazing techniques need to be utilized to achieve a large volume of production.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livestock_spinner`
--
ALTER TABLE `livestock_spinner`
  ADD PRIMARY KEY (`livestock_spinner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livestock_spinner`
--
ALTER TABLE `livestock_spinner`
  MODIFY `livestock_spinner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
