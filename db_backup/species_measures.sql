-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 06:58 PM
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
-- Table structure for table `species_measures`
--

CREATE TABLE `species_measures` (
  `measures_id` int(11) NOT NULL,
  `measures_icon` varchar(70) NOT NULL,
  `measures_type` varchar(15) NOT NULL,
  `measures_desc` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `species_measures`
--

INSERT INTO `species_measures` (`measures_id`, `measures_icon`, `measures_type`, `measures_desc`) VALUES
(1, 'flaticon-biology', 'plants', '<b>Biological methods</b> are effective against many of the plants mentioned above; however, this method needs to be controlled to ensure that it does not cause damage to other areas. </b>For example:</b> Cactoblastis moth is used to control prickly pear.'),
(2, 'flaticon-clean-clothes', 'plants', 'It is important to <b>clean shoes, clothes, machinery, and livestock</b> thoroughly before approaching grassland to prevent the spread as much as possible. Humans, animals, or any type of equipment can transport invasive seeds.'),
(3, 'flaticon-poison', 'plants', '<b>Poisoning</b> with herbicides is not just the easiest but also the most dangerous method. There is <i>a high chance of polluting creeks, streams, killing native insects, animals, vegetation, and livestock.</i>'),
(4, 'flaticon-plow', 'plants', '<b>Manual removal</b> and <b>ploughing in</b> are the methods that can be used on the daily basis. While manual removal is suitable against small areas, ploughing is useful against wide areas. However, <i>ploughing cannot be done during the wet weather and can cause soil erosion.</i>'),
(5, 'flaticon-biology', 'animals', '<b>Biological control</b> can be used to control various pests usings natural predators, disease-carrying bacteria or viruses, and parasites. <b>For example:</b> myxomatosis and rabbit calicivirus disease are used to control feral rabbits.'),
(6, 'flaticon-aim', 'animals', '<b>Shooting</b> feral animals are one of the solutions that can be taken into a consideration. To ensure that this method is successful, hunters need to be hired to eliminate half of the animal population every year.'),
(7, 'flaticon-fence', 'animals', 'Large areas can be covered with <b>fences</b> to prevent feral animals, like cattle, goats, buffaloes, etc., from accessing pastures. <b>Electric fences</b> can be used to protect small areas of high conservation value. However, this method has a <i>high cost of building and maintaining.</i>'),
(8, 'flaticon-trap', 'animals', '<b>Traps</b> can be used to catch animals. It is advised to use grain as a bait to attract animals or place them around watering holes. This method is effective against feral pigs and goats. Traps need to be checked daily, so they are <i>ineffective against wide areas.</i>'),
(9, 'flaticon-poison', 'animals', '<b>Poison</b> can be used to control feral pigs, rabbits, and foxes. This method needs to be used with caution because <i>there are risks of poisoning non-targeted animals, livestock or plants.</i>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `species_measures`
--
ALTER TABLE `species_measures`
  ADD PRIMARY KEY (`measures_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `species_measures`
--
ALTER TABLE `species_measures`
  MODIFY `measures_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
