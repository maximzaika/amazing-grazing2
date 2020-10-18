-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 07:00 PM
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
-- Table structure for table `livestock_prediction_dataset`
--

CREATE TABLE `livestock_prediction_dataset` (
  `predict_id` int(11) NOT NULL,
  `predict_year` int(11) NOT NULL,
  `predict_type` varchar(20) NOT NULL,
  `predict_qty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_prediction_dataset`
--

INSERT INTO `livestock_prediction_dataset` (`predict_id`, `predict_year`, `predict_type`, `predict_qty`) VALUES
(1, 2017, 'Beef cattle', 21.72),
(2, 2018, 'Beef cattle', 20.89),
(3, 2019, 'Beef cattle', 20.78),
(4, 2020, 'Beef cattle', 21.22),
(5, 2021, 'Beef cattle', 21.19),
(6, 2022, 'Beef cattle', 21.69),
(7, 2023, 'Beef cattle', 22.09),
(8, 2024, 'Beef cattle', 22.22),
(9, 2025, 'Beef cattle', 21.92),
(10, 2026, 'Beef cattle', 20.82),
(11, 2027, 'Beef cattle', 20.29),
(12, 2028, 'Beef cattle', 19.94),
(13, 2029, 'Beef cattle', 20.45),
(14, 2030, 'Beef cattle', 19.67),
(15, 2031, 'Beef cattle', 19.58),
(16, 2032, 'Beef cattle', 20.02),
(17, 2033, 'Beef cattle', 20),
(18, 2034, 'Beef cattle', 20.5),
(19, 2035, 'Beef cattle', 20.9),
(20, 2036, 'Beef cattle', 21.03),
(21, 2037, 'Beef cattle', 20.73),
(22, 2038, 'Beef cattle', 19.63),
(23, 2039, 'Beef cattle', 19.1),
(24, 2040, 'Beef cattle', 18.75),
(25, 2041, 'Beef cattle', 19.26),
(26, 2042, 'Beef cattle', 18.48),
(27, 2043, 'Beef cattle', 18.39),
(28, 2044, 'Beef cattle', 18.83),
(29, 2045, 'Beef cattle', 18.81),
(30, 2046, 'Beef cattle', 19.31),
(31, 2047, 'Beef cattle', 19.71),
(32, 2048, 'Beef cattle', 19.84),
(33, 2049, 'Beef cattle', 19.54),
(34, 2050, 'Beef cattle', 18.44),
(35, 2051, 'Beef cattle', 17.91),
(36, 2052, 'Beef cattle', 17.56),
(37, 2053, 'Beef cattle', 18.07),
(38, 2054, 'Beef cattle', 17.29),
(39, 2055, 'Beef cattle', 17.2),
(40, 2056, 'Beef cattle', 17.64),
(41, 2057, 'Beef cattle', 17.62),
(42, 2058, 'Beef cattle', 18.12),
(43, 2059, 'Beef cattle', 18.52),
(44, 2060, 'Beef cattle', 18.65),
(45, 2061, 'Beef cattle', 18.35),
(46, 2062, 'Beef cattle', 17.25),
(47, 2063, 'Beef cattle', 16.72),
(48, 2064, 'Beef cattle', 16.37),
(49, 2065, 'Beef cattle', 16.88),
(50, 2066, 'Beef cattle', 16.1),
(51, 2067, 'Beef cattle', 16.01),
(52, 2068, 'Beef cattle', 16.45),
(53, 2069, 'Beef cattle', 16.43),
(54, 2070, 'Beef cattle', 16.93),
(55, 2071, 'Beef cattle', 17.33),
(56, 2072, 'Beef cattle', 17.46),
(57, 2073, 'Beef cattle', 17.16),
(58, 2074, 'Beef cattle', 16.06),
(59, 2075, 'Beef cattle', 15.53),
(60, 2017, 'Dairy cattle', 2.61),
(61, 2018, 'Dairy cattle', 2.56),
(62, 2019, 'Dairy cattle', 2.5),
(63, 2020, 'Dairy cattle', 2.61),
(64, 2021, 'Dairy cattle', 2.59),
(65, 2022, 'Dairy cattle', 2.61),
(66, 2023, 'Dairy cattle', 2.61),
(67, 2024, 'Dairy cattle', 2.62),
(68, 2025, 'Dairy cattle', 2.57),
(69, 2026, 'Dairy cattle', 2.49),
(70, 2027, 'Dairy cattle', 2.46),
(71, 2028, 'Dairy cattle', 2.48),
(72, 2029, 'Dairy cattle', 2.41),
(73, 2030, 'Dairy cattle', 2.36),
(74, 2031, 'Dairy cattle', 2.3),
(75, 2032, 'Dairy cattle', 2.41),
(76, 2033, 'Dairy cattle', 2.39),
(77, 2034, 'Dairy cattle', 2.4),
(78, 2035, 'Dairy cattle', 2.4),
(79, 2036, 'Dairy cattle', 2.42),
(80, 2037, 'Dairy cattle', 2.37),
(81, 2038, 'Dairy cattle', 2.29),
(82, 2039, 'Dairy cattle', 2.26),
(83, 2040, 'Dairy cattle', 2.28),
(84, 2041, 'Dairy cattle', 2.2),
(85, 2042, 'Dairy cattle', 2.16),
(86, 2043, 'Dairy cattle', 2.1),
(87, 2044, 'Dairy cattle', 2.2),
(88, 2045, 'Dairy cattle', 2.19),
(89, 2046, 'Dairy cattle', 2.2),
(90, 2047, 'Dairy cattle', 2.2),
(91, 2048, 'Dairy cattle', 2.22),
(92, 2049, 'Dairy cattle', 2.16),
(93, 2050, 'Dairy cattle', 2.09),
(94, 2051, 'Dairy cattle', 2.06),
(95, 2052, 'Dairy cattle', 2.07),
(96, 2053, 'Dairy cattle', 2),
(97, 2054, 'Dairy cattle', 1.95),
(98, 2055, 'Dairy cattle', 1.9),
(99, 2056, 'Dairy cattle', 2),
(100, 2057, 'Dairy cattle', 1.98),
(101, 2058, 'Dairy cattle', 2),
(102, 2059, 'Dairy cattle', 2),
(103, 2060, 'Dairy cattle', 2.02),
(104, 2017, 'Sheep', 63.63),
(105, 2018, 'Sheep', 60.01),
(106, 2019, 'Sheep', 51.95),
(107, 2020, 'Sheep', 50.42),
(108, 2021, 'Sheep', 52.54),
(109, 2022, 'Sheep', 51.89),
(110, 2023, 'Sheep', 54.14),
(111, 2024, 'Sheep', 55.29),
(112, 2025, 'Sheep', 52.74),
(113, 2026, 'Sheep', 51.77),
(114, 2027, 'Sheep', 48.67),
(115, 2028, 'Sheep', 44.99),
(116, 2029, 'Sheep', 41.03),
(117, 2030, 'Sheep', 37.38),
(118, 2031, 'Sheep', 29.3),
(119, 2032, 'Sheep', 27.77),
(120, 2033, 'Sheep', 29.89),
(121, 2034, 'Sheep', 29.24),
(122, 2035, 'Sheep', 31.49),
(123, 2036, 'Sheep', 32.64),
(124, 2037, 'Sheep', 30.09),
(125, 2038, 'Sheep', 29.11),
(126, 2039, 'Sheep', 26.01),
(127, 2040, 'Sheep', 22.34),
(128, 2041, 'Sheep', 18.37),
(129, 2042, 'Sheep', 14.73),
(130, 2043, 'Sheep', 6.65),
(131, 2044, 'Sheep', 5.12),
(132, 2045, 'Sheep', 7.24),
(133, 2046, 'Sheep', 6.59),
(134, 2047, 'Sheep', 8.84),
(135, 2048, 'Sheep', 9.99),
(136, 2049, 'Sheep', 7.44),
(137, 2050, 'Sheep', 6.46),
(138, 2051, 'Sheep', 3.36),
(139, 2052, 'Sheep', 0),
(140, 2053, 'Sheep', 0),
(141, 2054, 'Sheep', 0),
(142, 2055, 'Sheep', 0),
(143, 2056, 'Sheep', 0),
(144, 2057, 'Sheep', 0),
(145, 2058, 'Sheep', 0),
(146, 2059, 'Sheep', 0),
(147, 2060, 'Sheep', 0),
(148, 2017, 'Total', 84.53),
(149, 2018, 'Total', 75.61),
(150, 2019, 'Total', 73.9),
(151, 2020, 'Total', 76.47),
(152, 2021, 'Total', 75.64),
(153, 2022, 'Total', 78.37),
(154, 2023, 'Total', 79.89),
(155, 2024, 'Total', 77.44),
(156, 2025, 'Total', 76.09),
(157, 2026, 'Total', 71.79),
(158, 2027, 'Total', 67.57),
(159, 2028, 'Total', 63.3),
(160, 2029, 'Total', 60.13),
(161, 2030, 'Total', 51.23),
(162, 2031, 'Total', 49.53),
(163, 2032, 'Total', 52.11),
(164, 2033, 'Total', 51.28),
(165, 2034, 'Total', 54),
(166, 2035, 'Total', 55.53),
(167, 2036, 'Total', 53.08),
(168, 2037, 'Total', 51.73),
(169, 2038, 'Total', 47.43),
(170, 2039, 'Total', 43.2),
(171, 2040, 'Total', 38.93),
(172, 2041, 'Total', 35.76),
(173, 2042, 'Total', 26.87),
(174, 2043, 'Total', 25.17),
(175, 2044, 'Total', 27.74),
(176, 2045, 'Total', 26.91),
(177, 2046, 'Total', 29.64),
(178, 2047, 'Total', 31.16),
(179, 2048, 'Total', 28.71),
(180, 2049, 'Total', 27.36),
(181, 2050, 'Total', 23.06),
(182, 2051, 'Total', 18.84),
(183, 2052, 'Total', 14.57),
(184, 2053, 'Total', 11.4),
(185, 2054, 'Total', 2.5),
(186, 2055, 'Total', 0.8),
(187, 2056, 'Total', 3.38),
(188, 2057, 'Total', 2.55),
(189, 2058, 'Total', 5.27),
(190, 2059, 'Total', 6.8),
(191, 2060, 'Total', 4.35),
(192, 2061, 'Total', 3),
(193, 2062, 'Total', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livestock_prediction_dataset`
--
ALTER TABLE `livestock_prediction_dataset`
  ADD PRIMARY KEY (`predict_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livestock_prediction_dataset`
--
ALTER TABLE `livestock_prediction_dataset`
  MODIFY `predict_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
