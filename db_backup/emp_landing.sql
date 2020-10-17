-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 07:07 PM
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
-- Table structure for table `emp_landing`
--

CREATE TABLE `emp_landing` (
  `employee_landing_id` int(11) NOT NULL,
  `employee_landing_img` varchar(150) DEFAULT NULL,
  `employee_landing_video_url` varchar(150) DEFAULT NULL,
  `employee_landing_title` varchar(250) DEFAULT NULL,
  `employee_landing_subheading` varchar(150) DEFAULT NULL,
  `employee_landing_description` varchar(250) DEFAULT NULL,
  `employee_landing_icon` varchar(100) NOT NULL,
  `employee_landing_content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_landing`
--

INSERT INTO `emp_landing` (`employee_landing_id`, `employee_landing_img`, `employee_landing_video_url`, `employee_landing_title`, `employee_landing_subheading`, `employee_landing_description`, `employee_landing_icon`, `employee_landing_content`) VALUES
(1, 'images/farmers-make-a-difference.png', 'https://www.youtube-nocookie.com/embed/nSp7SuuP1R0', 'FARMERS CAN MAKE A DIFFERENCE', 'Young farmers are required to preserve the future of our soil', 'Large population of elderly farmers will lead to retirement and opening new opporutnities to younger farmers', 'fa-check-small fa-check', 'Educated farmers minimise use of soil disturbance'),
(2, '', '', '', '', '', 'fa-check-small fa-check', 'Educated farmers avoid leaving the soil uncovered'),
(3, '', '', '', '', '', 'fa-check-small fa-check', 'Educated farmers preserve the biodiversity of grasslands'),
(4, '', '', '', '', '', 'fa-check-small fa-check', 'Educated farmers leave living roots to feed soil biology'),
(5, '', '', '', '', '', 'fa-check-small fa-check', 'Educated farmers release animals on to the grasslands');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_landing`
--
ALTER TABLE `emp_landing`
  ADD PRIMARY KEY (`employee_landing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_landing`
--
ALTER TABLE `emp_landing`
  MODIFY `employee_landing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
