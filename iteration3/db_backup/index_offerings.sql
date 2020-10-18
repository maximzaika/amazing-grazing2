-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 06:59 PM
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
-- Table structure for table `index_offerings`
--

CREATE TABLE `index_offerings` (
  `ofr_id` int(11) NOT NULL,
  `ofr_icon` varchar(255) NOT NULL,
  `ofr_title` varchar(255) NOT NULL,
  `ofr_descr` varchar(255) NOT NULL,
  `ofr_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_offerings`
--

INSERT INTO `index_offerings` (`ofr_id`, `ofr_icon`, `ofr_title`, `ofr_descr`, `ofr_url`) VALUES
(1, 'flaticon-news', 'Latest News', 'Today\'s news regarding grazing, livestock, drought & wildfires', 'news.php'),
(2, 'flaticon-horse-grazing-black-silhouette', 'Grazing Techniques', 'Various grazing techniques required to preserve grassland\'s nature', 'techniques.php'),
(3, 'flaticon-chicken', 'Livestock Statistics', 'Livestock situation and affect on grassland and economy', 'livestock-statistics.php'),
(4, 'flaticon-teacher', 'Employment Statistics', 'The employment situation, agricultural communities, and promotion of the farming profession', 'employment-statistics.php'),
(5, 'flaticon-drought', 'Drought', 'Drought locations, impacts, action plan, and government support', 'drought.php'),
(6, 'flaticon-bug', 'Invasive Species', 'Invasive species locations, impacts, and preventative measures', 'invasive-species.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `index_offerings`
--
ALTER TABLE `index_offerings`
  ADD PRIMARY KEY (`ofr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `index_offerings`
--
ALTER TABLE `index_offerings`
  MODIFY `ofr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
