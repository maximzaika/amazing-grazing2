-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 07:08 PM
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
-- Table structure for table `species_landing`
--

CREATE TABLE `species_landing` (
  `species_landing_id` int(11) NOT NULL,
  `species_landing_title` varchar(100) DEFAULT NULL,
  `species_landing_subheading` varchar(150) DEFAULT NULL,
  `species_landing_description` varchar(350) DEFAULT NULL,
  `species_landing_icon` varchar(100) NOT NULL,
  `species_landing_content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species_landing`
--

INSERT INTO `species_landing` (`species_landing_id`, `species_landing_title`, `species_landing_subheading`, `species_landing_description`, `species_landing_icon`, `species_landing_content`) VALUES
(1, 'INVASIVE SPECIES IMPACT GRASSLANDS', 'In Australia, invasive species cause tremendous damage to soil', 'It is a challenge to control invasive species, especially if farmer\'s qualification in Australia is poor. Refer to <i><u><a href=\"employment-statistics.php\">employment</a></u></i> and <i><u><a href=\"livestock-statistics.php\">livestock</a></u></i> statistic pages to gain insight knowledge.', 'fa-exclamation-small fa-exclamation', 'Invasive species compete with native plants, water, and livestock!'),
(2, '', '', '', 'fa-exclamation-small fa-exclamation', 'Invasive weeds are responsible for changing wildfire patterns!'),
(3, '', '', '', 'fa-exclamation-small fa-exclamation', 'Invasive animals degrate soil by overgrazing the grasslands!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `species_landing`
--
ALTER TABLE `species_landing`
  ADD PRIMARY KEY (`species_landing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `species_landing`
--
ALTER TABLE `species_landing`
  MODIFY `species_landing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
