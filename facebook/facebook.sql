-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2014 at 11:11 PM
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
-- Table structure for table `facebook`
--

CREATE TABLE IF NOT EXISTS `facebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth_day` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `food1` varchar(255) NOT NULL,
  `food2` varchar(255) NOT NULL,
  `food3` varchar(255) NOT NULL,
  `food4` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`id`, `first_name`, `last_name`, `email`, `password`, `birth_day`, `gender`, `hobby`, `food1`, `food2`, `food3`, `food4`, `comment`, `created`, `modified`) VALUES
(7, '', '', '', '', '0000-00-00', 'Male', 'Travelling', 'Icecream', 'Chocolate', '', '', '', '2014-12-31 02:45:26', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
