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
-- Table structure for table `drought_prepare`
--

CREATE TABLE `drought_prepare` (
  `prepare_id` int(11) NOT NULL,
  `prepare_img` varchar(100) DEFAULT NULL,
  `prepare_title` varchar(50) NOT NULL,
  `prepare_ico` varchar(50) NOT NULL,
  `prepare_text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drought_prepare`
--

INSERT INTO `drought_prepare` (`prepare_id`, `prepare_img`, `prepare_title`, `prepare_ico`, `prepare_text`) VALUES
(1, 'drought/action-plan/header-strategy.jpg', 'Effective Strategy', 'fa fa-check', '<b>Preparing for a drought:</b> build ecological capital, practice effective <span onclick=\"window.location.href=\'techniques.php\';\" style=\"cursor: pointer; color: #4e9525;\"><u><i>grazing techniques</u></i></span>, try to remove <span onclick=\"window.location.href=\'invasive-species.php\';\" style=\"cursor: pointer; color: #4e9525;\"><u><i>invasive weeds</u></i></span>, develop water infrastructure for sufficient water supply, and consider selling some of your livestock.'),
(2, '', 'Effective Strategy', 'fa fa-check', '<b>Managing during a drought:</b> make use of the preparation phase, decide the right rotation method to feed livestock to lower the budget, reduce the number of mobs on the pastures, and make use of <span onclick=\"window.location.href=\'techniques.php\';\" style=\"cursor: pointer; color: #4e9525;\"><u><i>grazing techniques</u></i></span> to allow grassland to heal.'),
(3, '', 'Effective Strategy', 'fa fa-check', '<b>Recovering from drought:</b> analyse the current state, manage cashflow effectively, slowly match the stocking rate to carrying capacity, and finally reflect on what has been done and what can be improved.'),
(4, 'drought/action-plan/header-mental.jpg', 'Health Situation', 'fa fa-check', '<b>Drought is not the end of the world.</b> It is important to keep yourself safe and avoid stressing out.'),
(5, '', 'Health Situation', 'fa fa-check', '<b>Have a place, where you and your family members can bond together</b>, forget about the business for a second, and relax.'),
(6, '', 'Health Situation', 'fa fa-check', '<b>Read books, watch TV, enjoy your free time</b> even if it is not the best time, and most importantly do not keep thoughts to yourself - always discuss them with someone.'),
(7, '', 'Health Situation', 'fa fa-check', 'Most importantly, <b>the Australian government is here to help</b> and to support you. Read below what the government does.'),
(8, 'drought/action-plan/header-livestock.jpeg', 'Livestock Situation', 'fa fa-check', '<b>Use the map above to estimate the possible weather pattern</b>, which is likely to change, and plan forward to avoid livestock starving and becoming distressed during drought.'),
(9, '', 'Livestock Situation', 'fa fa-check', 'Planning is the key - take time to <b>perform calculations</b> to prepare the amount, time, and cost of feeding the livestock.'),
(10, '', 'Livestock Situation', 'fa fa-check', 'Do not be afraid to <b>overestimate the resources</b>, even if your area is less affected by drought.'),
(11, 'drought/action-plan/header-finance.jpg', 'Financial Situation', 'fa fa-check', '<b>List out</b> all <b>physical and financial resources of the farm</b> to consider possible effects on both short- and long-term strategies.'),
(12, '', 'Financial Situation', 'fa fa-check', '<b>Prepare at least 6 months of cash flow budget</b> against possible financial difficulties. It is a good practice to overestimate just to stay safe.'),
(13, '', 'Financial Situation', 'fa fa-check', '<b>Consider reducing the livestock numbers</b> by selling them to minimise the maintenance because there is no exact way to predict the duration of drought.'),
(14, 'drought/action-plan/grassland-header.jpeg', 'Grassland Situation', 'fa fa-check', '<b>Consider the effects of the strategy on the grassland pastures</b> and soil in a long run. It is important to ensure that soil heals well before using it for grazing.'),
(15, '', 'Grassland Situation', 'fa fa-check', 'During the drought, <b>livestock</b>, like cattle, <b>may cause more damage to soil, native vegetation, and flora species.</b> It is advised to keep the situation under control.'),
(16, '', 'Grassland Situation', 'fa fa-check', 'Give at least few weeks to <b>allow grassland to regrow and recover</b>, during the autumn break, by the use of effective <span onclick=\"window.location.href=\'techniques.php\';\" style=\"cursor: pointer; color: #4e9525;\"><u><i>grazing techniques</u></i></span>.'),
(17, '', 'Grassland Situation', 'fa fa-check', '<b>Plant more trees</b> to allow its roots to keep the soil moist for a longer period of time.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drought_prepare`
--
ALTER TABLE `drought_prepare`
  ADD PRIMARY KEY (`prepare_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drought_prepare`
--
ALTER TABLE `drought_prepare`
  MODIFY `prepare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
