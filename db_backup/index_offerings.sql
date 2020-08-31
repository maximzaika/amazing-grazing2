-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 12:49 PM
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
  `ofr_id` int(11) DEFAULT NULL,
  `ofr_icon` varchar(255) DEFAULT NULL,
  `ofr_title` varchar(255) DEFAULT NULL,
  `ofr_descr` varchar(255) DEFAULT NULL,
  `ofr_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_offerings`
--

INSERT INTO `index_offerings` (`ofr_id`, `ofr_icon`, `ofr_title`, `ofr_descr`, `ofr_url`) VALUES
(1, 'flaticon-news', 'News', 'Staying up to date with the news regarding grazing, fires, drought, and livestock is important for all of us.', 'news.php'),
(2, 'flaticon-statistics', 'Statistics', 'Dominants livestock has been reducing since 1970 up until now. Various graphs related to specific livestock provides some analysis regarding the current situation.', 'wip.php'),
(3, 'flaticon-horse-grazing-black-silhouette', 'Grazing Techniques', 'Preserving grassland\'s nature, soil, and grass is important to improve livestock and its safety. Various techniques are provided to guide you.', 'techniques.php'),
(4, 'flaticon-drought', 'Drought Prediction', 'Drought is one of the issues that prevent effective grazing, ruins the soil, causes fires, and leads to livestock reduction. We aim to predict drought seasons to assist you.', 'wip.php');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
