-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 08:22 PM
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
-- Table structure for table `livestock_dataset`
--

CREATE TABLE `livestock_dataset` (
  `stock_id` int(11) NOT NULL,
  `stock_year` int(11) NOT NULL,
  `stock_type` varchar(20) NOT NULL,
  `stock_qty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock_dataset`
--

INSERT INTO `livestock_dataset` (`stock_id`, `stock_year`, `stock_type`, `stock_qty`) VALUES
(1, 1973, 'Beef cattle', 26.6),
(2, 1974, 'Beef cattle', 28.5),
(3, 1975, 'Beef cattle', 29.3),
(4, 1976, 'Beef cattle', 28.3),
(5, 1977, 'Beef cattle', 26.3),
(6, 1978, 'Beef cattle', 24.2),
(7, 1979, 'Beef cattle', 23.4),
(8, 1980, 'Beef cattle', 22.4),
(9, 1981, 'Beef cattle', 21.7),
(10, 1982, 'Beef cattle', 19.7),
(11, 1983, 'Beef cattle', 19.4),
(12, 1984, 'Beef cattle', 20),
(13, 1985, 'Beef cattle', 20.7),
(14, 1986, 'Beef cattle', 19.3),
(15, 1987, 'Beef cattle', 19.3),
(16, 1988, 'Beef cattle', 19.9),
(17, 1989, 'Beef cattle', 20.7),
(18, 1990, 'Beef cattle', 21.2),
(19, 1991, 'Beef cattle', 21.4),
(20, 1992, 'Beef cattle', 21.6),
(21, 1993, 'Beef cattle', 23.1),
(22, 1994, 'Beef cattle', 23),
(23, 1995, 'Beef cattle', 23.6),
(24, 1996, 'Beef cattle', 23.7),
(25, 1997, 'Beef cattle', 23.8),
(26, 1998, 'Beef cattle', 23.4),
(27, 1999, 'Beef cattle', 24.4),
(28, 2000, 'Beef cattle', 24.5),
(29, 2001, 'Beef cattle', 24.7),
(30, 2002, 'Beef cattle', 23.6),
(31, 2003, 'Beef cattle', 24.4),
(32, 2004, 'Beef cattle', 24.7),
(33, 2005, 'Beef cattle', 25.6),
(34, 2006, 'Beef cattle', 25.4),
(35, 2007, 'Beef cattle', 24.8),
(36, 2008, 'Beef cattle', 25.3),
(37, 2009, 'Beef cattle', 24),
(38, 2010, 'Beef cattle', 25.9),
(39, 2011, 'Beef cattle', 25.7),
(40, 2012, 'Beef cattle', 26.5),
(41, 2013, 'Beef cattle', 26.3),
(42, 2014, 'Beef cattle', 24.6),
(43, 2015, 'Beef cattle', 22.3),
(44, 2016, 'Beef cattle', 23.1),
(45, 1973, 'Dairy cattle', 3.7),
(46, 1974, 'Dairy cattle', 3.6),
(47, 1975, 'Dairy cattle', 3.5),
(48, 1976, 'Dairy cattle', 3.3),
(49, 1977, 'Dairy cattle', 3.1),
(50, 1978, 'Dairy cattle', 2.9),
(51, 1979, 'Dairy cattle', 2.8),
(52, 1980, 'Dairy cattle', 2.8),
(53, 1981, 'Dairy cattle', 2.8),
(54, 1982, 'Dairy cattle', 2.8),
(55, 1983, 'Dairy cattle', 2.8),
(56, 1984, 'Dairy cattle', 2.8),
(57, 1985, 'Dairy cattle', 2.8),
(58, 1986, 'Dairy cattle', 2.6),
(59, 1987, 'Dairy cattle', 2.6),
(60, 1988, 'Dairy cattle', 2.5),
(61, 1989, 'Dairy cattle', 2.5),
(62, 1990, 'Dairy cattle', 2.4),
(63, 1991, 'Dairy cattle', 2.4),
(64, 1992, 'Dairy cattle', 2.5),
(65, 1993, 'Dairy cattle', 2.7),
(66, 1994, 'Dairy cattle', 2.7),
(67, 1995, 'Dairy cattle', 2.8),
(68, 1996, 'Dairy cattle', 3),
(69, 1997, 'Dairy cattle', 3.1),
(70, 1998, 'Dairy cattle', 3.2),
(71, 1999, 'Dairy cattle', 3.1),
(72, 2000, 'Dairy cattle', 3.2),
(73, 2001, 'Dairy cattle', 3.1),
(74, 2002, 'Dairy cattle', 3),
(75, 2003, 'Dairy cattle', 3.1),
(76, 2004, 'Dairy cattle', 3.1),
(77, 2005, 'Dairy cattle', 2.8),
(78, 2006, 'Dairy cattle', 2.7),
(79, 2007, 'Dairy cattle', 2.5),
(80, 2008, 'Dairy cattle', 2.6),
(81, 2009, 'Dairy cattle', 2.5),
(82, 2010, 'Dairy cattle', 2.6),
(83, 2011, 'Dairy cattle', 2.7),
(84, 2012, 'Dairy cattle', 2.8),
(85, 2013, 'Dairy cattle', 2.8),
(86, 2014, 'Dairy cattle', 2.8),
(87, 2015, 'Dairy cattle', 2.7),
(88, 2016, 'Dairy cattle', 2.6),
(89, 1973, 'Sheep', 145),
(90, 1974, 'Sheep', 152),
(91, 1975, 'Sheep', 148),
(92, 1976, 'Sheep', 135),
(93, 1977, 'Sheep', 131),
(94, 1978, 'Sheep', 134),
(95, 1979, 'Sheep', 136),
(96, 1980, 'Sheep', 134),
(97, 1981, 'Sheep', 138),
(98, 1982, 'Sheep', 131),
(99, 1983, 'Sheep', 135),
(100, 1984, 'Sheep', 146),
(101, 1985, 'Sheep', 150),
(102, 1986, 'Sheep', 149),
(103, 1987, 'Sheep', 152),
(104, 1988, 'Sheep', 162),
(105, 1989, 'Sheep', 170),
(106, 1990, 'Sheep', 163),
(107, 1991, 'Sheep', 148),
(108, 1992, 'Sheep', 138),
(109, 1993, 'Sheep', 133),
(110, 1994, 'Sheep', 121),
(111, 1995, 'Sheep', 121),
(112, 1996, 'Sheep', 120),
(113, 1997, 'Sheep', 117),
(114, 1998, 'Sheep', 115),
(115, 1999, 'Sheep', 119),
(116, 2000, 'Sheep', 111),
(117, 2001, 'Sheep', 106),
(118, 2002, 'Sheep', 99.3),
(119, 2003, 'Sheep', 101),
(120, 2004, 'Sheep', 101),
(121, 2005, 'Sheep', 91),
(122, 2006, 'Sheep', 85.7),
(123, 2007, 'Sheep', 76.9),
(124, 2008, 'Sheep', 72.7),
(125, 2009, 'Sheep', 68.1),
(126, 2010, 'Sheep', 73.1),
(127, 2011, 'Sheep', 74.7),
(128, 2012, 'Sheep', 75.5),
(129, 2013, 'Sheep', 72.6),
(130, 2014, 'Sheep', 70.9),
(131, 2015, 'Sheep', 67.5),
(132, 2016, 'Sheep', 70.4),
(133, 1973, 'Total', 175.3),
(134, 1974, 'Total', 184.1),
(135, 1975, 'Total', 180.8),
(136, 1976, 'Total', 166.6),
(137, 1977, 'Total', 160.4),
(138, 1978, 'Total', 161.1),
(139, 1979, 'Total', 162.2),
(140, 1980, 'Total', 159.2),
(141, 1981, 'Total', 162.5),
(142, 1982, 'Total', 153.5),
(143, 1983, 'Total', 157.2),
(144, 1984, 'Total', 168.8),
(145, 1985, 'Total', 173.5),
(146, 1986, 'Total', 170.9),
(147, 1987, 'Total', 173.9),
(148, 1988, 'Total', 184.4),
(149, 1989, 'Total', 193.2),
(150, 1990, 'Total', 186.6),
(151, 1991, 'Total', 171.8),
(152, 1992, 'Total', 162.1),
(153, 1993, 'Total', 158.8),
(154, 1994, 'Total', 146.7),
(155, 1995, 'Total', 147.4),
(156, 1996, 'Total', 146.7),
(157, 1997, 'Total', 143.9),
(158, 1998, 'Total', 141.6),
(159, 1999, 'Total', 146.5),
(160, 2000, 'Total', 138.7),
(161, 2001, 'Total', 133.8),
(162, 2002, 'Total', 125.9),
(163, 2003, 'Total', 128.5),
(164, 2004, 'Total', 128.8),
(165, 2005, 'Total', 119.4),
(166, 2006, 'Total', 113.8),
(167, 2007, 'Total', 104.2),
(168, 2008, 'Total', 100.6),
(169, 2009, 'Total', 94.6),
(170, 2010, 'Total', 101.6),
(171, 2011, 'Total', 103.1),
(172, 2012, 'Total', 104.8),
(173, 2013, 'Total', 101.7),
(174, 2014, 'Total', 98.3),
(175, 2015, 'Total', 92.5),
(176, 2016, 'Total', 96.1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livestock_dataset`
--
ALTER TABLE `livestock_dataset`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livestock_dataset`
--
ALTER TABLE `livestock_dataset`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
