-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 04:30 PM
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
-- Table structure for table `employmentinfo`
--

CREATE TABLE IF NOT EXISTS `employmentinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `company_business` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `responsibility` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employmentinfo`
--

INSERT INTO `employmentinfo` (`id`, `company_name`, `company_business`, `address`, `designation`, `department`, `from`, `to`, `duration`, `responsibility`) VALUES
(1, 'udghdsjg', 'kghmkhmghm', 'gjgjgfjg', 'jhgnmgh', 'mghjghj', '2014-12-03', '2014-12-11', 'hfghdfhn', 'gjngfjfgoooooooooooooooooooo'),
(2, 'jftjgj', 'jrjighj', 'jktyjghj', 'jghjghj', 'jggfjftj', '0000-00-00', '0000-00-00', 'uuuu', 'ryrtryr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
