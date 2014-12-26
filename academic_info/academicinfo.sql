-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 03:43 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicinfo`
--

CREATE TABLE IF NOT EXISTS `academicinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lvl_of_edu` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `achievement` text NOT NULL,
  `complete_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `academicinfo`
--

INSERT INTO `academicinfo` (`id`, `lvl_of_edu`, `degree`, `group`, `institute`, `result`, `year`, `duration`, `achievement`, `complete_status`) VALUES
(1, 'Bachelor', 'Bachelor of Science (Engineering)', 'CSTE', 'Noakhali Science & Technology University', '3.38', '2014', '0', '', 'Completed'),
(6, 'Bachelor/Honors', 'Farzana', 'CSTE', 'NSTU', '3.22', '2014', '0', '', 'Not Completed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
