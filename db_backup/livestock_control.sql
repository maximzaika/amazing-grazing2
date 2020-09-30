-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 03:58 PM
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
-- Table structure for table `livestock_control`
--

CREATE TABLE `livestock_control` (
  `livestock_control_id` int(11) NOT NULL,
  `livestock_control_type` varchar(100) NOT NULL,
  `livestock_control_type_etx` varchar(20) NOT NULL,
  `livestock_control_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_control`
--

INSERT INTO `livestock_control` (`livestock_control_id`, `livestock_control_type`, `livestock_control_type_etx`, `livestock_control_name`) VALUES
(1, 'livestock_', 'beef', 'Beef cattle'),
(2, 'livestock_', 'dairy', 'Dairy cattle'),
(3, 'livestock_', 'sheep', 'Sheep'),
(4, 'livestock_', 'total', 'Total'),
(5, 'y_', '2030', '2030'),
(6, 'y_', '2040', '2040'),
(7, 'y_', '2050', '2050'),
(8, 'y_', '2060', '2060');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livestock_control`
--
ALTER TABLE `livestock_control`
  ADD PRIMARY KEY (`livestock_control_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livestock_control`
--
ALTER TABLE `livestock_control`
  MODIFY `livestock_control_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
