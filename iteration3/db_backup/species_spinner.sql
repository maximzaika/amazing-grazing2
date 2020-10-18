-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 07:01 PM
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
-- Table structure for table `species_spinner`
--

CREATE TABLE `species_spinner` (
  `species_spinner_id` int(11) NOT NULL,
  `species_spinner_icon` varchar(100) NOT NULL,
  `species_spinner_title` varchar(50) NOT NULL,
  `species_spinner_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species_spinner`
--

INSERT INTO `species_spinner` (`species_spinner_id`, `species_spinner_icon`, `species_spinner_title`, `species_spinner_text`) VALUES
(1, 'flaticon-spreading', 'Dangerous', 'They have spread throughout Australia to the point where they cause damage to grasslands, threaten existence of native plants and animal, or affect grazing.'),
(2, 'flaticon-bug', 'Species', 'Invasive animals, known as feral animals, and invasive plants known as weeds are one of the biggest concerns that Australian grasslands are facing today.'),
(3, 'flaticon-investigate', 'Root cause', 'Most of the damaging invasive animal and weed species were introduced 200 years ago for sport, as pets or as livestock and pack animals.'),
(4, 'flaticon-animal-kingdom', 'Animals', 'Various animals like rabbits, goats, cattle, buffaloes, pigs, donkeys and others, that can be found below, degrate grasslands soil by intense uncontrolled grazing.'),
(5, 'flaticon-hunting', 'Management', 'Various species, like feral animals or weeds, have their own ways to control the infestation. Few methods are shooting, poisoning, fencing, biological, etc.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `species_spinner`
--
ALTER TABLE `species_spinner`
  ADD PRIMARY KEY (`species_spinner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `species_spinner`
--
ALTER TABLE `species_spinner`
  MODIFY `species_spinner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
