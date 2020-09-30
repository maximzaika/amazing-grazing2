-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 04:01 PM
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
-- Table structure for table `livestock_landing`
--

CREATE TABLE `livestock_landing` (
  `livestock_landing_id` int(11) NOT NULL,
  `livestock_landing_title` varchar(100) DEFAULT NULL,
  `livestock_landing_subheading` varchar(150) DEFAULT NULL,
  `livestock_landing_description` varchar(250) DEFAULT NULL,
  `livestock_landing_icon` varchar(100) NOT NULL,
  `livestock_landing_content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_landing`
--

INSERT INTO `livestock_landing` (`livestock_landing_id`, `livestock_landing_title`, `livestock_landing_subheading`, `livestock_landing_description`, `livestock_landing_icon`, `livestock_landing_content`) VALUES
(1, 'LIVESTOCK REDUCTION IMPACTS GRASSLANDS', 'Livestock is required for food production and grazing to improve soil quality', 'Lack of younger and educated farmers is one of the causes that leads to livestock reduction. Refer to <i><u><a href=\"employment-statistics.php\">employment statistics page</a></u></i> to gain insight knowledge.', 'fa-exclamation-small fa-exclamation', 'Livestock is drastically reducing and will lead to its extinction!'),
(2, '', '', '', 'fa-exclamation-small fa-exclamation', 'Livestock is directly affecting beef, milk, wool, and yarn production!'),
(3, '', '', '', 'fa-exclamation-small fa-exclamation', 'Our future is not looking safe. The following numbers prove it!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livestock_landing`
--
ALTER TABLE `livestock_landing`
  ADD PRIMARY KEY (`livestock_landing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livestock_landing`
--
ALTER TABLE `livestock_landing`
  MODIFY `livestock_landing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
