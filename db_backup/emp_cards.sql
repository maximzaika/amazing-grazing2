-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 08:21 PM
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
-- Table structure for table `emp_cards`
--

CREATE TABLE `emp_cards` (
  `farmer_id` int(11) NOT NULL,
  `farmer_url` varchar(100) NOT NULL,
  `farmer_url2` varchar(100) NOT NULL,
  `farmer_card` varchar(200) NOT NULL,
  `farmer_text` varchar(300) NOT NULL,
  `farmer_modal_title` varchar(200) DEFAULT NULL,
  `farmer_modal_text` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_cards`
--

INSERT INTO `emp_cards` (`farmer_id`, `farmer_url`, `farmer_url2`, `farmer_card`, `farmer_text`, `farmer_modal_title`, `farmer_modal_text`) VALUES
(1, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'Farmers are the ones who can make a difference in protecting Australian grasslands.', '', ''),
(2, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'The employment number negatively affects livestock numbers.', '', ''),
(3, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'Put out appeals via social media for fellow farmers to donate forage and straw to donate to desperate farmers, as well as pleas for haulage services.', '', ''),
(4, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'Developing tourism and other industries (during patch regrowth) to ensure the longevity and success use of the land.', '', ''),
(5, 'livestock-statistics.php', 'techniques.php', 'Farmer', 'Small farmers sell up to large-scale farming operations, and fewer young people take over family farms.', '', ''),
(6, 'livestock-statistics.php', 'techniques.php', 'Education', 'Education is the key! Multiple Australian sources state that lack of education leads to the destruction of grasslands.', '', ''),
(7, 'livestock-statistics.php', 'techniques.php', 'Education', 'Poor education leads to livestock number reduction.', '', ''),
(8, 'livestock-statistics.php', 'techniques.php', 'Education', 'It is an opportunity for everyone, young and old, to discover first-hand what it means to be a farmer and educate on the work they do producing our food and enhancing the countryside.', '', ''),
(9, 'livestock-statistics.php', 'techniques.php', 'Education', 'Innovation and collaboration are at the heart of future approach to educated farming, implement practices that will enhance soil.', '', ''),
(10, 'livestock-statistics.php', 'techniques.php', 'Age', 'Young farmers are the one who can make a difference but there are not many of them!', '', ''),
(11, 'livestock-statistics.php', 'techniques.php', 'Age', 'Elderly farmers are not staying up-to-date with the current trend and situation.', '', ''),
(12, 'livestock-statistics.php', 'techniques.php', 'Age', 'Encourage young people from all agricultural industries to apply to join the Young Farmers Advisory Council.', '', ''),
(13, 'livestock-statistics.php', 'techniques.php', 'Age', 'Young farmers will need access to land and partnerships to help them learn how to be successful in a changing agricultural landscape.', '', ''),
(14, 'livestock-statistics.php', 'techniques.php', 'Age', 'The strong indicator of success for young farmers that it’s a chance for new knowledge and practices. Allows young farmers to expand more everyday.', '', ''),
(15, 'livestock-statistics.php', 'techniques.php', 'Age', 'To encourage young farmers to join the sector it is vital that they are offered a voice, and that we take note of what they have to say.', '', ''),
(16, 'livestock-statistics.php', 'techniques.php', 'Age', 'Giving young farmers at policy level a chance to offer their opinion and experiences.', '', ''),
(17, 'livestock-statistics.php', 'techniques.php', 'Age', 'In order to attract more young farmers that bring the new breeze into this industry, scholarship programs offered to kids who want to go back to the farm can help.', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_cards`
--
ALTER TABLE `emp_cards`
  ADD PRIMARY KEY (`farmer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_cards`
--
ALTER TABLE `emp_cards`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
