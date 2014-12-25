-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2014 at 07:24 PM
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
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `birth_reg` varchar(255) NOT NULL,
  `passport_num` varchar(255) NOT NULL,
  `ssc_board` varchar(255) NOT NULL,
  `ssc_roll` int(10) NOT NULL,
  `hsc_board` varchar(255) NOT NULL,
  `hsc_roll` int(10) NOT NULL,
  `laptop` varchar(255) NOT NULL,
  `exam_center` varchar(255) NOT NULL,
  `mobile` int(12) NOT NULL,
  `home_phone` int(20) NOT NULL,
  `emergency_contact` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alternate_email` varchar(50) NOT NULL,
  `current_location` varchar(255) NOT NULL,
  `present_address` text NOT NULL,
  `parmanent_address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `father`, `mother`, `gender`, `religion`, `date_of_birth`, `national_id`, `birth_reg`, `passport_num`, `ssc_board`, `ssc_roll`, `hsc_board`, `hsc_roll`, `laptop`, `exam_center`, `mobile`, `home_phone`, `emergency_contact`, `email`, `alternate_email`, `current_location`, `present_address`, `parmanent_address`) VALUES
(1, 'Wakilatun Nessa Chowdhury', 'Wahidur Rahman chowdhury', 'Jannatun Nessa chowdhury', 'Female', 'Islam', '1990-04-21', '389752902870670943', '', '', 'Comilla', 234355, 'Dhaka', 433464, '1', 'BCC Dhaka', 2147483647, 0, 0, 'bornaly.cste@yahoo.com', 'ostitto.03@gmail.com', 'Dhaka', 'Shamoli,Mohammadpur,Babor road,Dhaka.', 'Dotterhat,Noakhali.'),
(7, 'Rifat Binte Mizan', 'Mizan Ahmed', 'Rehana Begum', 'female', 'islam', '1990-04-23', '7365238563985', '45645748', '568756urd57', 'rajshahi', 453466, 'rajshahi', 465457, 'yes', 'bcc_rajshahi', 1687535884, 857637386, 1683543059, 'rifat.mizan@yahoo.com', 'rifat.raj@gmail.com', 'Dhaka', 'Mohammodpur,Dhaka.', 'Shalbagan,Rajshahi.'),
(8, 'Farzan', 'Bablu', 'Lili', 'Male', 'Islam', '1990-04-23', '723563856395838', '56348563', '43764684', 'Comilla', 345354, 'Dhaka', 346457, 'Yes', 'bcc_dhaka', 1745467878, 4655758, 547657678, 'bornaly.cste@gmail.com', 'wakila.farzan@gmail.com', 'Dhaka', 'Shamoli,Dhaka.', 'Noakhali.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
