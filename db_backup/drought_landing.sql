-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 07:06 PM
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
-- Table structure for table `drought_landing`
--

CREATE TABLE `drought_landing` (
  `drought_landing_id` int(11) NOT NULL,
  `drought_landing_title` varchar(100) DEFAULT NULL,
  `drought_landing_subheading` varchar(150) DEFAULT NULL,
  `drought_landing_description` varchar(350) DEFAULT NULL,
  `drought_landing_icon` varchar(100) NOT NULL,
  `drought_landing_content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drought_landing`
--

INSERT INTO `drought_landing` (`drought_landing_id`, `drought_landing_title`, `drought_landing_subheading`, `drought_landing_description`, `drought_landing_icon`, `drought_landing_content`) VALUES
(1, 'DROUGHT IMPACTS GRASSLANDS', 'Droughts are one of the main natural hazards, which reduce grassland productivity', 'Droughts cannot be prevented and accurately predicted, but the damage that it causes can be reduced. Drought directly affects <i><u><a href=\"livestock-statistics.php\">livestock numbers</a></u></i>.', 'fa-exclamation-small fa-exclamation', 'Restricts the geographical distribution of grassland species!'),
(2, '', '', '', 'fa-exclamation-small fa-exclamation', 'Leads to local loss of production by impacting the employment!'),
(3, '', '', '', 'fa-exclamation-small fa-exclamation', 'Increases the chances of wildfires and grassland habitat loss!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drought_landing`
--
ALTER TABLE `drought_landing`
  ADD PRIMARY KEY (`drought_landing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drought_landing`
--
ALTER TABLE `drought_landing`
  MODIFY `drought_landing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
