-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2017 at 08:09 PM
-- Server version: 5.5.17
-- PHP Version: 5.6.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dsqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `image_name`, `location`) VALUES
(1, 'Marine ford', 'images/marine.jpg'),
(2, 'Luffy fourth gear', 'images/Gear_Four_luffy.jpg'),
(3, 'Newgate Vs Teach', 'images/Newgate_Vs_Teach.jpg'),
(4, 'straw-hat crew', 'images/straw_hat_crew.jpg'),
(5, 'Whitebeard luffy ace ', 'images/Whitebeard_luffy_ace.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
