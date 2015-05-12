-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2015 at 03:36 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yellowbird`
--

-- --------------------------------------------------------

--
-- Table structure for table `click_here`
--

CREATE TABLE IF NOT EXISTS `click_here` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `as_soon_as` varchar(10) NOT NULL,
  `4_6_weeks` varchar(10) NOT NULL,
  `6_12_weeks` varchar(10) NOT NULL,
  `more_then_3` varchar(10) NOT NULL,
  `full_home` varchar(10) NOT NULL,
  `downsizing` varchar(10) NOT NULL,
  `moving` varchar(10) NOT NULL,
  `accessories` varchar(10) NOT NULL,
  `art` varchar(10) NOT NULL,
  `china` varchar(10) NOT NULL,
  `clothing` varchar(10) NOT NULL,
  `crystal` varchar(10) NOT NULL,
  `firearms` varchar(10) NOT NULL,
  `furniture` varchar(10) NOT NULL,
  `garage_sales` varchar(10) NOT NULL,
  `gold` varchar(10) NOT NULL,
  `jewelery` varchar(10) NOT NULL,
  `kitchen` varchar(10) NOT NULL,
  `outdoor` varchar(10) NOT NULL,
  `rugs` varchar(10) NOT NULL,
  `sporting` varchar(10) NOT NULL,
  `tools` varchar(10) NOT NULL,
  `vehicles` varchar(10) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `click_here`
--

INSERT INTO `click_here` (`id`, `name`, `phone`, `email`, `address`, `city`, `zip`, `as_soon_as`, `4_6_weeks`, `6_12_weeks`, `more_then_3`, `full_home`, `downsizing`, `moving`, `accessories`, `art`, `china`, `clothing`, `crystal`, `firearms`, `furniture`, `garage_sales`, `gold`, `jewelery`, `kitchen`, `outdoor`, `rugs`, `sporting`, `tools`, `vehicles`) VALUES
(3, 'asda', '', 'jobayercse@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(1, 'rifath jahan retu', '', 'rifat.retu.retu@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
