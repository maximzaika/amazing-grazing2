-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 07:07 AM
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
-- Table structure for table `g_news_api`
--

CREATE TABLE `g_news_api` (
  `g_news_id` int(11) DEFAULT NULL,
  `g_news_count` int(11) DEFAULT NULL,
  `g_news_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `g_news_api`
--

INSERT INTO `g_news_api` (`g_news_id`, `g_news_count`, `g_news_token`) VALUES
(1, 100, '2f43dc9d754f3008f68a7f50b670c208'),
(2, 100, 'c29b556f2f1ddd7ada7f2d7b6834b2c7'),
(3, 100, 'c3fae1827597a016ef41d4fb9c4f95fe'),
(4, 0, '9e0677170130c646c24d9d907974166c'),
(5, 0, '1d5029e4a17729fbd82d52087fc2c85c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
