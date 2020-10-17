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
-- Table structure for table `nav_bar`
--

CREATE TABLE `nav_bar` (
  `nav_id` int(11) NOT NULL,
  `nav_link` varchar(100) NOT NULL,
  `nav_title` varchar(100) NOT NULL,
  `nav_drop` int(11) NOT NULL,
  `nav_topic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nav_bar`
--

INSERT INTO `nav_bar` (`nav_id`, `nav_link`, `nav_title`, `nav_drop`, `nav_topic`) VALUES
(1, 'index.php', 'Home', 0, 'none'),
(2, 'news.php', 'News', 0, 'none'),
(3, 'techniques.php', 'Techniques', 0, 'none'),
(4, 'livestock-statistics.php', 'Livestock', 1, 'Statistics'),
(5, 'employment-statistics.php', 'Employment', 1, 'Statistics'),
(6, 'drought.php', 'Drought', 0, 'none'),
(7, 'invasive-species.php', 'Species', 0, 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nav_bar`
--
ALTER TABLE `nav_bar`
  ADD PRIMARY KEY (`nav_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nav_bar`
--
ALTER TABLE `nav_bar`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
