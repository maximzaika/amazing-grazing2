-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 08:22 PM
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
(1, 'flaticon-news', 'Latest News', 'Stay up-tp-date with the latest news regarding grazing, wildfires, drought, and livestock. News from relevant countries are provided to protect our grasslands!', 'news.php'),
(2, 'flaticon-horse-grazing-black-silhouette', 'Grazing Techniques', 'Preserve grassland\'s nature, soil, and grass and increase your livestock numbers by the use of appropriate grazing techniques.', 'techniques.php'),
(3, 'flaticon-chicken', 'Livestock Statistics', 'Dominant livestock has been reducing since 1970 up until now. Action needs to be taken! Various graphs and solutions are provided.', 'livestock-statistics.php'),
(4, 'flaticon-teacher', 'Employment Statistics', 'The number of farmers, working with beef and dairy cattle and sheep, has been reducing. Lots of opportunities for younger farmers to showcase themselves.', 'employment-statistics.php'),
(5, 'flaticon-drought', 'Drought', 'Drought has negative impact on grasslands, which leads to wildfires, loss of wetland, and reduction of livestock. Drought locations and water levels are provided.', 'drought.php'),
(6, 'flaticon-bug', 'Invasive Species', 'Weeds and animals spread and multiplied to the point where they damage grasslands. Various species, their locations, and measures against them are provided.', 'invasive-species.php');

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
  MODIFY `ofr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
