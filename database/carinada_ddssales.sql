-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2016 at 10:22 PM
-- Server version: 5.5.47-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carinada_ddssales`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `school` text NOT NULL,
  `grade` text NOT NULL,
  `plan` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `name`, `school`, `grade`, `plan`, `quantity`, `price`) VALUES
(1, 'Daidone, Carina', 'BRCS', '6B', 'Pre-Paid', 1, '425.00'),
(2, 'Yager, Nikki', 'St. Paul', '1A', 'Tickets', 1, '37.50'),
(3, 'Williams, Serena', 'Evert', '3A', 'Tickets', 2, '37.50'),
(4, 'Copeland, Misty', 'Harid', '10B', 'Pre-Paid', 1, '500.00'),
(5, 'Graham, Billy', 'SRCS', '6B', 'Pre-Paid', 1, '425.00'),
(6, 'Lewis, C.S.', 'BRCS', '2A', 'Pre-Paid', 1, '375.00'),
(7, 'Kat, Ali', 'Abundent', '4A', 'Tickets', 3, '37.50'),
(8, 'West, North', 'Harid', '9A', 'Tickets', 3, '50.00'),
(9, 'West, South', 'Harid', '7B', 'Pre-Paid', 1, '425.00'),
(10, 'West, East', 'Harid', '12A', 'Tickets', 4, '50.00'),
(11, 'Polish, Essie', 'BRCS', '6A', 'Tickets', 2, '45.00'),
(12, 'Gator, Albert', 'Abundent', '5C', 'Tickets', 1, '37.50'),
(13, 'Gator, Alberta', 'Abundent', '5C', 'Tickets', 3, '37.50'),
(14, 'Cyrus, Miley', 'Evert', '4B', 'Pre-Paid', 1, '375.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
