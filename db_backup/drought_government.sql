-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 03:51 PM
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
-- Table structure for table `drought_government`
--

CREATE TABLE `drought_government` (
  `govern_id` int(11) NOT NULL,
  `govern_ico` varchar(50) NOT NULL,
  `govern_title` varchar(100) NOT NULL,
  `govern_fron_descr` varchar(150) NOT NULL,
  `govern_back_descr` varchar(250) NOT NULL,
  `govern_url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drought_government`
--

INSERT INTO `drought_government` (`govern_id`, `govern_ico`, `govern_title`, `govern_fron_descr`, `govern_back_descr`, `govern_url`) VALUES
(1, 'flaticon-mortgage-loan', 'Drought Loans', 'All eligible farm owners can get a loan', 'The government can provide up to $2 million in loans at any time during drought seasons. Refer to the Australian government website to learn more.', 'https://www.ric.gov.au/drought'),
(2, 'flaticon-eco-friendly', 'Community Support', 'All eligible farm owners can get support from charities', 'Support can be provided after evaluating the severity, economic impact, and the damage was done. Refer to the Australian government website to learn more.', 'https://www.regional.gov.au/regional/programs/drought-communities.aspx'),
(3, 'flaticon-mental-health', 'Health Support', 'The overnment\'e provided to get immediate support. Drought sis priority is the wellbeing of Australian farmers', 'Hotlines are provided to get immediate support. The drought situation is stressful. Do not keep the thoughts to yourself, press the button below to get in touch.', 'https://www.agriculture.gov.au/ag-farm-food/drought/assistance/social-community-support-services'),
(4, 'flaticon-water-tank', 'Water Infrastructure', 'The government provides rebates for water infrastructure utilised by the farms', 'Up to an additional $50 million of funding is provided to farmers to support the expansion. Visit the Australian government website now, to learn more.', 'https://www.agriculture.gov.au/water/national/on-farm-infrastructure-rebate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drought_government`
--
ALTER TABLE `drought_government`
  ADD PRIMARY KEY (`govern_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drought_government`
--
ALTER TABLE `drought_government`
  MODIFY `govern_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
