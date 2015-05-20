-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2015 at 01:49 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `as_soon_as` varchar(10) NOT NULL,
  `_4_6_weeks` varchar(10) NOT NULL,
  `_6_12_weeks` varchar(10) NOT NULL,
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
  `real_estate_agent` varchar(255) NOT NULL,
  `recommendation` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `click_here`
--

INSERT INTO `click_here` (`id`, `name`, `phone`, `email`, `address`, `city`, `zip`, `as_soon_as`, `_4_6_weeks`, `_6_12_weeks`, `more_then_3`, `full_home`, `downsizing`, `moving`, `accessories`, `art`, `china`, `clothing`, `crystal`, `firearms`, `furniture`, `garage_sales`, `gold`, `jewelery`, `kitchen`, `outdoor`, `rugs`, `sporting`, `tools`, `vehicles`, `real_estate_agent`, `recommendation`) VALUES
(5, 'qweq', '', 'asdas2@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(6, 'Unitech Products(BD) Ltd', '', 'info@thesilkmerchant.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(3, 'asda', '', 'jobayercse@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(7, 'Md Jobayer Islam', '', 'jobayer_34@yahoo.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(8, 'Corey Brown', '', 'mwayellowbird@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(1, 'rifath jahan retu', '', 'rifat.retu.retu@gmail.com', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `click_here`
--
ALTER TABLE `click_here`
 ADD PRIMARY KEY (`email`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `click_here`
--
ALTER TABLE `click_here`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
